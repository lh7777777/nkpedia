<?php
/**
 * Team:没有蛀牙,NKU
 * Coding by 杨越 1711300,20190714
 * This is the table of bankend web.
 */
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PediaEntryHistoryversion */
/**
 * Team:没有蛀牙,NKU
 * Coding by 解亚兰 1711431,20190722
 */

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
