<?php
/* @var $this yii\web\View */

use frontend\assets\LayuiAsset;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = 'My Yii Application';
/**
 * Team:没有蛀牙,NKU
 * Coding by 杨俣哲 1711396,20190714
 * This is search page
 */
?>

<div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-md6 layui-col-md-offset3">
            <img src="<?php echo Url::to('@web/resources/title/1.png'); ?>" alt=""/>
        </div>
    </div>
</div>
<div class="layui-container layui-anim layui-anim-upbit">
    <div class="layui-collapse  layui-bg-gray" lay-accordion>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title layui-bg-gray">Title</h2>
            <div class="layui-colla-content layui-show">
                <div class="layui-row">
                    <div class="layui-col-md6">
                        <?=Html::encode("$word->title")?>
                    </div>
                    <div class="layui-col-md3">
                        <div id="rate"></div>
                        <?php LayuiAsset::addscript($this,'@web/resources/js/search.js')?>
                    </div>
                </div>
            </div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title layui-bg-gray">简介</h2>
            <div class="layui-colla-content">
                <?=Html::encode("$word->brief_info")?>
            </div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title layui-bg-gray">内容</h2>
            <div class="layui-colla-content">
                <?=Html::encode("$word->content")?>
            </div>
        </div>
    </div>

</div>
