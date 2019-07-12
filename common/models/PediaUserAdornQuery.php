<?php

namespace common\models;

/**
 * Team:没有蛀牙,NKU
 * Coding by 王心荻 1711298,20190712
 * This is the ActiveQuery class for [[PediaUserAdorn]].
 */

/**
 * This is the ActiveQuery class for [[PediaUserAdorn]].
 *
 * @see PediaUserAdorn
 */
class PediaUserAdornQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PediaUserAdorn[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PediaUserAdorn|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
