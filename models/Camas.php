<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "camas".
 *
 * @property integer $idcamas
 * @property integer $idUnidad
 * @property integer $rutPaciente
 * @property integer $estado
 * @property integer $numeroCama
 */
class Camas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'camas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcamas'], 'required'],
            [['idcamas', 'idUnidad', 'rutPaciente', 'estado', 'numeroCama'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcamas' => 'Idcamas',
            'idUnidad' => 'Id Unidad',
            'rutPaciente' => 'Rut Paciente',
            'estado' => 'Estado',
            'numeroCama' => 'Numero Cama',
        ];
    }
}
