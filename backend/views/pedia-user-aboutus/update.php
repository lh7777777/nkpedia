<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PediaUserAboutus */
/**
 * Team:没有蛀牙,NKU
 * Coding by 王心荻 1711298,20190722
 */

$this->title = 'Update Pedia User Aboutus: ' . $model->uid;
$this->params['breadcrumbs'][] = ['label' => 'Pedia User Aboutuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uid, 'url' => ['view', 'id' => $model->uid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pedia-user-aboutus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
