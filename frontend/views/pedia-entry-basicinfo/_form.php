<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\PediaUserMember;

/* @var $this yii\web\View */
/* @var $model common\models\PediaEntryBasicinfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedia-entry-basicinfo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brief_info')->textarea(['rows' => 5]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 20]) ?>

    <?= $form->field($model, 'grade')->hiddenInput(['value'=>$model->grade])->label(false) ?>

    <?= $form->field($model, 'isshow')->hiddenInput(['value'=>$model->isshow])->label(false) ?>

    <?= $form->field($model, 'clicktimes')->hiddenInput(['value'=>$model->clicktimes])->label(false) ?>

    <?= $form->field($model, 'needperm')->hiddenInput(['valur'=>$model->needperm])->label(false) ?>

    <?= $form->field($model, 'edittime')->hiddenInput(['value'=>date('Y-m-d H:i:s')])->label(false)?>

    <?= $form->field($model, 'lastediter')->hiddenInput(['value'=>PediaUserMember::find()->where(['loginname'=>Yii::$app->user->identity->username])->one()->uid])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
