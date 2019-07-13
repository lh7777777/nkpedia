<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PediaEntryHistoryversion */

$this->title = $model->vid;
$this->params['breadcrumbs'][] = ['label' => 'Pedia Entry Historyversions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pedia-entry-historyversion-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'vid',
            'edit_time',
            'edit_cont:ntext',
            'eid',
            'uid',
        ],
    ]) ?>

</div>
