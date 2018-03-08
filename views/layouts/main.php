<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

$session = Yii::$app->session;

AppAsset::register($this);
?>
<?php header('Access-Control-Allow-Origin: *'); ?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">


        <?php
        header("Access-Control-Allow-Origin: *");
        $this->head()
        ?>


    </head>
    <body>
        <?php $this->beginBody() ?>



        <style>
            .card-image {
                border-bottom: 8px;
                border-bottom-style: solid;
                border-bottom-color: #79b00a;
            }
            .jota {
                background-color: #ff5200;
            }

            .tituloA {
                color: white !important;
                background-color: rgba(99, 155, 20, 0.66) !important;
                padding-left: 20px !important;
                padding-right: 20px !important;
                text-transform: uppercase !important;
            }

            .subtituloA{

                color: white !important;
                background-color: rgba(0, 0, 0, 0.6) !important;
                padding-left: 20px !important;
                padding-right: 20px !important;
                text-transform: uppercase !important;
            }

        </style>



        <div class="navbar-fixed">
            <nav  role="navigation">
                <div id="nav" class="nav-wrapper">
                    <div class="container">
                        <a href="#" class="brand-logo"><img style=" height: 50px;margin-top: 8px;"  src="img/logon.png"></a>
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

                        <ul class="right hide-on-med-and-down">

                            <li><a  href="/web/index.php?r=site/salir"><i class="material-icons">input</i></a></li>
                        </ul>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a  class="truncate" href="http://plataforma.induccion.org/web/index.php?r=site/index"><i class="material-icons">home</i></a></li>
                            <li><a  class="truncate" href="http://plataforma.induccion.org/web/index.php?r=site/index"><?php echo $session->get('nombre'); ?></a></li>
                        </ul>

                        <ul class="side-nav" id="mobile-demo">
                            <li><a style="    color: aliceblue!important;" class="truncate" href="http://plataforma.induccion.org/web/index.php?r=site/index"><?php echo $session->get('nombre'); ?></a></li>
                            <li><a style="    color: aliceblue!important;" href="http://plataforma.induccion.org/web/index.php?r=site/salir"></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br>
                <br>
                <br>
                <br>
                <h1 class="header hide-on-small-only center black-text " style="    text-transform: uppercase;text-shadow: -1px -1px 9px rgba(115, 84, 90, 1);     font-weight: 900;    font-size: 95px; 
                    "><strong class="tituloA">¡BIENVENIDO!</strong></h1>
                <div class="row center">
                    <h4 class="header hide-on-large-only col s12 black-text " style="    text-transform: uppercase;text-shadow: -2px -2px 23px rgba(78, 5, 0, 1);     font-weight: 900;
                        "><strong class="subtituloA">Bienvenido</strong></h4>
                    <h5 class="header col s12 black-text " style="    text-transform: uppercase;text-shadow: -2px -2px 23px rgba(78, 5, 0, 1);     font-weight: 900;
                        "><strong class="subtituloA">Plataforma de Contenidos</strong></h5>
                </div>

                <br><br>

            </div>
        </div>


        <div class="container">


            <?= $content ?>

        </div>


        <!--  Scripts-->
        <script>

        </script>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <script src="js/main.js"></script>





        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
