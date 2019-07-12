<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PediaUserPerm;

/**
 * Team:没有蛀牙
 * Coding by:孙一冉 1711297，20190712
 */
/**
 * PediaUserPermSearch represents the model behind the search form of `common\models\PediaUserPerm`.
 */
class PediaUserPermSearch extends PediaUserPerm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pid', 'alloweditword', 'allowbanuser', 'allowedcreword', 'alloweddistri', 'allowedchangeperm'], 'integer'],
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
        $query = PediaUserPerm::find();

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
            'pid' => $this->pid,
            'alloweditword' => $this->alloweditword,
            'allowbanuser' => $this->allowbanuser,
            'allowedcreword' => $this->allowedcreword,
            'alloweddistri' => $this->alloweddistri,
            'allowedchangeperm' => $this->allowedchangeperm,
        ]);

        return $dataProvider;
    }
}
