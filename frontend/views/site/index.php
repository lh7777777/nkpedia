<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = 'My Yii Application';
/**
 * Team:没有蛀牙,NKU
 * Coding by 杨俣哲 1711396,20190714
 * This is index page
 */
?>

<!--<div class="layui-container">-->
<!--    <div class="layui-row">-->
<!--        <div class="text-center">-->
<!--            <img src="--><?php //echo Url::to('@web/resources/title/39_2.png'); ?><!--" alt=""/>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="layui-container layui-anim layui-anim-upbit" id="divcon">
    <div class="layui-row"></div>
        <div class="layui-row">
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'word')->label(false)->textInput(['class'=>'layui-input']) ?>
        </div>
        <div class="layui-row">
                <div class="form-group">
                    <?= Html::submitButton('<i class="layui-icon layui-icon-search"></i>Search', ['class' => 'layui-btn layui-btn-normal layui-btn-fluid']) ?>
                </div>
        </div>
<?php ActiveForm::end(); ?>
</div>
<div class="layui-container" style="height: 60%; position: relative;top: 0;z-index: -1;"></div>
