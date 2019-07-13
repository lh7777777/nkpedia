<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PediaEntryHistoryversion */

$this->title = 'Update Pedia Entry Historyversion: ' . $model->vid;
$this->params['breadcrumbs'][] = ['label' => 'Pedia Entry Historyversions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->vid, 'url' => ['view', 'id' => $model->vid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pedia-entry-historyversion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
