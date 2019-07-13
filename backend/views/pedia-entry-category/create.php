<?php


/**
 * Team:没有蛀牙,NKU
 * Coding by 杨越 1711300,20190712
 * This is the table of bankend web.
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PediaEntryCategory */

$this->title = 'Create Pedia Entry Category';
$this->params['breadcrumbs'][] = ['label' => 'Pedia Entry Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedia-entry-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
