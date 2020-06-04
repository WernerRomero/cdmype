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

function registrarCuota(){ 
	var data = $("#frmRegcuota").serialize(); 
	ajax_datos('regCuota.php', data, '#RespBusquedaCuota'); 
	limpiar(); 
}

function buscarCuota(){ 
	var valor = $("#txtBuscar").val(); 
	ajax_datos('busquedaCuota.php', 'cuota='+ valor, '#RespBusquedaCuota'); 
}

function modCuota(idCuota){ 
	$("#txtIdCuota").val( idCuota ); 
	$("#txtnumCuota").val( $( "#cuota_"+idCuota ).find("td:eq(0)").text() ); 
	$("#cbociclo").val( $( "#cuota_"+idCuota ).find("td:eq(1)").text() ); 
	$("#txtFecha").val( $( "#cuota_"+idCuota ).find("td:eq(3)").text() ); 
}

function limpiar(){ 
	$("#txtIdCuota").val( '' ); 
	$("#frmRegcuota input[type='text']").val( '' ); 
	$("#frmRegcuota input[type='date']").val( '' ); 
	$("#cbociclo").val( '1' ); 
	$("#txtBuscar").val('');
}

function eliminarCuota(idCuota){ 
	$('#myModal').modal('show'); 
	$("#btnSiEliminarProd").off('click').click(function(e) { 
		var data = $("#frmRegcuota").serialize(); 
		ajax_datos('eliminarCuota.php', data, '#RespBusquedaCuota'); 
		limpiar(); 
		$('#myModal').modal('hide'); 
	}); 
}