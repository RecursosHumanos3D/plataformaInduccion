<?php

namespace app\controllers;

use Yii;
use \app\models\Unidades;
use \app\models\Camas;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class DashboardController extends \yii\web\Controller {

    public function actionIndex() {

        $unidades = Unidades::find()->all();
        

        return $this->render('index', [
                    'unidades' => $unidades,
                  
        ]);
    }
    
    public function actionCamas($id){
        
        
        
        
        $camas = $this->findCamas($id);
        
         return $this->render('camas', [
                    'camas' => $camas,
                  
        ]);
        
    }

    protected function findModel($id) {
        if (($model = Unidades::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    protected function findCamas($id) {
       $model = Camas::find()->where(['idUnidad' => $id])->all();
      // var_dump($model);die();
       return $model;
    }

}
