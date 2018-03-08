<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prestacion_paciente".
 *
 * @property integer $id
 * @property integer $rutPaciente
 * @property integer $idPrestacion
 * @property integer $cantidadPrestacion
 * @property string $fecha
 */
class PrestacionPaciente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prestacion_paciente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rutPaciente', 'idPrestacion', 'cantidadPrestacion'], 'integer'],
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
            'rutPaciente' => 'Rut Paciente',
            'idPrestacion' => 'Seleccione:',
            'cantidadPrestacion' => 'Cantidad Prestacion',
            'fecha' => 'Fecha',
        ];
    }
    
    public function getPrestacion() {
                return $this->hasOne(Prestacion::className(), ['idPrestacion' => 'idPrestacion']);
        }
    
}
