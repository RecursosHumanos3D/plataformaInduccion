<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\Session;

$this->title = 'My Yii Application';

$session = Yii::$app->session;
$rut = $session->get('rut');
?>

<script type="text/javascript">
    $(document).ready(function(){
   $('#videoElementID').bind('contextmenu',function() { return false; });
});
</script>

<style>

video::-internal-media-controls-download-button {
    display:none;
}

video::-webkit-media-controls-enclosure {
    overflow:hidden;
}

video::-webkit-media-controls-panel {
    width: calc(100% + 30px); /* Adjust as needed */
}

    span.card-title.activator.text-darken-4 {
        color: #f1f1f1!important;
    }

    i.material-icons {
        color: #7bb20c!important;
    }

    i.material-icons:hover {
        color: aliceblue!important;
    }

    .item1{
        border-bottom: 8px;
        border-bottom-style: solid;
        border-bottom-color: #3500eb;
    }

    .item2{
        border-bottom: 8px;
        border-bottom-style: solid;
        border-bottom-color: #ae4f3b;
    }	
    .item3{
        border-bottom: 8px;
        border-bottom-style: solid;
        border-bottom-color: #90c503;
    }	

    .item4{
        border-bottom: 8px;
        border-bottom-style: solid;
        border-bottom-color: #61068c;
    }

    .item5{
        border-bottom: 8px;
        border-bottom-style: solid;
        border-bottom-color: #07f502;
    }

    strong.tituloA {
        font-family: 'Catamaran', sans-serif!important;
        font-weight: bolder!important;
    }

    strong.subtituloA {
        font-family: 'Catamaran', sans-serif!important;
        font-weight: bolder!important;
    }






    a.btn.modal-trigger.btn.btn-primary.btn-large.btn-block.btn-block {
        background-color: white;
        color: #192503;
        border-style: solid;
        border-width: 1px;
        border-color: #0b1708;
    }

    .btn-block{
        width: 100%;
    }
    .card {
        background-color: #0e0e0e;


    }
    body {
        background-color: rgba(16, 16, 16, 0.86);
    }
    a.white-text {
        font-size: 18px;
    }

    a.waves-effect.waves-light.btn.btn-primary.btn-large.btn-block {
        background-color: #fe8408;
    }
    a.btn.btn-primary.btn-large.btn-block.btn-large {
        background-color: #7bb20b;
    }
    .jota {
        background-color: #ff952a;
    }
    @media (min-width: 1200px) {
        .card {
            height: 342px;
        }
    }

    /* Landscape tablets and medium desktops */
    @media (min-width: 992px) and (max-width: 1199px) {
        .card {
            height: 342px;
        }
    }    

    video {
        width: 100%    !important;
        height: auto   !important;
    }

    #video2 {
        width: 67%    !important;
        height: auto   !important;
    }

    .card-content {
        background-color: #0e0e0e;
        color: white;
    }

    span.card-title.activator.text-darken-4.truncate {
        font-family: 'Catamaran', sans-serif;
    }

    a.btn.modal-trigger.btn.btn-primary.btn-large.btn-block.btn-block {
        font-weight: bold;
        font-size: 13px;
    }

    div#elemento1 {
        margin-top: 30px;
    }

    a.truncate.btn {
    }

    i.material-icons {
        font-size: 24px;
    }

    i.material-icons:hover {
        color: aqua;
    }


</style>





<div id="1" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video1" controls>

                <source src="videos/1.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video1').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="2" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video2" controls>

                <source src="videos/2.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video2').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="3" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video3" controls>

                <source src="videos/3.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video3').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="4" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video4" controls>

                <source src="videos/4.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video4').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="5" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video5" controls>

                <source src="videos/5.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video5').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="6" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video6" controls>

                <source src="videos/6.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video6').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="7" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video7" controls>

                <source src="videos/7.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video7').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="8" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video8" controls>

                <source src="videos/8.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video8').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="9" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video9" controls>

                <source src="videos/9.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video9').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="10" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video10" controls>

                <source src="videos/10.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video10').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="11" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video11" controls>

                <source src="videos/11.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video11').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="12" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video12" controls>

                <source src="videos/12.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video12').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="13" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video13" controls>

                <source src="videos/13.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video13').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="14" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video14" controls>

                <source src="videos/14.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video14').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="15" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video15" controls>

                <source src="videos/15.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video15').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="16" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video16" controls>

                <source src="videos/16.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video16').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="17" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video17" controls>

                <source src="videos/17.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video17').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="18" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video18" controls>

                <source src="videos/18.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video18').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="19" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video19" controls>

                <source src="videos/19.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video19').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="20" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video20" controls>

                <source src="videos/20.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video20').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="21" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video21" controls>

                <source src="videos/21.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video21').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="22" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video22" controls>

                <source src="videos/22.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video22').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="23" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video23" controls>

                <source src="videos/23.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video23').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="24" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video24" controls>

                <source src="videos/24.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video24').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>
