<?php
use frontend\assets\AppAsset;
use frontend\assets\LayuiAsset;
use yii\helpers\Html;
use yii\helpers\Url;
AppAsset::register($this);
LayuiAsset::register($this);

/**
 * Team:没有蛀牙,NKU
 * Coding by 杨俣哲 1711396,20190713
 * This is new layout
 */
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
    <div class="hidden">
        <?php if(!Yii::$app->user->isGuest)
        {$menuItems[] =
            Html::beginForm(['/site/logout'], 'post',['id'=>'login-form'])
            . Html::submitButton(
                'Logout ',
                ['class' => 'btn btn-link logout','id'=>'logoutbutton']
            )
            . Html::endForm();
        echo implode($menuItems);}
        ?>
    </div>
    <?php $this->beginBody() ?>
    <ul class="layui-nav" lay-filter="">
        <li class="layui-nav-item" id="person"><a href="/nkpedia/backend/web/index.php?r=site%2Findex"><span class="fa fa-user"></span>&nbsp;个人</a></li>
        <li class="layui-nav-item" id="index"><a href="/nkpedia/frontend/web/index.php?r=site%2Findex"><span class="fa fa-home"></span>&nbsp;主页</a></li>
        <li class="layui-nav-item" id="rank"><a href="/nkpedia/frontend/web/index.php?r=site%2Frank"><span class="fa fa-list"></span>&nbsp;热词排行</a></li>
        <li class="layui-nav-item">
        <?php if (Yii::$app->user->isGuest)
            {
                echo '<a href="javascript:;"><span class="fa fa-user-plus"></span>&nbsp;账户</a>'.
                        '<dl class="layui-nav-child"> <!-- 二级菜单 -->'.
                              '<dd><a href="/nkpedia/frontend/web/index.php?r=site%2Fsignup"><span class="fa fa-user-circle"></span>&nbsp;注册</a></dd>'.
                              '<dd><a href="/nkpedia/frontend/web/index.php?r=site%2Flogin"><span class="fa fa-sign-in"></span>&nbsp;登录</a></dd>'.
                            '</dl>';
            }else{
                echo '<a href="javascript:void(0);" id="logouthref"><span class="fa fa-sign-out"></span>&nbsp;退出登录</a>';
                }?>
        </li>
        <li class="layui-nav-item" id="aboutus"><a href="/nkpedia/frontend/web/index.php?r=site%2Faboutus"><span class="fa fa-info"></span>&nbsp;关于我们</a></li>
    </ul>
    <?php LayuiAsset::addscript($this,'@web/resources/js/index.js')?>
    <?php $num=rand(8,10);?>
    <?php
        $bac=1;
     if($num==10)
        {
            $bac=2;
        }
     ?>
    <div id="div1"><img src="<?php echo Url::to('@web/resources/images/'.$num.'.jpg'); ?>" /></div>
    <br>
    <div class="layui-container">
        <div class="layui-row">
            <div class="text-center">
                <img src="<?php echo Url::to('@web/resources/title/'.rand(21,27).'_'.$bac.'.png'); ?>" alt=""/>
            </div>
        </div>
    </div>
    <br>
<!--    <div class="content">-->
        <?= $content ?>
<!--    </div>-->
    <footer class="layui-bg-black" id="footer" style="bottom: 0;position: relative;">
        <hr>
        <div class="copyright ">
            <div class="container text-center fsize12">
                @没有蛀牙团队
            </div>
        </div>
        <br>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>