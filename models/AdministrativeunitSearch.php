<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Administrativeunit;

/**
 * AdministrativeunitSearch represents the model behind the search form of `app\models\Administrativeunit`.
 */
class AdministrativeunitSearch extends Administrativeunit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idadministrativeunit', 'fkheadline'], 'integer'],
            [['image', 'name', 'description', 'note'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Administrativeunit::find();

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
            'idadministrativeunit' => $this->idadministrativeunit,
            'fkheadline' => $this->fkheadline,
        ]);

        $query->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'note', $this->note]);

        return $dataProvider;
    }
}
