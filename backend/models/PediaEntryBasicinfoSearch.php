<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PediaEntryBasicinfo;

/**
 * PediaEntryBasicinfoSearch represents the model behind the search form of `common\models\PediaEntryBasicinfo`.
 */
class PediaEntryBasicinfoSearch extends PediaEntryBasicinfo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['eid', 'isshow', 'clicktimes', 'needperm', 'lastediter'], 'integer'],
            [['title', 'brief_info', 'content', 'edittime'], 'safe'],
            [['grade'], 'number'],
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
        $query = PediaEntryBasicinfo::find();

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
            'grade' => $this->grade,
            'isshow' => $this->isshow,
            'clicktimes' => $this->clicktimes,
            'needperm' => $this->needperm,
            'edittime' => $this->edittime,
            'lastediter' => $this->lastediter,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'brief_info', $this->brief_info])
            ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
