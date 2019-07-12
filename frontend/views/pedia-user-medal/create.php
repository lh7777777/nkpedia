<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PediaUserMedal */

$this->title = 'Create Pedia User Medal';
$this->params['breadcrumbs'][] = ['label' => 'Pedia User Medals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedia-user-medal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
