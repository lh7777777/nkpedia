<?php

namespace app\models;

/**
 * Team:没有蛀牙
 * Coding by:孙一冉 1711297，20190712
 */
/**
 * This is the ActiveQuery class for [[PediaEntryBasicinfo]].
 *
 * @see PediaEntryBasicinfo
 */
class PediaEntryBasicinfoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PediaEntryBasicinfo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PediaEntryBasicinfo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
