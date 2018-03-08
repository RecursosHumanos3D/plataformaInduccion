<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prestacion".
 *
 * @property integer $idPrestacion
 * @property string $nombrePrestacion
 * @property string $descripcionPrestacion
 */
class Prestacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prestacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombrePrestacion'], 'string', 'max' => 300],
            [['descripcionPrestacion'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPrestacion' => 'Seleccione:',
            'nombrePrestacion' => 'Nombre Prestacion',
            'descripcionPrestacion' => 'Descripcion Prestacion',
        ];
    }
}
