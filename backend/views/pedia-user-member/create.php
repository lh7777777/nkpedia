<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PediaUserMember */
/**
 * Team:没有蛀牙
 * Coding by:孙一冉 1711297，20190712
 */

$this->title = 'Create Pedia User Member';
$this->params['breadcrumbs'][] = ['label' => 'Pedia User Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedia-user-member-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
