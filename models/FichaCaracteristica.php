<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ficha_caracteristica".
 *
 * @property integer $id
 * @property integer $idFicha
 * @property integer $idCaracteristica
 * @property integer $estado
 */
class FichaCaracteristica extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ficha_caracteristica';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idFicha', 'idCaracteristica', 'estado'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idFicha' => 'Id Ficha',
            'idCaracteristica' => 'Id Caracteristica',
            'estado' => 'Estado',
        ];
    }
}
