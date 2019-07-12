<?php


/**
 * Team:没有蛀牙,NKU
 * Coding by 杨越 1711300,20190712
 * This is the table of bankend web.
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PediaEntryBasicinfo */

$this->title = 'Update Pedia Entry Basicinfo: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Pedia Entry Basicinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->eid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pedia-entry-basicinfo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
