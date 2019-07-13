<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PediaEntryReport */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedia-entry-report-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vid')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
