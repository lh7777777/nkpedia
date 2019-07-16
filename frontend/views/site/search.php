<?php
/* @var $this yii\web\View */

use frontend\assets\LayuiAsset;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use cebe\markdown;
use common\models\PediaEntryClassification;
use common\models\PediaEntryCategory;
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
            <h2 class="layui-colla-title layui-bg-gray">基本内容</h2>
            <div class="layui-colla-content layui-show">
                <ul class="layui-timeline">
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis layui-bg-gray">&#xe63f;</i>
                        <div class="layui-timeline-content layui-text">
                            <h3 class="layui-timeline-title">词条简介</h3>
                            <?=Html::encode("$word->brief_info")?>
                        </div>
                    </li>
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis layui-bg-gray">&#xe63f;</i>
                        <div class="layui-timeline-content layui-text">
                            <h3 class="layui-timeline-title">词条类别</h3>
                            <br>
                            <div class="layui-btn-container">
                                <?php $cates=PediaEntryClassification::find()->where(['eid'=>$word->eid])->all();
                                $colors=array('','layui-btn-normal','layui-btn-warm','layui-btn-danger');
                                foreach ($cates as $cate)
                                {
                                    $cname=PediaEntryCategory::find()->where(['cid'=>$cate->cid])->one();
                                    echo  '<a target="_self" href="/nkpedia/frontend/web/index.php?r=site%2Fcategory&cid='.$cate->cid.'"><button type="button" class="layui-btn layui-btn-radius '. $colors[rand(0,3)].'">'.$cname->category.'</button></a>';
                                }
                                ?>
                            </div>
                        </div>
                    </li>
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis layui-bg-gray">&#xe63f;</i>
                        <div class="layui-timeline-content layui-text">
                            <h3 class="layui-timeline-title">相关词汇</h3>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title layui-bg-gray">详细解释</h2>
            <div class="layui-colla-content layui-show">
                <?php $parser=new markdown\GithubMarkdown();
                    echo $parser->parse($word->content);?>
            </div>
        </div>
    </div>

</div>
