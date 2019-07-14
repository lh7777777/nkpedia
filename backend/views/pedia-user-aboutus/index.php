<?php

use common\models\PediaUserGroup;
use common\models\PediaUserMember;
use common\models\PediaUserPerm;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PediaUserAboutusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

/** Team:没有蛀牙，NKU
 *Coding by 孙一冉，1711297，20190714
 */

$this->title = 'Pedia User Aboutuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedia-user-aboutus-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
    $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
    $edit = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['allowedcreword'];
    if ($edit != 0) {
        ?><p>
        <?= Html::a('Create Pedia User Aboutus', ['create'], ['class' => 'btn btn-success']) ?>
        </p><?php
    }
    ?>

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
