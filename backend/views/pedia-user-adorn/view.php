<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PediaUserAdorn */

$this->title = $model->uid;
$this->params['breadcrumbs'][] = ['label' => 'Pedia User Adorns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pedia-user-adorn-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'uid' => $model->uid, 'mid' => $model->mid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'uid' => $model->uid, 'mid' => $model->mid], [
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
            'uid',
            'mid',
        ],
    ]) ?>

</div>
