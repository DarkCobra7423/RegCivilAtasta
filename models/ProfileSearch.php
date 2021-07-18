<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Profile;

/**
 * ProfileSearch represents the model behind the search form of `app\models\Profile`.
 */
class ProfileSearch extends Profile {

    public $username;
    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
                [['idprofile', 'phone', 'fkjobtitle', 'fkworksin', 'fkuser'], 'integer'],
                [['name', 'lastname', 'gender', 'birthdate', 'address', 'photo', 'review', 'username'], 'safe'],
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
        $query = Profile::find();
        $query = $query->joinWith(['fkuser0']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        //---------------------
        $dataProvider->setSort([
            'attributes' => [
                'idprofile',
                'name',
                'lastname',
                'gender',
                'birthdate',
                'phone',
                'address',
                'photo',
                'review:ntext',
                'fkjobtitle',
                'fkworksin',
                'fkuser',
                'username' => [
                    'asc' => ['username' => SORT_ASC],
                    'desc' => ['username' => SORT_DESC],
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
        
        //---------------------
        /*
        $query->andFilterWhere([
            'idprofile' => $this->idprofile,
            'fkuser' => $this->fkuser,
        ]);
         */
        //---------------------

        // grid filtering conditions
        $query->andFilterWhere([
            'idprofile' => $this->idprofile,
            'birthdate' => $this->birthdate,
            'phone' => $this->phone,
            'fkjobtitle' => $this->fkjobtitle,
            'fkworksin' => $this->fkworksin,
            'fkuser' => $this->fkuser,
            //------------------------
            
            //------------------------
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
                ->andFilterWhere(['like', 'lastname', $this->lastname])
                ->andFilterWhere(['like', 'gender', $this->gender])
                ->andFilterWhere(['like', 'address', $this->address])
                ->andFilterWhere(['like', 'photo', $this->photo])
                ->andFilterWhere(['like', 'review', $this->review])
                //-----------------------------
                ->andFilterWhere(['like', 'username', $this->username]);
                //-----------------------------

        return $dataProvider;
    }

}
