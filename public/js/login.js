$("#formRegistro").validate({
	submitHandler: function (form) {
		var formData = new FormData(form);
		$.ajax({
			cache: false,
			contentType: false,
			processData: false,
			url: base_url+'Admin/registro',
			type: 'POST',
			dataType: 'json',
			data: formData,
			beforeSend: function() {
				load('on');
			},
			success : function(){
				load('off');
			}
		})
		.done(function(response) {
			if (response.result == 'OK') {
				msj(response.result, response.msj);
				$("#formRegistro")[0].reset();
				window.location = base_url+'datos';
			}else{
				msj(response.result, response.msj);
			}
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	}	
});


$("#btnLogin").click(function(){
	let template =  document.getElementById('tmpLogin').innerHTML;
	let rendered = Mustache.render(template);

	BootstrapDialog.show({
		title: 'Iniciar Sesion',
		message : rendered,
		buttons : [{
			label: "Cancelar",
			cssClass : "btn btn-secondary rounded-0 mx-2",
			action: function(dialogRef) {
				dialogRef.close();
			}
		},{
			label: 'Ingresar',
			cssClass: 'btn btn-primary rounded-0 mx-2',
			autospin: true,
			action: function(dialogRef) {
				let btnClick = this;
				let formLogin = $("#formLogin").validate({
					invalidHandler: function(event, validator) {
						button(dialogRef, btnClick, true);
					},
					submitHandler: function(form){
						
						
						$.ajax({
							url: `${base_url}/home/login`,
							dataType: 'JSON',
							type: 'POST',
							data: $(form).serialize(),
						})
						.done(function(response) {
							// let res = JSON.parse(response);
							console.log('res', response.result)
							if (response.result == "OK") {
								msj(res.result, res.msj);
								dialogRef.close();
							}else{
								msj(response.result, response.msj);
								console.log(response);
								$.each(response.campos, function(index, val) {
									mostrarError(formLogin, val);
								});
								button(dialogRef, btnClick, true);
							}
						})
						.fail(function() {
							console.log('fail');
						})
						.always(function() {
							console.log("complete");
						});
						
						
						return false;
					}
					
				});
				
				$("#formLogin").submit();
			}
		}]
	})
})
