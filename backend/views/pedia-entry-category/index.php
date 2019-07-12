<?php


/**
 * Team:没有蛀牙,NKU
 * Coding by 杨越 1711300,20190712
 * This is the table of bankend web.
 */
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PediaEntryCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pedia Entry Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedia-entry-category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pedia Entry Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cid',
            'category',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
