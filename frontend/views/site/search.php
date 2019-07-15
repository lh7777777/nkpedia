<?php
/* @var $this yii\web\View */

use frontend\assets\LayuiAsset;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use cebe\markdown;
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
    <div class="layui-collapse  layui-bg-gray">
        <div class="layui-colla-item">
            <h2 class="layui-colla-title layui-bg-gray">词条名称</h2>
            <div class="layui-colla-content layui-show">
                <div class="layui-row">
                    <div class="text-center">
                        <h1><?=Html::encode("$word->title")?></h1>
                    </div>
                    <div class="layui-row pull-right">
                        评个分？
                        <div id="rate" ></div>
                        <?php LayuiAsset::addscript($this,'@web/resources/js/search.js')?>
                    </div>
                    <div class="layui-row text-right">
                        <small>当前点击数:<?=Html::encode("$word->clicktimes")?></small>
                    </div>
                    <div class="layui-row text-right">
                        <small>当前评分:<?=Html::encode("$word->grade")?></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title layui-bg-gray">简介</h2>
            <div class="layui-colla-content layui-show">
                <?=Html::encode("$word->brief_info")?>
            </div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title layui-bg-gray">内容</h2>
            <div class="layui-colla-content layui-show">
                <?php $parser=new markdown\GithubMarkdown();
                    echo $parser->parse($word->content);?>
            </div>
        </div>
    </div>

</div>
