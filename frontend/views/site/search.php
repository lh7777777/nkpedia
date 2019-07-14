<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>

<div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-md6 layui-col-md-offset3">
            <img src="<?php echo Url::to('@web/resources/title/1.png'); ?>" alt=""/>
        </div>
    </div>
</div>
<div class="layui-container">
    <div class="layui-collapse" lay-accordion>
        <div class="layui-colla-item layui-bg-gray">
            <h2 class="layui-colla-title">Title</h2>
            <div class="layui-colla-content layui-show">
                <?=Html::encode("$word->title")?>
            </div>
        </div>
        <div class="layui-colla-item layui-bg-gray">
            <h2 class="layui-colla-title">简介</h2>
            <div class="layui-colla-content">
                <?=Html::encode("$word->brief_info")?>
            </div>
        </div>
        <div class="layui-colla-item layui-bg-gray">
            <h2 class="layui-colla-title">内容</h2>
            <div class="layui-colla-content">
                <?=Html::encode("$word->content")?>
            </div>
        </div>
    </div>

</div>