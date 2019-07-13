<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PediaEntryHistoryversionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedia-entry-historyversion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'vid') ?>

    <?= $form->field($model, 'edit_time') ?>

    <?= $form->field($model, 'edit_cont') ?>

    <?= $form->field($model, 'eid') ?>

    <?= $form->field($model, 'uid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
