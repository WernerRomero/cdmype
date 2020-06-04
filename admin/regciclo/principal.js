//AJAX
function ajax_datos(url2, datos, elementoHTML){
	$.ajax({
		url     : url2,
		data    : datos,
		type    : "post",
		success : function(respuesta){
			$(elementoHTML).html( respuesta );
		}, 
		error   : function(e){
			alert("Error: "+ e.getMessage);
		}
	});
}

function registrarCiclo(){ 
	var data = $("#frmRegciclo").serialize(); 
	ajax_datos('regCiclo.php', data, '#RespBusquedaCiclo'); 
	limpiar(); 
}

function buscarCiclo(){ 
	var valor = $("#txtBuscar").val(); 
	ajax_datos('busquedaCiclo.php', 'ciclo='+ valor, '#RespBusquedaCiclo'); 
}

function modCiclo(idCiclo){ 
	$("#txtIdCiclo").val( idCiclo ); 
	$("#txtnomCiclo").val( $( "#ciclo_"+idCiclo ).find("td:eq(0)").text() ); 
}

function limpiar(){ 
	$("#frmRegciclo input[type='text']").val( '' ); 
	$("#txtIdCiclo").val( '' ); 
	$("#txtBuscar").val('');
}

function eliminarCiclo(idCiclo){ 
	$('#myModal').modal('show'); 
	$("#btnSiEliminarProd").off('click').click(function(e) { 
		var data = $("#frmRegciclo").serialize(); 
		ajax_datos('eliminarCiclo.php', data, '#RespBusquedaCiclo'); 
		limpiar(); 
		$('#myModal').modal('hide'); 
	}); 
}