<?php

/**
 * Team:没有蛀牙,NKU
 * Coding by 杨越 1711300,20190712
 * This is the model class for table "pedia_entry_classification".
 */
namespace common\models;

/**
 * This is the ActiveQuery class for [[PediaEntryClassification]].
 *
 * @see PediaEntryClassification
 */
class PediaEntryClassificationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PediaEntryClassification[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PediaEntryClassification|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
