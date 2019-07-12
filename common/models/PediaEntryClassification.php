<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pedia_entry_classification".
 *
 * @property int $eid 词条id
 * @property int $cid 类别id
 *
 * @property PediaEntryBasicinfo $e
 * @property PediaEntryCategory $c
 */
class PediaEntryClassification extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedia_entry_classification';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['eid', 'cid'], 'required'],
            [['eid', 'cid'], 'integer'],
            [['eid', 'cid'], 'unique', 'targetAttribute' => ['eid', 'cid']],
            [['eid'], 'exist', 'skipOnError' => true, 'targetClass' => PediaEntryBasicinfo::className(), 'targetAttribute' => ['eid' => 'eid']],
            [['cid'], 'exist', 'skipOnError' => true, 'targetClass' => PediaEntryCategory::className(), 'targetAttribute' => ['cid' => 'cid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'eid' => 'Eid',
            'cid' => 'Cid',
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
    public function getC()
    {
        return $this->hasOne(PediaEntryCategory::className(), ['cid' => 'cid']);
    }

    /**
     * {@inheritdoc}
     * @return PediaEntryClassificationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PediaEntryClassificationQuery(get_called_class());
    }
}
