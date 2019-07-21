<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */
/**
 * Team:没有蛀牙,NKU
 * Coding by 杨俣哲 1711396,20190714
 * This is signup page
 */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<div class="layui-container">-->
<!--    <div class="layui-row">-->
<!--        <div class="layui-col-md6 layui-col-md-offset3">-->
<!--            <img src="--><?php //echo Url::to('@web/resources/title/1.png'); ?><!--" alt=""/>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-md6 layui-col-md-offset3">
            <div class="layui-card layui-bg-gray layui-anim layui-anim-up">
                <div class="layui-card-body">
                    <div class="site-signup">
                        <h1><?= Html::encode($this->title) ?></h1>

                        <p>Please fill out the following fields to signup:</p>

                        <div class="row">
                            <div class="col-lg-5">
                                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                                <?= $form->field($model, 'email') ?>

                                <?= $form->field($model, 'password')->passwordInput() ?>

                                <div class="form-group">
                                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                                </div>

                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

