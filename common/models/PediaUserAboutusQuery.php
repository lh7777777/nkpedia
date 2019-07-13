<?php

namespace common\models;

/**
 * Team:没有蛀牙,NKU
 * Coding by 王心荻 1711298,20190712
 * This is the ActiveQuery class for [[PediaUserAboutus]].
 */

/**
 * This is the ActiveQuery class for [[PediaUserAboutus]].
 *
 * @see PediaUserAboutus
 */
class PediaUserAboutusQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PediaUserAboutus[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PediaUserAboutus|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
