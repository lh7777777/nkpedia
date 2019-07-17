<?php

use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\PediaEntryBasicinfo */
/**
 * Team:没有蛀牙,NKU
 * Coding by 杨俣哲 1711396,20190717
 * This is update page
 */
$this->title = 'Update Pedia Entry Basicinfo: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Pedia Entry Basicinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->eid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-md6 layui-col-md-offset3">
            <img src="<?php echo Url::to('@web/resources/title/1.png'); ?>" alt=""/>
        </div>
    </div>
</div>
    <div class="pedia-entry-basicinfo-update layui-container layui-bg-gray">
        <br>
        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>

