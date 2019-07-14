<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PediaUserMember */
/**
 * Team:没有蛀牙
 * Coding by:孙一冉 1711297，20190712
 */

$this->title = $model->uid;
$this->params['breadcrumbs'][] = ['label' => 'Pedia User Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pedia-user-member-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'uid',
            'gid',
            'loginname',
        ],
    ]) ?>

</div>
