<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PediaUserPerm */
/**
 * Team:没有蛀牙
 * Coding by:孙一冉 1711297，20190712
 */

$this->title = $model->pid;
$this->params['breadcrumbs'][] = ['label' => 'Pedia User Perms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pedia-user-perm-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pid',
            'alloweditword',
            'allowbanuser',
            'allowedcreword',
            'alloweddistri',
            'allowedchangeperm',
        ],
    ]) ?>

</div>
