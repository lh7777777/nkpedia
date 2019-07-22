<?php

/**
 * Team:没有蛀牙
 * Coding by:杨越 1711300，20190712
 */
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PediaEntryHistoryversion;

/**
 * PediaEntryHistoryversionSearch represents the model behind the search form of `common\models\PediaEntryHistoryversion`.
 */
class PediaEntryHistoryversionSearch extends PediaEntryHistoryversion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vid', 'eid', 'uid'], 'integer'],
            [['edit_time', 'edit_cont'], 'safe'],
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
        $query = PediaEntryHistoryversion::find();

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
            'vid' => $this->vid,
            'edit_time' => $this->edit_time,
            'eid' => $this->eid,
            'uid' => $this->uid,
        ]);

        $query->andFilterWhere(['like', 'edit_cont', $this->edit_cont]);

        return $dataProvider;
    }
}
