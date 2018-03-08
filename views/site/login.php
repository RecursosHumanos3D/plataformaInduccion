<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>



<style>
    .btn-primary{
        background-color:#231f20;
        color:#ffffff;
        border-color:#ffffff;
    }

    .btn-primary:hover,
    .btn-default:hover{
        background-color:#98cb00;
        color:#ffffff;
        border-color:#ffffff;
    }
    form#login-form {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }
    button.btn.btn-lg.btn-primary.btn-block {
        height: 40px;
    }
    img.jp {
        width: 35%;
    }
    hr {
        margin-top: 20px;
        margin-bottom: 20px;
        border: 0;
        border-top: 1px solid;
        border-top-color: #020202;
        width: 320px;
    }

    img.jp {
        margin-bottom: 7px;
    }
    html {
        background: url(img/login.jpg) 0 0 repeat-x;
        background-size: cover;
    }
    .col-sm-4.col-md-4 {
        height: 100vh;
        background-color: rgba(255, 255, 255, 0.83);
        display: flex;
        justify-content: center;

    }
    .center{
        margin-top: 30%;
    }
    h4 {
        line-height: 0.35em;
    }
    button.btn.btn-lg.btn-primary.btn-block:visited {
        background-color: #50881b;
    }

</style>



<div  class="col-sm-4 col-md-4">
    <div class="center">
        <!-- <h1 class="text-center login-title">Sign in to continue to Bootsnipp</h1>-->       


        <br>     
        <div class="account-wall">


            <?=
            Html::img('@web/img/logo.png', $options = [
                'class' => 'jp',
            ]);
            ?>
            <hr>
        </div>
        <h3 style="    text-align: center;
            text-transform: uppercase;
            color: #231f20;
            font-size: 42px;
            font-family: roboto;
            font-weight: 300;    margin-bottom: 6px;">Plataforma de Contenidos</h3>

        <!--                <form action="http://www.rh3d.cl/siga/front/?sw=entrada" method="POST" class="form-signin" name="formlozgin">-->
        <?php $form = ActiveForm::begin(['id' => 'login-form', 'class' => 'form-signin']); ?>

        <div class="col-xs-12"> <input onkeypress="return justNumbers(event);" type="text" class="form-control" placeholder="Ingrese RUT" name="user" id="user" required="" autofocus=""></div>    
        <br>
        <br>
        <br>
        <div class="col-xs-12">
            <button class="btn btn-lg btn-primary btn-block" type="submit">INGRESAR</button>
        </div>  

        </b><?php ActiveForm::end(); ?>
    </div>
</div>