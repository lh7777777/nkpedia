<?php


/**
 * Team:没有蛀牙,NKU
 * Coding by 杨越 1711300,20190712
 * This is the table of bankend web.
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PediaEntryClassification */

$this->title = 'Update Pedia Entry Classification: ' . $model->eid;
$this->params['breadcrumbs'][] = ['label' => 'Pedia Entry Classifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->eid, 'url' => ['view', 'eid' => $model->eid, 'cid' => $model->cid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pedia-entry-classification-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
