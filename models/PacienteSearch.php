<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Paciente;

/**
 * PacienteSearch represents the model behind the search form about `app\models\Paciente`.
 */
class PacienteSearch extends Paciente
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rutPaciente', 'edad'], 'integer'],
            [['nombrePaciente', 'apellidoPaciente', 'diagnosticoPaciente', 'fechaIngreso', 'fechaEgreso'], 'safe'],
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
        $query = Paciente::find();

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
            'rutPaciente' => $this->rutPaciente,
            'edad' => $this->edad,
            'fechaIngreso' => $this->fechaIngreso,
            'fechaEgreso' => $this->fechaEgreso,
        ]);

        $query->andFilterWhere(['like', 'nombrePaciente', $this->nombrePaciente])
            ->andFilterWhere(['like', 'apellidoPaciente', $this->apellidoPaciente])
            ->andFilterWhere(['like', 'diagnosticoPaciente', $this->diagnosticoPaciente]);

        return $dataProvider;
    }
}