<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pedia_entry_historyversion".
 *
 * @property int $vid 版本id
 * @property string $edit_time 修改时间
 * @property string $edit_cont 修改内容
 * @property int $eid 词条id
 * @property int $uid 用户id
 *
 * @property PediaEntryBasicinfo $e
 * @property PediaUserMember $u
 * @property PediaEntryReport[] $pediaEntryReports
 */
class PediaEntryHistoryversion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedia_entry_historyversion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['edit_time', 'edit_cont', 'eid', 'uid'], 'required'],
            [['edit_time'], 'safe'],
            [['edit_cont'], 'string'],
            [['eid', 'uid'], 'integer'],
            [['eid'], 'exist', 'skipOnError' => true, 'targetClass' => PediaEntryBasicinfo::className(), 'targetAttribute' => ['eid' => 'eid']],
            [['uid'], 'exist', 'skipOnError' => true, 'targetClass' => PediaUserMember::className(), 'targetAttribute' => ['uid' => 'uid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'vid' => 'Vid',
            'edit_time' => 'Edit Time',
            'edit_cont' => 'Edit Cont',
            'eid' => 'Eid',
            'uid' => 'Uid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getE()
    {
        return $this->hasOne(PediaEntryBasicinfo::className(), ['eid' => 'eid']);
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
    public function getPediaEntryReports()
    {
        return $this->hasMany(PediaEntryReport::className(), ['vid' => 'vid']);
    }

    /**
     * {@inheritdoc}
     * @return PediaEntryHistoryversionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PediaEntryHistoryversionQuery(get_called_class());
    }
}
