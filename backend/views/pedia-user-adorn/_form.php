<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PediaUserAdorn */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedia-user-adorn-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uid')->textInput() ?>

    <?= $form->field($model, 'mid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
