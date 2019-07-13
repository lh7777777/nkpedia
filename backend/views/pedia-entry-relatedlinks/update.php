<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PediaEntryRelatedlinks */

$this->title = 'Update Pedia Entry Relatedlinks: ' . $model->eid;
$this->params['breadcrumbs'][] = ['label' => 'Pedia Entry Relatedlinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->eid, 'url' => ['view', 'eid' => $model->eid, 'lid' => $model->lid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pedia-entry-relatedlinks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
