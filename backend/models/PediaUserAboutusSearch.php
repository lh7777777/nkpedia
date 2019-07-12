<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PediaUserAboutus;

/**
 * Team:没有蛀牙,NKU
 * Coding by 王心荻 1711298,20190712
 */

/**
 * PediaUserAboutusSearch represents the model behind the search form of `common\models\PediaUserAboutus`.
 */
class PediaUserAboutusSearch extends PediaUserAboutus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uid'], 'integer'],
            [['sid', 'sname', 'ssex', 'smajor', 'semail'], 'safe'],
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
        $query = PediaUserAboutus::find();

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
            'uid' => $this->uid,
        ]);

        $query->andFilterWhere(['like', 'sid', $this->sid])
            ->andFilterWhere(['like', 'sname', $this->sname])
            ->andFilterWhere(['like', 'ssex', $this->ssex])
            ->andFilterWhere(['like', 'smajor', $this->smajor])
            ->andFilterWhere(['like', 'semail', $this->semail]);

        return $dataProvider;
    }
}
