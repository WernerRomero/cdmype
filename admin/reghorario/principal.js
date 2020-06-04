//AJAX
function ajax_datos(url2, datos, elementoHTML){
	$.ajax({
		url      : url2,
		data     : datos,
		type     : "post",
		success  : function(respuesta){
			$(elementoHTML).html( respuesta );
		}, 
		error   : function(e){
			alert("Error: "+ e.getMessage);
		}
	});
}

function registrarHorario(){ 
	var data = $("#frmReghorario").serialize(); 
	ajax_datos('regHorario.php', data, '#RespBusquedaHorario'); 
	limpiar(); 
}

function buscarHorario(){ 
	var valor = $("#txtBuscar").val(); 
	ajax_datos('busquedaHorario.php', 'horario='+ valor, '#RespBusquedaHorario'); 
}

function modHorario(idHorario){ 
	$("#txtIdHorario").val( idHorario ); 
	$("#cbociclo").val($( "#horario_"+idHorario ).find("td:eq(0)").text() ); 
	$("#cbonivel").val($( "#horario_"+idHorario ).find("td:eq(1)").text() ); 
	$("#cbodia").val($( "#horario_"+idHorario ).find("td:eq(2)").text() ); 
	$("#cbodiados").val($( "#horario_"+idHorario ).find("td:eq(3)").text() ); 
	$("#txtnomInicio").val( $( "#horario_"+idHorario ).find("td:eq(9)").text() ); 
	$("#txtnomFin").val( $( "#horario_"+idHorario ).find("td:eq(10)").text() ); 
}

function limpiar(){ 
	$("#txtIdHorario").val( '' ); 
	$("#frmReghorario input[type='time']").val( '' ); 
	$("#cbociclo").val( '1' ); 
	$("#cbonivel").val( '1' ); 
	$("#cbodia").val( '1' ); 
	$("#cbodiados").val( '1' ); 
	$("#txtBuscar").val('');
}

function eliminarHorario(idHorario){ 
	$('#myModal').modal('show'); 
	$("#btnSiEliminarProd").off('click').click(function(e) { 
		var data = $("#frmReghorario").serialize(); 
		ajax_datos('eliminarHorario.php', data, '#RespBusquedaHorario'); 
		limpiar(); 
		$('#myModal').modal('hide'); 
	}); 
}