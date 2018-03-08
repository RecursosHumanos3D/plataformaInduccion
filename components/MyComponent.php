<?php

namespace app\components;

use yii;
use yii\base\Component;
use app\models\Colaborador;

class MyComponent extends Component {

    public function hello($rutColaborador) {

        



        $connection = Yii::$app->db;
        $sql = "select * from subetapa se inner join etapas e on e.idEtapas=se.idEtapas inner join tipoitem tp on se.idtipoItem=tp.idtipoItem where e.idEtapas=1";
        $command = $connection->createCommand($sql);
        $dataReader = $command->query();
        $model = $dataReader->readAll();

        $variable1 = [];





        $i = 0;

        foreach ($model as $models) {



            if ($models['idtipoItem'] == 1) {

                $connection = Yii::$app->db;
                $sql = "select * from lch_usuario where idLch= " . $models['codigoItem'] . " and rutPersona='$rutColaborador' ";
                $command = $connection->createCommand($sql);
                $dataReader = $command->query();
                $modelo1 = $dataReader->readAll();




                if (empty($modelo1)) {

                    $estado = 0;
                } else {
                    $estado = 1;
                }
            }

            if ($models['idtipoItem'] == 2) {

                $connection = Yii::$app->db;
                $sql = "select * from curso_usuario where idCurso= " . $models['codigoItem'] . " and rutPersona='$rutColaborador' ";

                $command = $connection->createCommand($sql);
                $dataReader = $command->query();
                $modelo = $dataReader->readAll();

                if (empty($modelo)) {

                    $estado = 0;
                } else {
                    $estado = 1;
                }
            }

            if ($models['idtipoItem'] == 3) {

                $connection = Yii::$app->db;
                $sql = "select * from cuestionario_usuario where idCuestionario= " . $models['codigoItem'] . " and rutPersona='$rutColaborador' ";
                $command = $connection->createCommand($sql);
                $dataReader = $command->query();
                $modelo = $dataReader->readAll();


                // var_dump($modelo);die();    
                if (empty($modelo)) {

                    $estado = 0;
                } else {
                    if ($modelo[0]['estado'] == 0) {
                        $estado = 0;
                    } else {
                        $estado = 1;
                    }
                }
            }

            if ($models['idtipoItem'] == 4) {

                $connection = Yii::$app->db;
                $sql = "select * from evaluacion_usuario where idEvaluacion= " . $models['codigoItem'] . " and rutPersona='$rutColaborador' ";
                
                $command = $connection->createCommand($sql);
                $dataReader = $command->query();
                $modelo = $dataReader->readAll();
              
               
            }




                
                     

            $objeto = new \yii\helpers\ArrayHelper();
            $objeto->codigoItem = $models['codigoItem'];
            $objeto->idTipoItem = $models['idtipoItem'];
            $objeto->estado = $estado;
            $variable1[] = $objeto;
        }
       
        $variable1 = \yii\helpers\ArrayHelper::toArray($variable1);





        $modelo = $this->findModel($rutColaborador);

        $modulo = array(
            'rutColaborador' => $rutColaborador,
            'rutEmpresa' => '10.000.000',
            'secuencia'=> $modelo->secuencia,
            'idGrupo' => $modelo->idGrupo,
            'etapas' => array(
                'Bienvenida' => $variable1,
            ),
        );
        //var_dump($modulo);die();
        return $modulo;
    }

    protected function findModel($id) {
        if (($model = Colaborador::findOne($id)) !== null) {
            return $model;
        } else {
            //throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
