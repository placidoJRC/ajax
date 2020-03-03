 /* global $ */

$("#registro").click(function(){

	var nombreDato = $("#nombre").val();
	var razaDato = $("#raza").val();

	var route = "http://informatica.ieszaidinvergeles.org:9036/ajax/public/personaje";

	var token = $("#token").val();



	$.ajax({

		url: route,

		headers: {'X-CSRF-TOKEN': token},

		type: 'POST',

		dataType: 'json',

		data:{nombre: nombreDato,raza: razaDato},



		success:function(){

			$("#msj-success").fadeIn();

		},

	

	});

});