<?php
use frontend\assets\AppAsset;
use frontend\assets\LayuiAsset;
use yii\helpers\Html;
use yii\helpers\Url;
AppAsset::register($this);
LayuiAsset::register($this);


// LayuiAsset::addScript($this, "@web/resources/js/index.js");

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>NKpedia</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <ul class="layui-nav" lay-filter="">
        <li class="layui-nav-item"><a href="">最新活动<span class="layui-icon layui-icon-username"></span></a></li>
        <li class="layui-nav-item layui-this"><a href="/nkpedia/frontend/web/index.php?r=site%2Findex">主页</a></li>
        <li class="layui-nav-item"><a href="">大数据</a></li>
        <li class="layui-nav-item">
            <a href="javascript:;">解决方案</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
                <dd><a href="">移动模块</a></dd>
                <dd><a href="">后台模版</a></dd>
                <dd><a href="">电商平台</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item"><a href="">社区</a></li>
    </ul>
    <?php LayuiAsset::addscript($this,'@web/resources/js/index.js')?>
    <div class="content">
        <div id="div1"><img src="<?php echo Url::to('@web/resources/images/07.png'); ?>" /></div>
        <?= $content ?>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>