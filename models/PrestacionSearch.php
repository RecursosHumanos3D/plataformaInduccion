<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Prestacion;

/**
 * PrestacionSearch represents the model behind the search form about `app\models\Prestacion`.
 */
class PrestacionSearch extends Prestacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPrestacion'], 'integer'],
            [['nombrePrestacion', 'descripcionPrestacion'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Prestacion::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idPrestacion' => $this->idPrestacion,
        ]);

        $query->andFilterWhere(['like', 'nombrePrestacion', $this->nombrePrestacion])
            ->andFilterWhere(['like', 'descripcionPrestacion', $this->descripcionPrestacion]);

        return $dataProvider;
    }
}
