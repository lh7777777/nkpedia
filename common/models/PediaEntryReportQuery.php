<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[PediaEntryReport]].
 *
 * @see PediaEntryReport
 */
class PediaEntryReportQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PediaEntryReport[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PediaEntryReport|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
