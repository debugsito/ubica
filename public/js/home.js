// async function getBeneficios(){
// 	var requestOptions = {
// 		method: 'GET',
// 		redirect: 'follow',
// 		header:{
// 			'Content-Type': 'application/json'
// 		}
// 	};

// 	let demo = await fetch("http://ubica.pe/wp/wp-json/wp/v2/beneficios?filter[orderby]=posicion&order=asc", requestOptions)
// 	.then(response => response.json())
// 	.then(data =>{
// 		rellenarSlider(data);
// 	})
// 	.catch(error => {
// 		console.log('error', error)
// 	});
// }

// function rellenarSlider(data){
// 	let template = $("#tmpSlider").html()
// 	let render = Mustache.render(template,{
// 		slider: data
// 	});
// 	$("#beneficios").html(render)
	
// }
// let beneficios = getBeneficios();

jQuery(document).ready(function($) {
	$(".owl-carousel").owlCarousel({
		loop:true,
		margin:25,
		nav:true,
		navText: ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		autoplay:true,
		autoplayHoverPause:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:3
			}
		}
	});
});



$("#formRegistro").validate({
	submitHandler: function (form) {
		var formData = new FormData(form);
		$.ajax({
			cache: false,
			contentType: false,
			processData: false,
			url: base_url+'home/registro',
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



