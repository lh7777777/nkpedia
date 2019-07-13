<?php
namespace frontend\models;

use yii\base\Model;

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