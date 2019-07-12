<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PediaUserAboutusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pedia User Aboutuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedia-user-aboutus-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pedia User Aboutus', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'uid',
            'sid',
            'sname',
            'ssex',
            'smajor',
            //'semail:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
