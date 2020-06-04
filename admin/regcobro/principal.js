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

function registrarCobro(){ 
	var data = $("#frmRegcobro").serialize(); 
	ajax_datos('regCobro.php', data, '#RespBusquedaCobro'); 
	limpiar(); 
}

function buscarCobro(){ 
	var valor = $("#txtBuscar").val(); 
	ajax_datos('busquedaCobro.php', 'cobro='+ valor, '#RespBusquedaCobro'); 
}

function modCobro(idCobro){ 
	$("#txtIdCobro").val( idCobro ); 
	$("#txtfecha").val( $( "#cobro_"+idCobro ).find("td:eq(0)").text() ); 
	$("#cbofac").val( $( "#cobro_"+idCobro ).find("td:eq(1)").text() ); 
	$("#txtnombre").val( $( "#cobro_"+idCobro ).find("td:eq(2)").text() ); 
	$("#txtsuma").val( $( "#cobro_"+idCobro ).find("td:eq(3)").text() ); 
	$("#txtconcepto").val( $( "#cobro_"+idCobro ).find("td:eq(4)").text() ); 
	$("#txtCod").val( $( "#cobro_"+idCobro ).find("td:eq(5)").text() ); 
	$("#txtcod_fatu").val( $( "#cobro_"+idCobro ).find("td:eq(6)").text() ); 
}

function limpiar(){ 
	$("#frmRegcobro input[type='text']").val( '' ); 
	$("#txtIdCobro").val( '' ); 
	$("#txtfecha").val( '' );
	$("#cbofac").val( '1' );
	$("#txtnombre").val( '' );
	$("#txtsuma").val( '' );
	$("#txtconcepto").val( '' );
	$("#txtCod").val( '' );
	$("#txtcod_fatu").val( '' );

}

function eliminarCobro(idCobro){ 
	$('#myModal').modal('show'); 
	$("#btnSiEliminarProd").off('click').click(function(e) { 
		var data = $("#frmRegcobro").serialize(); 
		ajax_datos('eliminarCobro.php', data, '#RespBusquedaCobro'); 
		limpiar(); 
		$('#myModal').modal('hide'); 
	}); 
}

function imprimirCobro(idCobro){
	var data = $("#frmRegcobro").serialize();
	ajax_datos('imprimir.php', data, '#RespBusquedaCobro');
	window.print();
}