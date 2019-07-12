<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PediaUserMedal */

$this->title = 'Update Pedia User Medal: ' . $model->mid;
$this->params['breadcrumbs'][] = ['label' => 'Pedia User Medals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mid, 'url' => ['view', 'id' => $model->mid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pedia-user-medal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
