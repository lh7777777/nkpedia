<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pedia_user_perm".
 *
 * @property int $pid 权限组id
 * @property int $alloweditword 是否允许编辑词条
 * @property int $allowbanuser 是否允许禁止用户
 * @property int $allowedcreword 是否允许新建词条
 * @property int $alloweddistri 是否允许增加勋章
 * @property int $allowedchangeperm 是否允许更改他人权限
 *
 * @property PediaUserGroup[] $pediaUserGroups
 */
class PediaUserPerm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedia_user_perm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alloweditword', 'allowbanuser', 'allowedcreword', 'alloweddistri', 'allowedchangeperm'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pid' => 'Pid',
            'alloweditword' => 'Alloweditword',
            'allowbanuser' => 'Allowbanuser',
            'allowedcreword' => 'Allowedcreword',
            'alloweddistri' => 'Alloweddistri',
            'allowedchangeperm' => 'Allowedchangeperm',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPediaUserGroups()
    {
        return $this->hasMany(PediaUserGroup::className(), ['pid' => 'pid']);
    }

    /**
     * {@inheritdoc}
     * @return PediaUserPermQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PediaUserPermQuery(get_called_class());
    }
}
