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

function registrarNivel(){ 
	var data = $("#frmRegnivel").serialize(); 
	ajax_datos('regNivel.php', data, '#RespBusquedaNivel'); 
	limpiar(); 
}

function buscarNivel(){ 
	var valor = $("#txtBuscar").val(); 
	ajax_datos('busquedaNivel.php', 'nivel='+ valor, '#RespBusquedaNivel'); 
}

function modNivel(idNivel){  
	$("#txtIdNivel").val( idNivel ); 
	$("#txtnomNivel").val( $( "#nivel_"+idNivel ).find("td:eq(0)").text() ); 
}

function limpiar(){ 
	$("#frmRegnivel input[type='text']").val( '' ); 
	$("#txtIdNivel").val( '' ); 
	$("#txtBuscar").val('');
}

function eliminarNivel(idNivel){ 
	$('#myModal').modal('show'); 
	$("#btnSiEliminarProd").off('click').click(function(e) { 
		var data = $("#frmRegnivel").serialize(); 
		ajax_datos('eliminarNivel.php', data, '#RespBusquedaNivel'); 
		limpiar(); 
		$('#myModal').modal('hide'); 
	}); 
}