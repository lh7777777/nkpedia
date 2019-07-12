<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pedia_entry_relatedlinks".
 *
 * @property int $eid 主词条id
 * @property int $lid 链接词条id
 *
 * @property PediaEntryBasicinfo $e
 * @property PediaEntryBasicinfo $e0
 */
class PediaEntryRelatedlinks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedia_entry_relatedlinks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['eid', 'lid'], 'required'],
            [['eid', 'lid'], 'integer'],
            [['eid', 'lid'], 'unique', 'targetAttribute' => ['eid', 'lid']],
            [['eid'], 'exist', 'skipOnError' => true, 'targetClass' => PediaEntryBasicinfo::className(), 'targetAttribute' => ['eid' => 'eid']],
            [['eid'], 'exist', 'skipOnError' => true, 'targetClass' => PediaEntryBasicinfo::className(), 'targetAttribute' => ['eid' => 'eid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'eid' => 'Eid',
            'lid' => 'Lid',
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
    public function getE0()
    {
        return $this->hasOne(PediaEntryBasicinfo::className(), ['eid' => 'eid']);
    }

    /**
     * {@inheritdoc}
     * @return PediaEntryRelatedlinksQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PediaEntryRelatedlinksQuery(get_called_class());
    }
}
