<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "insumos".
 *
 * @property integer $idInsumo
 * @property string $nombreInsumo
 */
class Insumos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'insumos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombreInsumo'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idInsumo' => 'Id Insumo',
            'nombreInsumo' => 'Nombre Insumo',
        ];
    }
}
