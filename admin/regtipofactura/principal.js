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

function registrarTipoFactura(){ 
	var data = $("#frmRegTipoFactura").serialize(); 
	ajax_datos('regTfactura.php', data, '#RespBusquedaTfactura'); 
	limpiar(); 
}

function buscarTfactura(){ 
	var valor = $("#txtBuscar").val(); 
	ajax_datos('busquedaTfactura.php', 'tfac='+ valor, '#RespBusquedaTfactura'); 
}

function modTfactura(idTfac){ 
	$("#txtIdTipoFactura").val( idTfac ); 
	$("#txtnomTipoFactura").val( $( "#tfac_"+idTfac ).find("td:eq(0)").text() ); 
	$("#txtabreTipoFactura").val( $( "#tfac_"+idTfac ).find("td:eq(1)").text() ); 
}

function limpiar(){ 
	$("#txtIdTipoFactura").val( '' ); 
	$("#frmRegTipoFactura input[type='text']").val( '' ); 
	$("#txtBuscar").val('');
}

function eliminarTfactura(idTfac){ 
	$('#myModal').modal('show'); 
	$("#btnSiEliminarProd").off('click').click(function(e) { 
		var data = $("#frmRegTipoFactura").serialize(); 
		ajax_datos('eliminarTfactura.php', data, '#RespBusquedaTfactura'); 
		limpiar(); 
		$('#myModal').modal('hide'); 
	});	 
}