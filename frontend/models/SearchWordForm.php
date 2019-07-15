<?php
namespace frontend\models;

use yii\base\Model;
/**
 * Team:没有蛀牙,NKU
 * Coding by 杨俣哲 1711396,20190714
 * This is search form
 */
class SearchWordForm extends Model
{
    public $word;

    public function rules()
    {
        return [
            ['word', 'required']
        ];
    }
}