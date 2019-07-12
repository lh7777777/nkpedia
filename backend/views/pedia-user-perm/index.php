<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PediaUserPermSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/**
 * Team:没有蛀牙
 * Coding by:孙一冉 1711297，20190712
 */

$this->title = 'Pedia User Perms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedia-user-perm-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pedia User Perm', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pid',
            'alloweditword',
            'allowbanuser',
            'allowedcreword',
            'alloweddistri',
            //'allowedchangeperm',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
