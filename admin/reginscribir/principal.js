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

function registrarInscribir(){ 
	var data = $("#frmReginscribir").serialize(); 
	ajax_datos('regInscrito.php', data, '#RespBusquedaInscrito'); 
	limpiar(); 
}

function buscarInscrito(){ 
	var valor = $("#txtBuscar").val(); 
	ajax_datos('busquedaInscrito.php', 'inscrito='+ valor, '#RespBusquedaInscrito'); 
}

function modInscrito(idInscrito){  
	$("#txtIdInscribir").val( idInscrito ); 
	$("#frmReginscribir select[id='cboHorario']").val($( "#inscrito_"+idInscrito ).find("td:eq(0)").text() ); 
	$("#txtCodigo").val( $( "#inscrito_"+idInscrito ).find("td:eq(1)").text() ); 
}

function limpiar(){ 
	$("#txtIdInscribir").val( '' ); 
	$("#frmReginscribir input[type='text']").val( '' ); 
	$("#frmReginscribir select[id='cboHorario']").val( '1' ); 
	$("#txtBuscar").val('');
}

function eliminarInscrito(idInscrito){ 
	$('#myModal').modal('show'); 
	$("#btnSiEliminarProd").off('click').click(function(e) { 
		var data = $("#frmReginscribir").serialize(); 
		ajax_datos('eliminarInscrito.php', data, '#RespBusquedaInscrito'); 
		limpiar(); 
		$('#myModal').modal('hide'); 
	});	 
}