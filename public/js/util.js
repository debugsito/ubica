function validarSesion(condicion, redirect = false){
	console.log("asdasd");
	if(localStorage.getItem('reclutamientoToken')){

		if (condicion == "interno") {
			localStorage.getItem('redrilsaMenu')
			console.log(localStorage.getItem('redrilsaUsuario'));
			$("#_nombreUser").html(localStorage.getItem('redrilsaUsuario'))
			let menu = JSON.parse(localStorage.getItem('redrilsaMenu'));
			$.each(menu, function(index, val) {
				console.log(index)
				console.log(val)
			});
			let template = document.getElementById('tmpMenu').innerHTML;
			let rendered = Mustache.render(template,{
				menu: menu
			});
			console.log(rendered);
			$("#menuRedrilsa").html(rendered)
		}
		$.ajax({
			url: `${base_url}/restUsuarios/verifyToken`,
			type: 'POST',
			dataType: 'json',
			data: {
				token: JSON.parse(localStorage.getItem('reclutamientoToken')),
			}
		})
		.done(function(response) {
			let token = JSON.parse(localStorage.getItem('reclutamientoToken'));
			if (response.error == "OK") {
				if (condicion == "externo") {
					$.redirect(redirect, {
						token: token,
						urlActual: urlActual
					});
				}
			}
		})
		.fail(function(event, jqxhr, ajaxOptions, errorThrown) {
			if (event.status == 400) {
				if (condicion == "interno"){
					let response = event.responseJSON.messages;
					$.redirect(base_url);
				}
			}
		})
		.always(function() {
			console.log("complete");
		});	
	}else{
		if (condicion == "interno"){
			// let response = event.responseJSON.messages;
			$.redirect(base_url);
		}
	}
}



function msj(error, mensaje){
	if (error=='OK') {
		alertify.success(mensaje);
	}else{
		alertify.error(mensaje);
	}
}


function mostrarError($form, $element){
	console.log($form);
	console.log($element);
	// mostrar errores para jqueryValidate
	$form.showErrors($element);
}

function load(modo, mensaje=false){
	if (modo == 'on') {
		$('body').loadingModal({
			position:'auto',
			text: mensaje,
			color:'#fff',
			opacity:'0.7',
			backgroundColor:'rgb(0,0,0)',
			animation:'foldingCube'
		});
		$('body').loadingModal('show');
		$('form').find('button').prop('disabled',true);
		// $("#preCarga").modal('show');
	}else{
		$('body').loadingModal('hide');
		$('body').loadingModal('destroy');
		$('form').find('button').prop('disabled',false);
	}
}


function agregarOption(objeto, array, valor, texto, select = null){
	let obj = $(objeto);
	let option = $(obj.find('option')[0]);
	let html;
	// html += `<option value="${option.val()}">${option.text()}</option>`;
	if (array.length>0) {
		$.each(array, function(index, val) {
			let sele = (val[valor] == select)?'selected':'';
			html += `<option value="${val[valor]}" ${sele}>${val[texto]}</option>`;
		});
	}
	obj.html(html);
}


$(document).ajaxError(function(event, jqxhr, settings, exception){ 
	if (jqxhr.status == 500) {
		let titulo = "Ups!!";
		let mensaje = 'Ocurrio un problema al comunicarse con el servidor';
		msjEntendido(titulo, mensaje)
	}else if (jqxhr.status == 401) {
		let titulo = "Ups!!";
		let mensaje = 'Token invalido';
		msjEntendido(titulo, mensaje, "reload");
	}
});


function msjEntendido(titulo, mensaje=false, all = false){
	BootstrapDialog.show({			
		title: `<span class="text-purple">${titulo}</span>`,
		message: `<div class="text-center">${mensaje}</div>`,
		closable: false,
		buttons: [{
			label: 'Entendido',
			hotkey: 13, 
			cssClass: 'btn bg-orange text-white px-4',
			action: function(dialog){
				if (all == false) {
					dialog.close();
				}else if(all == 'reload'){
					dialog.close();
					location.reload();
				}else{
					$.each(BootstrapDialog.dialogs, function(id, dialog){
						dialog.close();
					});
				}
			}
		}],
	});
}

function button(modal, btnClick, estado){
	if (estado == true) {
		btnClick.find('span').remove();
	}
	modal.enableButtons(estado);
}




$("#salir").click(function(e){
	e.preventDefault();
	let token = JSON.parse(localStorage.getItem('reclutamientoToken'));
	let urlRedirect = `${base_url}/salir`;
	$.redirect(urlRedirect, {
		token: token,
		URLactual: urlActual
	});
})



function dxSelect(element, name, datos, key, search, value = '', group = false, required = false){
	const dataTipo_licencia = new DevExpress.data.DataSource({
		store: datos,
		key: key,
		group: group
	});

	return $(element).dxSelectBox({
		inputAttr: {
			"required": required,
			"name": `data${name}`,
			placeholder: "Seleccione...",
		},
		placeholder: "Seleccione...",
		value: value,
		name: name,
		dataSource: dataTipo_licencia,
		valueExpr: key,
		displayExpr: search,
		searchEnabled: true,
		onValueChanged: function(e) {
			const item = datos.filter(i => i.ID === e.value)[0];
		},
		grouped: (group != false)?true:false
	});
}


function crearExcel($cabecera, $body, $nombreExcel = false, $nombreHoja = false){

	var createXLSLFormatObj = [];
	/* XLS Head Columns */
	var xlsHeader = $cabecera;

	/* XLS Rows Data */
	var xlsRows = $body;


	createXLSLFormatObj.push(xlsHeader);
	$.each(xlsRows, function(index, value) {
		var innerRowData = [];
		$.each(value, function(ind, val) {
			if (ind == 'url') {
				innerRowData.push(base_url+val);
			}else{
				innerRowData.push(val);
			}
		});
		createXLSLFormatObj.push(innerRowData);
	});

	var nameExcel = (($nombreExcel==false)?'excel-':$nombreExcel+"-")+moment().format("DD-MM-YYYY");
	/* File Name */
	var filename = nameExcel+".xlsx";

	/* Sheet Name */
	var ws_name = ($nombreHoja==false)?null:$nombreHoja;

	// if (typeof console !== 'undefined') console.log(new Date());
	var wb = XLSX.utils.book_new(),
	ws = XLSX.utils.aoa_to_sheet(createXLSLFormatObj);

	/* Add worksheet to workbook */
	XLSX.utils.book_append_sheet(wb, ws, ws_name);

	/* Write workbook and Download */
	if (typeof console !== 'undefined') console.log(new Date());
	XLSX.writeFile(wb, filename);
	if (typeof console !== 'undefined') console.log(new Date());
}