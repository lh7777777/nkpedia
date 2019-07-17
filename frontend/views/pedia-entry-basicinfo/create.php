<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PediaEntryBasicinfo */

$this->title = 'Create Pedia Entry Basicinfo';
$this->params['breadcrumbs'][] = ['label' => 'Pedia Entry Basicinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedia-entry-basicinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
