<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paciente".
 *
 * @property integer $rutPaciente
 * @property string $nombrePaciente
 * @property string $apellidoPaciente
 * @property integer $edad
 * @property string $diagnosticoPaciente
 * @property string $fechaIngreso
 * @property string $fechaEgreso
 */
class Paciente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'paciente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rutPaciente'], 'required'],
            [['rutPaciente', 'edad'], 'integer'],
            [['fechaIngreso', 'fechaEgreso', 'idCama', 'antecedentes'], 'safe'],
            [['nombrePaciente', 'apellidoPaciente'], 'string', 'max' => 100],
            [['diagnosticoPaciente'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rutPaciente' => 'Rut Paciente',
            'nombrePaciente' => 'Nombre Paciente',
            'apellidoPaciente' => 'Apellido Paciente',
            'edad' => 'Edad',
            'diagnosticoPaciente' => 'Diagnostico Paciente',
            'fechaIngreso' => 'Fecha Ingreso',
            'fechaEgreso' => 'Fecha Egreso',
        ];
    }
}
