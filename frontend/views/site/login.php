<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-md6 layui-col-md-offset3">
            <img src="<?php echo Url::to('@web/resources/title/1.png'); ?>" alt=""/>
        </div>
    </div>
</div>
<div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-md6 layui-col-md-offset3">
            <div class="layui-card layui-bg-gray layui-anim layui-anim-up">
                <div class="layui-card-body">
                    <div class="site-login center-block">
                        <h1><?= Html::encode($this->title) ?></h1>

                        <p>Please fill out the following fields to login:</p>

                        <div class="row">
                            <div class="col-lg-5">
                                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                                <?= $form->field($model, 'password')->passwordInput() ?>

                                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                                <div style="color:#999;margin:1em 0">
                                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                                    <br>
                                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                                </div>

                                <div class="form-group">
                                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
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