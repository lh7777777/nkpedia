<?php


/**
 * Team:没有蛀牙,NKU
 * Coding by 杨越 1711300,20190712
 * This is the table of bankend web.
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PediaEntryBasicinfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedia-entry-basicinfo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brief_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'grade')->textInput() ?>

    <?= $form->field($model, 'isshow')->textInput() ?>

    <?= $form->field($model, 'clicktimes')->textInput() ?>

    <?= $form->field($model, 'needperm')->textInput() ?>

    <?= $form->field($model, 'edittime')->textInput() ?>

    <?= $form->field($model, 'lastediter')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
