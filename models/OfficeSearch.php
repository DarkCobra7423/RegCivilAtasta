<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Office;

/**
 * OfficeSearch represents the model behind the search form of `app\models\Office`.
 */
class OfficeSearch extends Office {

    public $stateoffice;
    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
                [['idoffice', 'nooffice', 'fkstateoffice', 'fkadministrativeunit', 'fkto'], 'integer'],
                [['expedient', 'subject', 'creationdate', 'category', 'shifteddate', 'reviseddate', 'observations', 'stateoffice'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios() {
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
    public function search($params) {
        $query = Office::find();

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
            'idoffice' => $this->idoffice,
            'nooffice' => $this->nooffice,
            'creationdate' => $this->creationdate,
            'fkstateoffice' => $this->fkstateoffice,
            'fkadministrativeunit' => $this->fkadministrativeunit,
            'shifteddate' => $this->shifteddate,
            'fkto' => $this->fkto,
            'reviseddate' => $this->reviseddate,
        ]);

        $query->andFilterWhere(['like', 'expedient', $this->expedient])
                ->andFilterWhere(['like', 'subject', $this->subject])
                ->andFilterWhere(['like', 'category', $this->category])
                ->andFilterWhere(['like', 'observations', $this->observations]);

        return $dataProvider;
    }

    public function searchFilter($params) {
        //$query = Office::find();
        $query = Office::find()->where(['fkadministrativeunit' => Yii::$app->profile->fkworksin]);
        $query = $query->joinWith(['fkstateoffice0']);
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        //---------------------
        $dataProvider->setSort([
            'attributes' => [
                'idoffice',
                'expedient',
                'nooffice',
                'subject',
                'creationdate',
                'category',
                'fkstateoffice',
                'fkadministrativeunit',
                'shifteddate',
                'fkto',
                'reviseddate',
                'observations:ntext',
                'stateoffice' => [
                    'asc' => ['stateoffice' => SORT_ASC],
                    'desc' => ['stateoffice' => SORT_DESC],
                    'default' => SORT_ASC],
            ]
        ]);
        //---------------------

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idoffice' => $this->idoffice,
            'nooffice' => $this->nooffice,
            'creationdate' => $this->creationdate,
            'fkstateoffice' => $this->fkstateoffice,
            'fkadministrativeunit' => $this->fkadministrativeunit,
            'shifteddate' => $this->shifteddate,
            'fkto' => $this->fkto,
            'reviseddate' => $this->reviseddate,
            //------------------------------------
            //'stateoffice' => $this->fkstateoffice,
            //------------------------------------
        ]);

        $query->andFilterWhere(['like', 'expedient', $this->expedient])
                ->andFilterWhere(['like', 'subject', $this->subject])
                ->andFilterWhere(['like', 'category', $this->category])
                ->andFilterWhere(['like', 'observations', $this->observations])
                //-----------------------------
                ->andFilterWhere(['like', 'stateoffice', $this->stateoffice]);
                //-----------------------------

        return $dataProvider;
    }

}
