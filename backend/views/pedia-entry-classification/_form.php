<?php


/**
 * Team:没有蛀牙,NKU
 * Coding by 杨越 1711300,20190712
 * Coding by 王心荻 1711298 20190714
 * This is the table of bankend web.
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PediaEntryClassification */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedia-entry-classification-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'eid')->textInput() ?>

    <?=
    //$titles = Yii::$app->db->createCommand('SELECT cid FROM pedia_entry_category')->queryColumn();
    $form->field($model,'cid')->dropDownList(Yii::$app->db->createCommand('SELECT cid FROM pedia_entry_category')->queryColumn());
    //$form->field($model, 'cid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
