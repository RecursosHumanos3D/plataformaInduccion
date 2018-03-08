$(document).ready(function () {

    var id = '#dialog';

    //Get the screen height and width
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();

    //Set heigth and width to mask to fill up the whole screen
    $('#mask').css({'width': maskWidth, 'height': maskHeight});

    //transition effect		
    $('#mask').fadeIn(500);
    $('#mask').fadeTo("slow", 0.9);

    //Get the window height and width
    var winH = $(window).height();
    var winW = $(window).width();

    //Set the popup window to center
    $(id).css('top', winH / 2 - $(id).height() / 2);
    $(id).css('left', winW / 2 - $(id).width() / 2);

    //transition effect
    $(id).fadeIn(2000);

    //if close button is clicked
    $('.window .close').click(function (e) {
        //Cancel the link behavior
        e.preventDefault();

        $('#mask').hide();
        $('.window').hide();
    });

    //if mask is clicked
    $('#mask').click(function () {
        $(this).hide();
        $('.window').hide();
    });

});

function justNumbers(e)
{
    var keynum = window.event ? window.event.keyCode : e.which;
    if ((keynum == 8) || (keynum == "."))
        return true;

    return /\d/.test(String.fromCharCode(keynum));
}


function alerta()
{
    alert('Recuerde Imprimir, rellenar los datos del documento y firmarlos en el pie de pagina. Una vez hecho lo anterior  debe escanear o fotografiar este documento y subirlo a la plataforma ');
}


function carga(nombre)
{
    alert(nombre);
    window.location = 'uploads/' + nombre + '/index.html', 'curso';
}

function registra(id, rutPersona){


            $.get("index.php?r=site/progreso&rutPersona=" + rutPersona + "&id=" + id + "");












}

$(document).ready(function () {

    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
});

function termina(rutPersona, idCurso)
{
    Hola = $("#crono").text();
    var className = $('#finalizador').attr('class');
    if (className == "waves-effect waves-light btn-large btn-block disabled")
    {
        alert("TODAVIA NO TERMINA EL MODULO.");
    } else
    {
        $.get("index.php?r=curso/guarda&rutPersona=" + rutPersona + "&idCurso=" + idCurso + "&tiempo=" + Hola + "",
                function (data) {
                    alert("MODULO TERMINADO");

                    window.location = "http://rrhh3d.cl/RRHH3DSIGA/frontend/web/index.php?r=site/index2&rut="+rutPersona+"";
                });
    }
}
function finalizaItem(idEvaluacion, rutPersona)
{

    var all_answered = true;
    $("input:radio").each(function () {
        var name = $(this).attr("name");
        if ($("input:radio[name=" + name + "]:checked").length == 0)
        {
            all_answered = false;
        }
    });
   
    
   
   if(all_answered==true){
   $.get("index.php?r=evaluacion/finaliza&rutPersona=" + rutPersona + "&idEvaluacion=" + idEvaluacion + "",
                function (data) {
                    alert("MODULO TERMINADO");
                    window.location = "http://rrhh3d.cl/RRHH3DSIGA/frontend/web/index.php?r=site/index";
                });    
   
  
   }
   else{
       alert("FALTAN PREGUNTAS POR RESPONDER");
   }


}


function finalizaItem1(idEvaluacion, rutPersona)
{

    var all_answered = true;
    $("input:radio").each(function () {
        var name = $(this).attr("name");
        if ($("input:radio[name=" + name + "]:checked").length == 0)
        {
            all_answered = false;
        }
    });
   
    
   
   if(all_answered==true){
   $.get("index.php?r=evaluacion/finaliza&rutPersona=" + rutPersona + "&idEvaluacion=" + idEvaluacion + "",
                function (data) {
                    alert("EVALUACION TERMINADA");
                    window.location = "http://rrhh3d.cl/RRHH3DSIGA/frontend/web/index.php?r=site/index";
                });    
   
  
   }
   else{
       alert("FALTAN PREGUNTAS POR RESPONDER");
   }


}
