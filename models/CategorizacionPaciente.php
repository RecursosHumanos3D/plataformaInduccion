<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categorizacion_paciente".
 *
 * @property integer $id
 * @property integer $categorizacion
 * @property string $fecha
 * @property integer $estado
 * @property integer $kine
 * @property integer $rutPaciente
 */
class CategorizacionPaciente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categorizacion_paciente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categorizacion', 'fecha', 'estado', 'kine', 'rutPaciente'], 'required'],
            [['categorizacion', 'estado', 'kine', 'rutPaciente'], 'integer'],
            [['fecha'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'categorizacion' => 'Categorizacion',
            'fecha' => 'Fecha',
            'estado' => 'Estado',
            'kine' => 'Kine',
            'rutPaciente' => 'Rut Paciente',
        ];
    }
}
