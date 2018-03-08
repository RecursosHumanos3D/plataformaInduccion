function nueva_categoria(){
error="";
//$('#pv').is(':checked');
	if ($('#categoria').val()==""){
	error="***Categoria";
	}
	if ($('#descripcion').val()==""){
	error=error+"***Descripcion";
	}
	if (error==""){
			 var campos = {
							"tipo" : "nueva_categoria",
							"categoria" : $('#categoria').val(),
							"descripcion" : $('#descripcion').val()
						};
					$.ajax({
							data:  campos,
							url:   'funciones/ajax.php',
							type:  'post',
							beforeSend: function () {
							$("#back").show();
							$("#loader").show();			
							},
							success:  function (response) {
							$("#back").hide();
							$("#loader").hide();
									if (response==1){
									alert("Error: La categoria ya existe");
									$("#categoria").focus();
									}else{
									$('#categoria').val("");
									$('#descripcion').val("");
									$("#categoria").focus();
									alert("EXITO: Categoria creada correctamente")	
									}
						  }
				   });
	}else{
	alert("ERROR: "+error);
	}
}



function edita_categoria(){
error="";
//$('#pv').is(':checked');
	if ($('#categoria').val()==""){
	error="***Categoria";
	}
	if ($('#descripcion').val()==""){
	error=error+"***Descripcion";
	}
	if (error==""){
			 var campos = {
							"tipo" : "edita_categoria",
							"id" : $('#id_categoria').val(),
							"categoria" : $('#categoria').val(),
							"descripcion" : $('#descripcion').val()
						};
					$.ajax({
							data:  campos,
							url:   'funciones/ajax.php',
							type:  'post',
							beforeSend: function () {
							$("#back").show();
							$("#loader").show();			
							},
							success:  function (response) {
							$("#back").hide();
							$("#loader").hide();
									if (response==1){
									alert("Error: La categoria ya existe");
									$("#categoria").focus();
									}else{
									alert("EXITO: Categoria Editada correctamente")	
									}
						  }
				   });
	}else{
	alert("ERROR: "+error);
	}
}





function nueva_sub_categoria(){
	
document.getElementById("Form_Subcategoria1").submit();
}

function edita_sub_categoria(){

error="";
//$('#pv').is(':checked');

	if ($('#subcategoria').val()==""){
	error="***SubCategoria";
	}
	if ($('#descripcion').val()==""){
	error=error+"***Descripcion";
	}

	if (error==""){
	
	document.getElementById("Form_Subcategoria1").submit();

	
	}else{
	alert("ERROR: "+error);
	}

}


    function subirArchivos() {
		$("#back").show();
		$("#loader").show();
		if ($('#nombre').val()==""){
			$("#back").hide();
			$("#loader").hide();
		alert("Ingrese nombre");
		$("#nombre").focus();
		return;
		}
		if ($('#descripcion').val()==""){
			$("#back").hide();
			$("#loader").hide();
		alert("Ingrese descripcion");
		$("#descripcion").focus();
		return;
		}
		if ($('#archivo').val()==""){
			if ($('#archivo').val()==""){
				$("#back").hide();
				$("#loader").hide();
			alert("Ingrese archivo");
			$("#archivo").focus();
			return;
			}
		}
		
document.getElementById("Form_Archivo").submit();


}

function elimina_archivo(id){


var r = confirm("Esta seguro de eliminar el archivo");
if (r == true) {
   var campos = {
							"tipo" : "elimina_archivo",
							"id" : id
						};
						
				
					$.ajax({
							data:  campos,
							url:   'funciones/ajax.php',
							type:  'post',
							beforeSend: function () {
							$("#back").show();
							$("#loader").show();			
							},
							success:  function (response) {
						
							$("#back").hide();
							$("#loader").hide();
							alert(response);
								alert("Archivo eliminado correctamente");
								location.reload(); 
						   }
				   });
	
	
	
} 


}



function elimina_categoria(id){


var r = confirm("Esta seguro de eliminar la categoria");
if (r == true) {
   var campos = {
							"tipo" : "elimina_categoria",
							"id" : id,
						};
						
				
					$.ajax({
							data:  campos,
							url:   'funciones/ajax.php',
							type:  'post',
							beforeSend: function () {
							$("#back").show();
							$("#loader").show();			
							},
							success:  function (response) {
							$("#back").hide();
							$("#loader").hide();
								if (response==1){
									alert("Error: No se puede elimnar categoria por que tiene subcategorias relacionadas");
									
									}else{
									alert("Categoria eliminada correctamente");
									location.reload(); 
									}
						
								
						   }
				   });
	
	
	
} 


}




function elimina_subcategoria(id){


var r = confirm("Esta seguro de eliminar la categoria");
if (r == true) {
   var campos = {
							"tipo" : "elimina_subcategoria",
							"id" : id,
						};
						
				
					$.ajax({
							data:  campos,
							url:   'funciones/ajax.php',
							type:  'post',
							beforeSend: function () {
							$("#back").show();
							$("#loader").show();			
							},
							success:  function (response) {
							$("#back").hide();
							$("#loader").hide();
								if (response==1){
									alert("Error: No se puede elimnar la Subcategoria por que tiene archivos relacionados");
									
									}else{
									alert("SubCategoria eliminada correctamente");
									location.reload(); 
									}
						
								
						   }
				   });
	
	
	
} 


}





    function buscar_archivos_front() {

window.location="?sw=biblioteca&p=buscar_archivos&id="+$('#busca_archivos').val();

}

function cambia_imagen(imagen){
	if (imagen.value=="0"){

		  $("#divimagen").html('(El tamaño de la imagen es de 315x130 px)<br><input type="file" name="imagen" id="imagen" />');

	}else{
		
		$("#divimagen").html('<img src="img/biblioteca/imagenes_default/categorias/'+imagen.value+'" class="img-responsive" />');
	}

}

function cambia_imagen2(imagen){
	if (imagen.value=="0"){

		  $("#divimagen").html('(El tamaño de la imagen es de 100x100 px)<br><input type="file" name="imagen" id="imagen" />');

	}else{
		
		$("#divimagen").html('<img src="img/biblioteca/imagenes_default/archivos/'+imagen.value+'" class="img-responsive" />');
	}

}