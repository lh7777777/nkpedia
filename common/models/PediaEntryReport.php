<?php

/**
 * Team:没有蛀牙
 * Coding by:解亚兰 1711431，20190712
 * This is the controller of pedia-user-group
 */
namespace common\models;

use Yii;

/**
 * This is the model class for table "pedia_entry_report".
 *
 * @property int $rid 举报id
 * @property int $vid 被举报词条历史版本
 * @property string $description 举报原因描述
 *
 * @property PediaEntryHistoryversion $v
 */
class PediaEntryReport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedia_entry_report';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vid'], 'required'],
            [['vid'], 'integer'],
            [['description'], 'string'],
            [['vid'], 'exist', 'skipOnError' => true, 'targetClass' => PediaEntryHistoryversion::className(), 'targetAttribute' => ['vid' => 'vid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'rid' => 'Rid',
            'vid' => 'Vid',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getV()
    {
        return $this->hasOne(PediaEntryHistoryversion::className(), ['vid' => 'vid']);
    }

    /**
     * {@inheritdoc}
     * @return PediaEntryReportQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PediaEntryReportQuery(get_called_class());
    }
}
