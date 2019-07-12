<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PediaUserPermSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedia-user-perm-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pid') ?>

    <?= $form->field($model, 'alloweditword') ?>

    <?= $form->field($model, 'allowbanuser') ?>

    <?= $form->field($model, 'allowedcreword') ?>

    <?= $form->field($model, 'alloweddistri') ?>

    <?php // echo $form->field($model, 'allowedchangeperm') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
