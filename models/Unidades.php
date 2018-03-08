<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unidades".
 *
 * @property integer $idunidades
 * @property string $nombreUnidad
 * @property integer $camas
 */
class Unidades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'unidades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['camas'], 'integer'],
            [['nombreUnidad'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idunidades' => 'Idunidades',
            'nombreUnidad' => 'Nombre Unidad',
            'camas' => 'Camas',
        ];
    }
}
