<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pedia_user_aboutus".
 *
 * @property int $uid 关联用户id
 * @property string $sid 学号
 * @property string $sname 姓名
 * @property string $ssex 性别
 * @property string $smajor 专业
 * @property string $semail 邮箱
 *
 * @property PediaUserMember $u
 */
class PediaUserAboutus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedia_user_aboutus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uid', 'sid', 'sname', 'ssex', 'smajor', 'semail'], 'required'],
            [['uid'], 'integer'],
            [['sid'], 'string', 'max' => 7],
            [['sname', 'smajor', 'semail'], 'string', 'max' => 20],
            [['ssex'], 'string', 'max' => 2],
            [['uid'], 'unique'],
            [['uid'], 'exist', 'skipOnError' => true, 'targetClass' => PediaUserMember::className(), 'targetAttribute' => ['uid' => 'uid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'sid' => 'Sid',
            'sname' => 'Sname',
            'ssex' => 'Ssex',
            'smajor' => 'Smajor',
            'semail' => 'Semail',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getU()
    {
        return $this->hasOne(PediaUserMember::className(), ['uid' => 'uid']);
    }

    /**
     * {@inheritdoc}
     * @return PediaUserAboutusQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PediaUserAboutusQuery(get_called_class());
    }
}
