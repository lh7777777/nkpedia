<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PediaUserMedal;

/**
 * Team:没有蛀牙,NKU
 * Coding by 王心荻 1711298,20190712
 */

/**
 * PediaUserMedalSearch represents the model behind the search form of `common\models\PediaUserMedal`.
 */
class PediaUserMedalSearch extends PediaUserMedal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mid'], 'integer'],
            [['mname', 'mdes'], 'safe'],
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
        $query = PediaUserMedal::find();

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
            'mid' => $this->mid,
        ]);

        $query->andFilterWhere(['like', 'mname', $this->mname])
            ->andFilterWhere(['like', 'mdes', $this->mdes]);

        return $dataProvider;
    }
}
