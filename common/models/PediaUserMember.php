<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pedia_user_member".
 *
 * @property int $uid 用户id
 * @property int $gid 所属组id
 * @property string $loginname 用户名
 *
 * @property PediaEntryBasicinfo[] $pediaEntryBasicinfos
 * @property PediaEntryHistoryversion[] $pediaEntryHistoryversions
 * @property PediaUserAboutus $pediaUserAboutus
 * @property PediaUserAdorn[] $pediaUserAdorns
 * @property PediaUserMedal[] $ms
 * @property PediaUserGroup $g
 */
/**
 * Team:没有蛀牙
 * Coding by:孙一冉 1711297，20190712
 */
class PediaUserMember extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedia_user_member';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gid', 'loginname'], 'required'],
            [['gid'], 'integer'],
            [['loginname'], 'string', 'max' => 255],
            [['gid'], 'exist', 'skipOnError' => true, 'targetClass' => PediaUserGroup::className(), 'targetAttribute' => ['gid' => 'gid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'gid' => 'Gid',
            'loginname' => 'Loginname',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPediaEntryBasicinfos()
    {
        return $this->hasMany(PediaEntryBasicinfo::className(), ['lastediter' => 'uid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPediaEntryHistoryversions()
    {
        return $this->hasMany(PediaEntryHistoryversion::className(), ['uid' => 'uid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPediaUserAboutus()
    {
        return $this->hasOne(PediaUserAboutus::className(), ['uid' => 'uid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPediaUserAdorns()
    {
        return $this->hasMany(PediaUserAdorn::className(), ['uid' => 'uid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMs()
    {
        return $this->hasMany(PediaUserMedal::className(), ['mid' => 'mid'])->viaTable('pedia_user_adorn', ['uid' => 'uid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getG()
    {
        return $this->hasOne(PediaUserGroup::className(), ['gid' => 'gid']);
    }

    /**
     * {@inheritdoc}
     * @return PediaUserMemberQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PediaUserMemberQuery(get_called_class());
    }
}
