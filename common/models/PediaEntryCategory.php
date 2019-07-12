<?php


/**
 * Team:没有蛀牙,NKU
 * Coding by 杨越 1711300,20190712
 * This is the model class for table "pedia_entry_category".
 */
namespace common\models;

use Yii;

/**
 * This is the model class for table "pedia_entry_category".
 *
 * @property int $cid 类别id
 * @property string $category 类别名称
 *
 * @property PediaEntryClassification[] $pediaEntryClassifications
 * @property PediaEntryBasicinfo[] $es
 */
class PediaEntryCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedia_entry_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category'], 'required'],
            [['category'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cid' => 'Cid',
            'category' => 'Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPediaEntryClassifications()
    {
        return $this->hasMany(PediaEntryClassification::className(), ['cid' => 'cid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEs()
    {
        return $this->hasMany(PediaEntryBasicinfo::className(), ['eid' => 'eid'])->viaTable('pedia_entry_classification', ['cid' => 'cid']);
    }

    /**
     * {@inheritdoc}
     * @return PediaEntryCategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PediaEntryCategoryQuery(get_called_class());
    }
}