<div id="25" class="modal">
    <div class="modal-content">
        <p style="text-align: center;">
            <video preload='none'  id="video25" controls>

                <source src="videos/25.mp4" type="video/mp4">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="document.getElementById('video25').pause();" class=" btn modal-action modal-close btn-primary  ">Cerrar</a>
    </div>
</div>




















































<div class="section">
    <div style="margin-top: 30px;" class="row">
        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#1">
            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item1">
                        <img class="activator" onmouseover="this.src = 'img/1.jpg';" ONMOUSEOUT="this.src = 'imgd/1.jpg';" src="imgd/1.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator  text-darken-4 "> Introducción a las Finanzas Personales</span>
                        <p>
                            <a class="modal-trigger"onclick="registra(1, <?php echo $rut; ?>);" href="#1">

                                <i class="material-icons">play_circle_filled
                                </i>
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </a>

        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#2">

            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item1">
                        <img class="activator" onmouseover="this.src = 'img/2.jpg';" ONMOUSEOUT="this.src = 'imgd/2.jpg';" src="imgd/2.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator  text-darken-4 ">Entendiendo la Liquidación de Sueldo</span>

                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#2">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>                </div>

                </div>
            </div>
        </a>


        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#3">
            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item1">
                        <img class="activator" onmouseover="this.src = 'img/3.jpg';" ONMOUSEOUT="this.src = 'imgd/3.jpg';" src="imgd/3.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator  text-darken-4 truncate">El Presupuesto Familiar</span>
                        <p>&nbsp;</p>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#3">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>                       
                    </div>

                </div>
            </div>
        </a>


        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#4">
            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item1">
                        <img class="activator" onmouseover="this.src = 'img/4.jpg';" ONMOUSEOUT="this.src = 'imgd/4.jpg';" src="imgd/4.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator  text-darken-4 truncate">Créditos</span>
                        <p>&nbsp;</p>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#4">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>                       
                    </div>

                </div>
            </div>
        </a>

        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#5">
            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item1">
                        <img class="activator" onmouseover="this.src = 'img/5.jpg';" ONMOUSEOUT="this.src = 'imgd/5.jpg';" src="imgd/5.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator  text-darken-4 truncate">El Ahorro</span>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#5">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>                       
                    </div>

                </div>
            </div>
        </a>

        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#6">
            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item1">
                        <img class="activator" onmouseover="this.src = 'img/6.jpg';" ONMOUSEOUT="this.src = 'imgd/6.jpg';" src="imgd/6.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator  text-darken-4 truncate">Sistema de Pensiones</span>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#6">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>                       
                    </div>

                </div>
            </div>
        </a>


        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#7">
            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item1">
                        <img class="activator" onmouseover="this.src = 'img/7.jpg';" ONMOUSEOUT="this.src = 'imgd/7.jpg';" src="imgd/7.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator  text-darken-4 truncate"> Sistema de Salud</span>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#7">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>                       
                    </div>

                </div>
            </div>
        </a>

        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#8">

            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item1">
                        <img class="activator" onmouseover="this.src = 'img/8.jpg';" ONMOUSEOUT="this.src = 'imgd/8.jpg';" src="imgd/8.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator text-darken-4 truncate">Ahorro Vivienda</span>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#8">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>                       
                    </div>

                </div>

            </div>
        </a>

        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#9">
            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item2">
                        <img class="activator" onmouseover="this.src = 'img/9.jpg';" ONMOUSEOUT="this.src = 'imgd/9.jpg';" src="imgd/9.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator text-darken-4">Introducción a las Cultura de Servicio</span>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#9">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>                       
                    </div>

                </div>
            </div>
        </a>

        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#10">
            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item2">
                        <img class="activator" onmouseover="this.src = 'img/10.jpg';" ONMOUSEOUT="this.src = 'imgd/10.jpg';" src="imgd/10.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator text-darken-4 truncate">Importancia del Servicio</span>
                        <p>&nbsp;</p>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#10">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>                       
                    </div>

                </div>
            </div>
        </a>


        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#11">
            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item2">
                        <img class="activator" onmouseover="this.src = 'img/11.jpg';" ONMOUSEOUT="this.src = 'imgd/11.jpg';" src="imgd/11.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator text-darken-4 truncate">La Cadena del Servicio</span>
                        <p>&nbsp;</p>

                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#11">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>                 
                    </div>

                </div>
            </div>
        </a>

        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#12">
            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item2">
                        <img class="activator" onmouseover="this.src = 'img/12.jpg';" ONMOUSEOUT="this.src = 'imgd/12.jpg';" src="imgd/12.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator text-darken-4 truncate">El Servicio Interno</span>
                        <p>&nbsp;</p>

                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#12">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>                       </div>

                </div>
            </div>
        </a>

        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#13">

            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item3">
                        <img class="activator" onmouseover="this.src = 'img/13.jpg';" ONMOUSEOUT="this.src = 'imgd/13.jpg';" src="imgd/13.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator text-darken-4">Liderazgo en Función de los Objetivos del Equipos</span>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#13">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>     
                    </div>

                </div>
            </div>
        </a>


        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#14">

            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item3">
                        <img class="activator" onmouseover="this.src = 'img/14.jpg';" ONMOUSEOUT="this.src = 'imgd/14.jpg';" src="imgd/14.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator text-darken-4">Competencias y Roles en un Equipo de Trabajo</span>

                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#14">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>     

                    </div>

                </div>
            </div>
        </a>

        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#15">

            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item3">
                        <img class="activator" onmouseover="this.src = 'img/15.jpg';" ONMOUSEOUT="this.src = 'imgd/15.jpg';" src="imgd/15.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator text-darken-4 ">Bases para el Trabajo en Equipo</span>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#15">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>     
                    </div>

                </div>
            </div>
        </a>

        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#16">

            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item3">
                        <img class="activator" onmouseover="this.src = 'img/16.jpg';" ONMOUSEOUT="this.src = 'imgd/16.jpg';" src="imgd/16.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator text-darken-4">Técnicas de Trabajo en Equipo y Comunicación</span>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#16">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>     
                    </div>

                </div>
            </div>
        </a>
        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#17">

            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item4">
                        <img class="activator" onmouseover="this.src = 'img/17.jpg';" ONMOUSEOUT="this.src = 'imgd/17.jpg';" src="imgd/17.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator text-darken-4 ">Introducción a la Seguridad de la Información</span>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#17">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>     
                    </div>

                </div>
            </div>
        </a>

        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#18">

            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item4">
                        <img class="activator" onmouseover="this.src = 'img/18.jpg';" ONMOUSEOUT="this.src = 'imgd/18.jpg';" src="imgd/18.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator text-darken-4">Importancia y objetivo de la Seguridad de la Información</span>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#18">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>     


                    </div>

                </div>
            </div>
        </a>

        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#19">

            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item4">
                        <img class="activator" onmouseover="this.src = 'img/19.jpg';" ONMOUSEOUT="this.src = 'imgd/19.jpg';" src="imgd/19.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator text-darken-4 ">Extracción de la Información, Principales Amenazas</span>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#19">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>     
                    </div>

                </div>
            </div>
        </a>

        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#20">

            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item4">
                        <img class="activator" onmouseover="this.src = 'img/20.jpg';" ONMOUSEOUT="this.src = 'imgd/20.jpg';" src="imgd/20.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator text-darken-4">Mejores Prácticas para la Seguridad de la Información</span>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#20">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>     
                    </div>

                </div>
            </div>
        </a>

        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#21">

            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item5">
                        <img class="activator" onmouseover="this.src = 'img/21.jpg';" ONMOUSEOUT="this.src = 'imgd/21.jpg';" src="imgd/21.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator text-darken-4">Importancia del Servicio al Cliente</span>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#21">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>     
                    </div>

                </div>
            </div>
        </a>

        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#22">

            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item5">
                        <img class="activator" onmouseover="this.src = 'img/22.jpg';" ONMOUSEOUT="this.src = 'imgd/22.jpg';" src="imgd/22.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator text-darken-4">El Servicio y su Impacto en el Cliente</span>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#22">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>                     </div>

                </div>
            </div>
        </a>

        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#23">

            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item5">
                        <img class="activator" onmouseover="this.src = 'img/23.jpg';" ONMOUSEOUT="this.src = 'imgd/23.jpg';" src="imgd/23.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator text-darken-4">Técnicas de Control Emocional</span>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#23">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>     
                    </div>

                </div>
            </div>
        </a>
        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#24">

            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item5">
                        <img class="activator" onmouseover="this.src = 'img/24.jpg';" ONMOUSEOUT="this.src = 'imgd/24.jpg';" src="imgd/24.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator text-darken-4 truncate">Tipos de Cliente</span>
                        <p>&nbsp;</p>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#24">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>     
                    </div>

                </div>
            </div>
        </a>

        <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#25">

            <div id="elemento1" class="col m12 l3 s12 animated">
                <div class="card ">
                    <div class="card-image item5">
                        <img class="activator" onmouseover="this.src = 'img/25.jpg';" ONMOUSEOUT="this.src = 'imgd/25.jpg';" src="imgd/25.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator text-darken-4 truncate">Técnicas de Negociación</span>
                        <p>&nbsp;</p>
                        <p>
                            <a class="modal-trigger" onclick="registra(1, <?php echo $rut; ?>);" href="#25">
                                <i class="material-icons">play_circle_filled
                                </i>

                            </a>
                        </p>     
                    </div>

                </div>
            </div>
        </a>












    </div>










