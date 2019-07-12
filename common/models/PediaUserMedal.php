<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pedia_user_medal".
 *
 * @property int $mid 勋章id
 * @property string $mname 勋章名称
 * @property string $mdes 勋章描述
 *
 * @property PediaUserAdorn[] $pediaUserAdorns
 * @property PediaUserMember[] $us
 */
class PediaUserMedal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedia_user_medal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mname'], 'required'],
            [['mdes'], 'string'],
            [['mname'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mid' => 'Mid',
            'mname' => 'Mname',
            'mdes' => 'Mdes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPediaUserAdorns()
    {
        return $this->hasMany(PediaUserAdorn::className(), ['mid' => 'mid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUs()
    {
        return $this->hasMany(PediaUserMember::className(), ['uid' => 'uid'])->viaTable('pedia_user_adorn', ['mid' => 'mid']);
    }

    /**
     * {@inheritdoc}
     * @return PediaUserMedalQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PediaUserMedalQuery(get_called_class());
    }
}
