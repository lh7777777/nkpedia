<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pedia_user_group".
 *
 * @property int $gid 用户组id
 * @property string $gname 用户组名称
 * @property int $pid 权限组id
 *
 * @property PediaUserPerm $p
 * @property PediaUserMember[] $pediaUserMembers
 */
class PediaUserGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedia_user_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gname', 'pid'], 'required'],
            [['pid'], 'integer'],
            [['gname'], 'string', 'max' => 255],
            [['pid'], 'exist', 'skipOnError' => true, 'targetClass' => PediaUserPerm::className(), 'targetAttribute' => ['pid' => 'pid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'gid' => 'Gid',
            'gname' => 'Gname',
            'pid' => 'Pid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getP()
    {
        return $this->hasOne(PediaUserPerm::className(), ['pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPediaUserMembers()
    {
        return $this->hasMany(PediaUserMember::className(), ['gid' => 'gid']);
    }

    /**
     * {@inheritdoc}
     * @return PediaUserGroupQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PediaUserGroupQuery(get_called_class());
    }
}
