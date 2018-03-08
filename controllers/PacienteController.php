<?php

namespace app\controllers;

use Yii;
use app\models\Paciente;
use app\models\Prestacion;
use app\models\Insumos;
use app\models\PacienteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHttpException;

/**
 * PacienteController implements the CRUD actions for Paciente model.
 */
class PacienteController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Paciente models.
     * @return mixed
     */
    public function actionIndex() {

        if (Yii::$app->user->can('Listar pacientes')) {
            $searchModel = new PacienteSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->render('index', [
                        'searchModel' => $searchModel,
                        'dataProvider' => $dataProvider,
            ]);
        } else {
            throw new NotFoundHttpException('No tiene permisos para acceder');
        }
    }

    /**
     * Displays a single Paciente model.
     * @param integer $id
     * @return mixed
     */
    public function actionActualizac() {
        $id = Yii::$app->request->post()["CategorizacionPaciente"]["id"];
        $categorizacion = $this->findCategorizacionc($id);
        $categorizacion->estado = 2;
        $categorizacion->save();

        $model = new \app\models\CategorizacionPaciente();
        $model->categorizacion = Yii::$app->request->post()["CategorizacionPaciente"]["categorizacion"];
        $model->estado = 1;
        $model->kine = Yii::$app->user->identity->id;
        $date = date('Y/m/d H:i:s');
        $model->fecha = $date;
        $model->rutPaciente = $categorizacion->rutPaciente;
        $model->save(false);
        return $this->redirect(['view', 'id' => $model->rutPaciente]);
    }

    public function actionView($id) {
        $model1 = new \app\models\PrestacionPaciente();
        $model2 = new \app\models\InsumoPaciente();
        $terapia = new \app\models\TerapiaPaciente();

        $modelPrestacion = $this->findPrestacion($id);
        $modelTerapias = $this->findTerapia($id);
        $modelInsumos = $this->findInsumos($id);
        $categorizacion = $this->findCategorizacion($id);
        //var_dump($categorizacion);die();

        return $this->render('view', [
                    'model' => $this->findModel($id),
                    'prestacion' => $this->findPrestacion($id),
                    'insumos' => $this->findInsumos($id),
                    'terapias' => $this->findTerapia($id),
                    'model1' => $model1,
                    'model2' => $model2,
                    'modelPrestacion' => $modelPrestacion,
                    'modelTerapias' => $modelTerapias,
                    'modelInsumos' => $modelInsumos,
                    'terapia' => $terapia,
                    'categorizacion' => $categorizacion,
        ]);
    }

    public function actionInsumos() {

        $model = new \app\models\InsumoPaciente();


        if ($model->load(Yii::$app->request->post())) {

            $date = date('Y/m/d H:i:s');
            $model->fecha = $date;
            $model->save();


            return $this->redirect(['view', 'id' => $model->rutPaciente]);
        }
    }

    public function actionPrestacion() {

        $model = new \app\models\PrestacionPaciente();


        if ($model->load(Yii::$app->request->post())) {

            $date = date('Y/m/d H:i:s');
            $model->fecha = $date;
            $model->save();


            return $this->redirect(['view', 'id' => $model->rutPaciente]);
        }
    }

    public function actionTerapia($idTerapia, $rut, $unidad) {
        $model = new \app\models\TerapiaPaciente();

        $date = date('Y/m/d H:i:s');
        $model->idTerapia = $idTerapia;
        $model->fechaInicio = $date;
        $model->rutPaciente = $rut;
        $model->kineInicio = Yii::$app->user->identity->id;
        $model->estado = 1;
        $model->save();


        return $this->redirect(['dashboard/camas', 'id' => $unidad]);
    }

    public function actionTermina($id) {


        $model = $this->findTerapiaa($id);


        $date = date('Y/m/d H:i:s');
        $model->fechaTermino = $date;
        $model->kineTermino = Yii::$app->user->identity->id;
        $model->estado = 2;
        $model->save();


        return $this->redirect(['paciente/view', 'id' => $model->rutPaciente]);
    }

    /**
     * Creates a new Paciente model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {



        $model = new Paciente();
        $model->rutPaciente = Yii::$app->request->post()["Paciente"]["rutPaciente"];
        $model->nombrePaciente = Yii::$app->request->post()["Paciente"]["nombrePaciente"];
        $model->apellidoPaciente = Yii::$app->request->post()["Paciente"]["apellidoPaciente"];
        $model->edad = Yii::$app->request->post()["Paciente"]["edad"];
        $model->diagnosticoPaciente = Yii::$app->request->post()["Paciente"]["diagnosticoPaciente"];
        $model->antecedentes = Yii::$app->request->post()["Paciente"]["antecedentes"];
        $model->idCama = Yii::$app->request->post()["cama"];
        $date = date('Y/m/d H:i:s');
        $model->fechaIngreso = $date;
        $model->save();

        $categorizacion = new \app\models\CategorizacionPaciente();
        $categorizacion->categorizacion = Yii::$app->request->post()["categorizacion"];
        $categorizacion->fecha = date('Y/m/d H:i:s');
        $categorizacion->estado = 1;
        $categorizacion->kine = Yii::$app->user->identity->id;
        $categorizacion->rutPaciente = $model->rutPaciente;
        $categorizacion->save(false);



        return $this->redirect(['dashboard/camas', 'id' => Yii::$app->request->post()["unidad"]]);
    }

    public function actionAdd($idCama, $idUnidad) {
        $model = new Paciente();
        return $this->render('create', [
                    'model' => $model,
                    'idCama' => $idCama,
                    'idUnidad' => $idUnidad,
        ]);
    }

    /**
     * Updates an existing Paciente model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->rutPaciente]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Paciente model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Paciente model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Paciente the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Paciente::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function findPrestacion($id) {
        if (($model = \app\models\PrestacionPaciente::find()
                        ->with('prestacion')
                        ->where(['rutPaciente' => $id])->all()) !== null) {
            return $model;
        } else {
            return 0;
        }
    }

    protected function findInsumos($id) {
        if (($model = \app\models\InsumoPaciente::find()
                        ->with('insumos')
                        ->where(['rutPaciente' => $id])->all()) !== null) {
            return $model;
        } else {
            return 0;
        }
    }

    protected function findTerapia($id) {
        if (($model = \app\models\TerapiaPaciente::find()->where(['rutPaciente' => $id])->all()) !== null) {
            return $model;
        } else {
            return 0;
        }
    }

    protected function findTerapiaa($id) {
        if (($model = \app\models\TerapiaPaciente::find()->where(['idterapia_paciente' => $id])->one()) !== null) {
            return $model;
        } else {
            return 0;
        }
    }

    protected function findCategorizacion($id) {
        if (($model = \app\models\CategorizacionPaciente::find()->where(['rutPaciente' => $id, 'estado' => 1])->one()) !== null) {
            return $model;
        } else {
            return 0;
        }
    }

    protected function findCategorizacionc($id) {
        if (($model = \app\models\CategorizacionPaciente::find()->where(['id' => $id, 'estado' => 1])->one()) !== null) {
            return $model;
        } else {
            return 0;
        }
    }

}
