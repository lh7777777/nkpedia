<?php


/**
 * Team:没有蛀牙,NKU
 * Coding by 杨越 1711300,20190712
 * This is the table of bankend web.
 */
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PediaEntryBasicinfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pedia Entry Basicinfos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedia-entry-basicinfo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pedia Entry Basicinfo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'eid',
            'title',
            'brief_info:ntext',
            'content:ntext',
            'grade',
            //'isshow',
            //'clicktimes:datetime',
            //'needperm',
            //'edittime',
            //'lastediter',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
