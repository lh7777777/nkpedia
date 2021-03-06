<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PediaUserMember */
/* @var $form yii\widgets\ActiveForm */
/**
 * Team:没有蛀牙
 * Coding by:孙一冉 1711297，20190712
 */
?>

<div class="pedia-user-member-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'gid')->textInput() ?>

    <?= $form->field($model, 'loginname')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
