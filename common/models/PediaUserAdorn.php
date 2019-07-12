<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pedia_user_adorn".
 *
 * @property int $uid 用户id
 * @property int $mid 勋章id
 *
 * @property PediaUserMember $u
 * @property PediaUserMedal $m
 */
class PediaUserAdorn extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedia_user_adorn';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uid', 'mid'], 'required'],
            [['uid', 'mid'], 'integer'],
            [['uid', 'mid'], 'unique', 'targetAttribute' => ['uid', 'mid']],
            [['uid'], 'exist', 'skipOnError' => true, 'targetClass' => PediaUserMember::className(), 'targetAttribute' => ['uid' => 'uid']],
            [['mid'], 'exist', 'skipOnError' => true, 'targetClass' => PediaUserMedal::className(), 'targetAttribute' => ['mid' => 'mid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'mid' => 'Mid',
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
     * @return \yii\db\ActiveQuery
     */
    public function getM()
    {
        return $this->hasOne(PediaUserMedal::className(), ['mid' => 'mid']);
    }

    /**
     * {@inheritdoc}
     * @return PediaUserAdornQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PediaUserAdornQuery(get_called_class());
    }
}
