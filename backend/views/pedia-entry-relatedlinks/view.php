<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PediaEntryRelatedlinks */

$this->title = $model->eid;
$this->params['breadcrumbs'][] = ['label' => 'Pedia Entry Relatedlinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pedia-entry-relatedlinks-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'eid' => $model->eid, 'lid' => $model->lid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'eid' => $model->eid, 'lid' => $model->lid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'eid',
            'lid',
        ],
    ]) ?>

</div>
