<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "terapia_paciente".
 *
 * @property integer $idterapia_paciente
 * @property integer $rutPaciente
 * @property integer $idTerapia
 * @property string $fecha
 * @property integer $estado
 */
class TerapiaPaciente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'terapia_paciente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rutPaciente', 'idTerapia', 'estado'], 'integer'],
            [['fecha'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idterapia_paciente' => 'Idterapia Paciente',
            'rutPaciente' => 'Rut Paciente',
            'idTerapia' => 'Seleccione la terapia',
            'fecha' => 'Fecha',
            'estado' => 'Estado',
        ];
    }
}
