function nuevoAjax(){
	var xmlhttp=false;
	try{
		xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
	}catch(e){
		try{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}catch(E){
			xmlhttp=false;
		}
	}
	
	if(!xmlhttp && typeof XMLHttpRequest!='undefined'){
		xmlhttp = new XMLHttpRequest();
	}
	
	return xmlhttp;
}


function checkbox_test() {
    var counter = 0, // counter for checked checkboxes
        i = 0,       // loop variable
        url = '',    // final url string
        // get a collection of objects with the specified 'input' TAGNAME
        input_obj = document.getElementsByTagName('input');
    // loop through all collected objects
    for (i = 0; i < input_obj.length; i++) {
        // if input object is checkbox and checkbox is checked then ...
        if (input_obj[i].type === 'checkbox' && input_obj[i].checked === true) {
            // ... increase counter and concatenate checkbox value to the url string
            counter++;
            url = url + ',' + input_obj[i].value;
        }
    }
    // display url string or message if there is no checked checkboxes
    if (counter > 0) {
        // remove first "&" from the generated url string
        url = url.substr(1);
        // display final url string
        return(url);
        // or you can send checkbox values
        // window.location.href = 'my_page.php?' + url; 
    }
    else {
        alert('There is no checked checkbox');
    }
}



function cargarResultados(){
	divResultado = document.getElementById('resultados');
	//obtengo el codigo de la encuesta
	codenc=document.frmencuesta.cod.value;
	idobj=document.frmencuesta.iob.value;
	
	//obtengo el numero de opciones
	//nroopc=document.frmencuesta.nroopciones.value;
	//creo un bucle para ver si alguna opcion esta checked
	//si esta checked ese valor lo envio por post
	i=1;
	while(i<=3){
		opcion=document.getElementById('opcion'+i).checked;
		if (opcion==true){
			alt=i;
		}
		i++;
	}
	ajax=nuevoAjax();
	ajax.open("POST", "?sw=guardaPreg",true);
	ajax.onreadystatechange=ProcesaVoto;
	function ProcesaVoto() {
		if (ajax.readyState==4) {
			divResultado.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//envio dos valores el id de la encuesta y la opcion elegida de la encuesta
	ajax.send("idenc="+codenc+"&alternativa="+alt+"&iob="+idobj)
	//ajax.send("idenc="+codenc)
}



function cargarComentariosJS(){

	divComentario= document.getElementById('comentariosPost');
	comentario=document.frmcomentarios.comentario_t.value;
	idobj=document.frmcomentarios.iob.value;
	ajax=nuevoAjax();
	ajax.open("POST", "?sw=guardaComenJs",true);
	ajax.onreadystatechange= function() {
		if (ajax.readyState==4) {
			divComentario.innerHTML = ajax.responseText;
		}else{
		}
	}
	document.frmcomentarios.comentario_t.focus();
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("iob="+idobj+"&comentario="+comentario);
	



}


function cargarResultados2(){
	divResultado = document.getElementById('resultados2');
	alternativas_seleccionadas=checkbox_test();
	//obtengo el codigo de la encuesta
	codenc=document.frmencuesta2.cod.value;
	idobj=document.frmencuesta2.iob.value;
	ajax=nuevoAjax();
	ajax.open("POST", "?sw=guardaPreg2",true);
	ajax.onreadystatechange=ProcesaVoto;
	function ProcesaVoto() {
		if (ajax.readyState==4) {
			divResultado.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//envio dos valores el id de la encuesta y la opcion elegida de la encuesta
	ajax.send("idenc="+codenc+"&iob="+idobj+"&alternativas="+alternativas_seleccionadas);
	//ajax.send("idenc="+codenc)
}


