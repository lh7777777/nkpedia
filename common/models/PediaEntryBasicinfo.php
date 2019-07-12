<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pedia_entry_basicinfo".
 *
 * @property int $eid 词条id
 * @property string $title 词条标题
 * @property string $brief_info 词条简介
 * @property string $content 词条内容
 * @property double $grade 词条评分
 * @property int $isshow 是否显示
 * @property int $clicktimes 点击次数
 * @property int $needperm 编辑词条所需权限
 * @property string $edittime 最后修改时间
 * @property int $lastediter 最后修改用户
 *
 * @property PediaUserMember $lastediter0
 * @property PediaEntryClassification[] $pediaEntryClassifications
 * @property PediaEntryCategory[] $cs
 * @property PediaEntryHistoryversion[] $pediaEntryHistoryversions
 * @property PediaEntryRelatedlinks[] $pediaEntryRelatedlinks
 * @property PediaEntryRelatedlinks[] $pediaEntryRelatedlinks0
 */
class PediaEntryBasicinfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedia_entry_basicinfo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'edittime', 'lastediter'], 'required'],
            [['brief_info', 'content'], 'string'],
            [['grade'], 'number'],
            [['isshow', 'clicktimes', 'needperm', 'lastediter'], 'integer'],
            [['edittime'], 'safe'],
            [['title'], 'string', 'max' => 40],
            [['lastediter'], 'exist', 'skipOnError' => true, 'targetClass' => PediaUserMember::className(), 'targetAttribute' => ['lastediter' => 'uid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'eid' => 'Eid',
            'title' => 'Title',
            'brief_info' => 'Brief Info',
            'content' => 'Content',
            'grade' => 'Grade',
            'isshow' => 'Isshow',
            'clicktimes' => 'Clicktimes',
            'needperm' => 'Needperm',
            'edittime' => 'Edittime',
            'lastediter' => 'Lastediter',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLastediter0()
    {
        return $this->hasOne(PediaUserMember::className(), ['uid' => 'lastediter']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPediaEntryClassifications()
    {
        return $this->hasMany(PediaEntryClassification::className(), ['eid' => 'eid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCs()
    {
        return $this->hasMany(PediaEntryCategory::className(), ['cid' => 'cid'])->viaTable('pedia_entry_classification', ['eid' => 'eid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPediaEntryHistoryversions()
    {
        return $this->hasMany(PediaEntryHistoryversion::className(), ['eid' => 'eid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPediaEntryRelatedlinks()
    {
        return $this->hasMany(PediaEntryRelatedlinks::className(), ['eid' => 'eid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPediaEntryRelatedlinks0()
    {
        return $this->hasMany(PediaEntryRelatedlinks::className(), ['eid' => 'eid']);
    }

    /**
     * {@inheritdoc}
     * @return PediaEntryBasicinfoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PediaEntryBasicinfoQuery(get_called_class());
    }
}
