<?php

/**
 * Team:没有蛀牙
 * Coding by:解亚兰 1711431，20190712
 */
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PediaEntryRelatedlinks;

/**
 * PediaEntryRelatedlinksSearch represents the model behind the search form of `common\models\PediaEntryRelatedlinks`.
 */
class PediaEntryRelatedlinksSearch extends PediaEntryRelatedlinks
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['eid', 'lid'], 'integer'],
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
        $query = PediaEntryRelatedlinks::find();

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
            'eid' => $this->eid,
            'lid' => $this->lid,
        ]);

        return $dataProvider;
    }
}
