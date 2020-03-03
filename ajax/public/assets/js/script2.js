 /* global $ */
$(document).ready(function(){

	Carga();

});

function Carga(){

	var tablaDatos = $("#datos");

	var route = "http://informatica.ieszaidinvergeles.org:9036/ajax/public/personaje";



	$("#datos").empty();

	$.get(route, function(res){

		$(res).each(function(key,value){

			tablaDatos.append("<tr><td>"+value.nombre+"</td><td>"+value.raza+"</td><td><button type='button' value='"+value.id+"' onclick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");

		});

	});

}

function Mostrar(btn){
document.getElementById("myModal").style.display = "flex";
var route = "http://informatica.ieszaidinvergeles.org:9036/ajax/public/personaje/"+btn.value+"/edit";



	$.get(route, function(res){

		$("#nombre").val(res.nombre);
		$("#raza").val(res.raza);


		$("#id").val(res.id);

	});

}



$("#actualizar").click(function(){
document.getElementById("myModal").style.display = "none";

	var value = $("#id").val();

	var nombredato = $("#nombre").val();
	
		var razadato = $("#raza").val();


	var route = "http://informatica.ieszaidinvergeles.org:9036/ajax/public/personaje/"+value+"";

	var token = $("#token").val();



	$.ajax({

		url: route,

		headers: {'X-CSRF-TOKEN': token},

		type: 'PUT',

		dataType: 'json',

		data: {nombre: nombredato,raza:razadato},

		success: function(){

			Carga();

			$("#myModal").modal('toggle');

			$("#msj-success").fadeIn();

		}

	});

});

function Eliminar(btn){

	var route = "http://informatica.ieszaidinvergeles.org:9036/ajax/public/personaje/"+btn.value+"";

	var token = $("#token").val();



	$.ajax({

		url: route,

		headers: {'X-CSRF-TOKEN': token},

		type: 'DELETE',

		dataType: 'json',

		success: function(){

			Carga();

			$("#msj-success").fadeIn();

		}

	});

}