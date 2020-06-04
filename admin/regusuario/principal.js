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

function registroUsuario(){ 
	var data = $("#frmRegUsuario").serialize(); 
	ajax_datos('regUsuario.php', data, '#RespBusquedaUsuario'); 
	limpiar(); 
}

function buscarUsuario(){ 
	var valor = $("#txtBuscar").val(); 
	ajax_datos('busquedaUsuario.php', 'usuario='+ valor, '#RespBusquedaUsuario'); 
}

function modUsuario(idUsuario){ 
	$("#txtIdUsuario").val( idUsuario ); 
	$("#txtnombre").val( $( "#usuario_"+idUsuario ).find("td:eq(1)").text() ); 
	$("#txtapellido").val( $( "#usuario_"+idUsuario ).find("td:eq(2)").text() ); 
	$("#txtuser").val( $( "#usuario_"+idUsuario ).find("td:eq(3)").text() ); 
	$("#txtpassword").val( $( "#usuario_"+idUsuario ).find("td:eq(4)").text() ); 
	$("#cbotipo").val( $( "#usuario_"+idUsuario ).find("td:eq(5)").text() ); 
}

function limpiar(){ 
	$("#txtIdUsuario").val( '' ); 
	$("#input[type='text']").val( '' ); 
	$("#frmRegUsuario select[id='cbotipo'] ").val( 'admin' ); 
}

function eliminarUsuario(idUsuario){
	$('#myModal').modal('show'); 
	$("#btnSiEliminarProd").off('click').click(function(e) { 
		var data = $("#frmRegUsuario").serialize(); 
		ajax_datos('eliminarUsuario.php', data, '#RespBusquedaUsuario'); 
		limpiar(); 
		$('#myModal').modal('hide'); 
	}); 
}