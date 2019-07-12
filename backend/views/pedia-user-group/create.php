<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PediaUserGroup */

$this->title = 'Create Pedia User Group';
$this->params['breadcrumbs'][] = ['label' => 'Pedia User Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedia-user-group-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
