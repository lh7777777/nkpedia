<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PediaUserAdorn */
/**
 * Team:没有蛀牙,NKU
 * Coding by 王心荻 1711298,20190722
 */

$this->title = 'Update Pedia User Adorn: ' . $model->uid;
$this->params['breadcrumbs'][] = ['label' => 'Pedia User Adorns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uid, 'url' => ['view', 'uid' => $model->uid, 'mid' => $model->mid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pedia-user-adorn-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
