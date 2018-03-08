<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipoprestacion".
 *
 * @property integer $idtipoPrestacion
 * @property string $nombre
 */
class Tipoprestacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipoprestacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtipoPrestacion' => 'Idtipo Prestacion',
            'nombre' => 'Nombre',
        ];
    }
}
