function mostrar( form ){ $( form ).show(500); }
function cerrar( form ){ $( form ).hide(500); }

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

function registroCliente(){ 
	var data = $("#frmRegCliente").serialize(); 
	ajax_datos('regCliente.php', data, '#RespBusquedaCliente'); 
	limpiar(); 
}

function buscarCliente(){ 
	var valor = $("#txtBuscar").val(); 
	ajax_datos('busquedaCliente.php', 'cliente='+ valor, '#RespBusquedaCliente'); 
}

function modCliente(idCliente){
	$("#txtIdCliente").val( idCliente ); 
	$("#txtfechanacimiento").val( $( "#cliente_"+idCliente ).find("td:eq(0)").text() );  
	$("#txtnomcliente").val( $( "#cliente_"+idCliente ).find("td:eq(1)").text() );
	$("#txtapecliente").val( $( "#cliente_"+idCliente ).find("td:eq(2)").text() );
	$("#txtdireccioncliente").val( $( "#cliente_"+idCliente ).find("td:eq(3)").text() );  
	$("#txtmunicipio").val( $( "#cliente_"+idCliente ).find("td:eq(4)").text() );  
	$("#txttelcliente").val( $( "#cliente_"+idCliente ).find("td:eq(5)").text() );  
	$("#txtcelcliente").val( $( "#cliente_"+idCliente ).find("td:eq(6)").text() );  
	$("#cbocompania").val( $( "#cliente_"+idCliente ).find("td:eq(7)").text() );  
	$("#txtemail").val( $( "#cliente_"+idCliente ).find("td:eq(8)").text() );  
	$("#txtinstituto").val( $( "#cliente_"+idCliente ).find("td:eq(9)").text() );

	/*$("#txtnombreRepre").val( $( "#cliente_"+idCliente ).find("td:eq(10)").text() );
	$("#txtparentesco").val( $( "#cliente_"+idCliente ).find("td:eq(11)").text() );
	$("#txtlugartrabajo").val( $( "#cliente_"+idCliente ).find("td:eq(12)").text() );
	$("#txttelcasa").val( $( "#cliente_"+idCliente ).find("td:eq(13)").text() );
	$("#txtteltrabajo").val( $( "#cliente_"+idCliente ).find("td:eq(14)").text() );
	$("#txtcelRepre").val( $( "#cliente_"+idCliente ).find("td:eq(15)").text() );  

	$("#txtlugardetrabajo").val( $( "#cliente_"+idCliente ).find("td:eq(16)").text() );  
	$("#txtdirecciondetrabajo").val( $( "#cliente_"+idCliente ).find("td:eq(17)").text() );  
	$("#txtcargo").val( $( "#cliente_"+idCliente ).find("td:eq(18)").text() );  
	$("#txtteldetrabajo").val( $( "#cliente_"+idCliente ).find("td:eq(19)").text() );  */

}

function limpiar(){ 
	$("#txtIdCliente").val( '' ); 
	$("#frmRegCliente input[type='text']").val( '' ); 
	$("#frmRegCliente input[type='email']").val( '' ); 
	$("#frmRegCliente input[type='date']").val( '' ); 
	$("#frmRegCliente textarea").val( '' ); 
	$("#frmRegCliente select[id='cbocompania'] ").val( '1' ); 
	$("#txtBuscar").val('');
}

function eliminarCliente(idCliente){
	$('#myModal').modal('show'); 
	$("#btnSiEliminarProd").off('click').click(function(e) { 
		var data = $("#frmRegCliente").serialize(); 
		ajax_datos('eliminarCliente.php', data, '#RespBusquedaCliente'); 
		limpiar(); 
		$('#myModal').modal('hide'); 
	}); 
}