<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PediaEntryRelatedlinks */
/* @var $form yii\widgets\ActiveForm */
/**
 * Team:没有蛀牙,NKU
 * Coding by 解亚兰 1711431,20190722
 */
?>

<div class="pedia-entry-relatedlinks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'eid')->textInput() ?>

    <?= $form->field($model, 'lid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
