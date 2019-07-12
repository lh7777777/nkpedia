<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PediaUserPerm */
/* @var $form yii\widgets\ActiveForm */
/**
 * Team:没有蛀牙
 * Coding by:孙一冉 1711297，20190712
 */
?>

<div class="pedia-user-perm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alloweditword')->textInput() ?>

    <?= $form->field($model, 'allowbanuser')->textInput() ?>

    <?= $form->field($model, 'allowedcreword')->textInput() ?>

    <?= $form->field($model, 'alloweddistri')->textInput() ?>

    <?= $form->field($model, 'allowedchangeperm')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
