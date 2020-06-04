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

function registrarSubNivel(){ 
	var data = $("#frmRegsubnivel").serialize(); 
	ajax_datos('regSubNivel.php', data, '#RespBusquedaSubNivel'); 
	limpiar(); 
}

function buscarSubNivel(){ 
	var valor = $("#txtBuscar").val(); 
	ajax_datos('busquedaSubNivel.php', 'subnivel='+ valor, '#RespBusquedaSubNivel'); 
}

function modSubNivel(idSubNivel){  
	$("#txtIdSubNivel").val( idSubNivel ); 
	$("#frmRegsubnivel select[id='cbonivel']").val($( "#subnivel_"+idSubNivel ).find("td:eq(0)").text() ); 
	$("#txtnomSubNivel").val( $( "#subnivel_"+idSubNivel ).find("td:eq(2)").text() ); 
}

function limpiar(){ 
	$("#frmRegsubnivel input[type='text']").val( '' ); 
	$("#txtIdSubNivel").val( '' ); 
	$("#frmRegsubnivel select[id='cbonivel']").val( '1' ); 
	$("#txtBuscar").val('');
}

function eliminarSubNivel(idSubNivel){ 
	$('#myModal').modal('show'); 
	$("#btnSiEliminarProd").off('click').click(function(e) { 
		var data = $("#frmRegsubnivel").serialize(); 
		ajax_datos('eliminarSubNivel.php', data, '#RespBusquedaSubNivel'); 
		limpiar(); 
		$('#myModal').modal('hide'); 
	});	 
}