<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "insumo_paciente".
 *
 * @property integer $id
 * @property integer $rutPaciente
 * @property integer $idInsumo
 * @property integer $cantidad
 * @property string $fecha
 */
class InsumoPaciente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'insumo_paciente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rutPaciente', 'idInsumo', 'cantidad'], 'integer'],
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
            'idInsumo' => 'Seleccione:',
            'cantidad' => 'Cantidad',
            'fecha' => 'Fecha',
        ];
    }
    
     public function getInsumos() {
                return $this->hasMany(Insumos::className(), ['idInsumo' => 'idInsumo']);
        }
}
