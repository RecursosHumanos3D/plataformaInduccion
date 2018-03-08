function nueva_carpeta(){
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
							"tipo" : "nueva_carpeta",
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
									alert("Error: La carpeta ya existe");
									$("#categoria").focus();
									}else{
									$('#categoria').val("");
									$('#descripcion').val("");
									$("#categoria").focus();
									alert("EXITO: Carpeta creada correctamente")	
									}
						  }
				   });
	}else{
	alert("ERROR: "+error);
	}
}



function edita_carpeta(){
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
							"tipo" : "edita_carpeta",
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
									alert("Error: La carpeta ya existe");
									$("#categoria").focus();
									}else{
									alert("EXITO: Carpeta Editada correctamente")	
									}
						  }
				   });
	}else{
	alert("ERROR: "+error);
	}
}





function nuevo_album(){
	
document.getElementById("Form_Subcategoria1").submit();
}

function edita_album(){

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


function Guardar_galeria() {

$('#guarda').val("1");	
document.getElementById("imageform").submit();


}



function borrar_imagen(id){
var item=document.getElementById("li_"+id);
var r = confirm("Esta seguro de eliminar la imagen");
if (r == true) {
   var campos = {
							"tipo" : "borra_imagen",
							"id" : id
						};
						
				
					$.ajax({
							data:  campos,
							url:   'funciones/ajax.php',
							type:  'post',
							beforeSend: function () {
									
							},
							success:  function (response) {
						
							item.parentNode.removeChild(item);
				
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
		
		$("#divimagen").html('<img src="img/galeria/imagenes_default/categorias/'+imagen.value+'" class="img-responsive" />');
	}

}

function cambia_imagen2(imagen){
	if (imagen.value=="0"){

		  $("#divimagen").html('(El tamaño de la imagen es de 100x100 px)<br><input type="file" name="imagen" id="imagen" />');

	}else{
		
		$("#divimagen").html('<img src="img/galeria/imagenes_default/archivos/'+imagen.value+'" class="img-responsive" />');
	}

}

function megusta(id,id_usuario){
	

   var campos = {
							"tipo" : "megusta",
							"id" : id,
							"id_usuario" : id_usuario
						};
						
				
					$.ajax({
							data:  campos,
							url:   'funciones/ajax.php',
							type:  'post',
							beforeSend: function () {
								
							},
							success:  function (response) {
								
							
								$("#spanmegusta_"+id).html('<img src="img/galeria/megusta2.png" onclick="yanomegusta(\''+id+'\',\''+id_usuario+'\')" style="width:24px;height:24px;cursor:pointer;" /> '+response+' Me gusta ');
					
								
						   }
				   });
	


}


function yanomegusta(id,id_usuario){


   var campos = {
							"tipo" : "nomegusta",
							"id" : id,
							"id_usuario" : id_usuario
						};
						
				
					$.ajax({
							data:  campos,
							url:   'funciones/ajax.php',
							type:  'post',
							beforeSend: function () {
									
							},
							success:  function (response) {
							
								$("#spanmegusta_"+id).html('<img src="img/galeria/megusta1.png" onclick="megusta(\''+id+'\',\''+id_usuario+'\')" style="width:24px;height:24px;cursor:pointer;" /> '+response+' Me gusta ');
					
								
						   }
				   });
	


}


function vista_galeria(id){

   var campos = {
							"tipo" : "vista_galeria",
							"id" : id
						};
						
				
					$.ajax({
							data:  campos,
							url:   'funciones/ajax.php',
							type:  'post',
							beforeSend: function () {
									
							},
							success:  function (response) {
							
								$("#spanvisto_"+id).html('Visto '+response+' veces');
					
								
						   }
				   });
}




