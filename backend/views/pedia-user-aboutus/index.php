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
 *Coding by 王心荻，1711298,20190712
 */

$this->title = 'Pedia User Aboutuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedia-user-aboutus-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    $uid = PediaUserMember::find()->where(['uid' => Yii::$app->user->identity->id])->asArray()->one()['uid'];
    if ($uid==1 || $uid==2 || $uid==3 || $uid==4 || $uid==5) {
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
