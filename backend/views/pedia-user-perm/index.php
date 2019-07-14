<?php

use common\models\PediaUserGroup;
use common\models\PediaUserMember;
use common\models\PediaUserPerm;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PediaUserPermSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

/**
 * Team:没有蛀牙
 * Coding by:孙一冉 1711297，20190714
 */

$this->title = 'Pedia User Perms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedia-user-perm-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
    $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
    $edit = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['allowedcreword'];
    if ($edit != 0) {
        ?><p>
        <?= Html::a('Create Pedia User Perm', ['create'], ['class' => 'btn btn-success']) ?>
        </p><?php
    }
    ?>

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
