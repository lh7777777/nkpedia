<?php
/**
 * Team:没有蛀牙,NKU
 * Coding by 杨俣哲 1711396,20190719
 * This is the about us page
 */

use frontend\assets\LayuiAsset;
use yii\helpers\Url;

?>
<div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-md6 layui-col-md-offset3">
            <img src="<?php echo Url::to('@web/resources/title/1.png'); ?>" alt=""/>
        </div>
    </div>
</div>
<div class="layui-container">
    <div class="layui-carousel" id="uscarousel" lay-filter="uscarousel">
        <div carousel-item>
            <div class="layui-container">
                <div class="pull-right" style="position: absolute;left: 650px;top: 10px;">
                    <img src="<?php echo Url::to('@web/resources/images/scp.gif')?>" alt="" width="400" class="img-thumbnail">
                </div>
                <br>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <i class="fa fa-user fa-2x">姓名</i>
                    </div>
                </div>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <p class="h4">杨俣哲</p>
                    </div>
                </div>
                <br>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <i class="fa fa-info-circle fa-2x">学号</i>
                    </div>
                </div>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <p class="h4">1711396</p>
                    </div>
                </div>
                <br>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <i class="fa fa-superpowers fa-2x">Something to say</i>
                    </div>
                </div>
                <div class="layui-row">
                    <div class="layui-col-md10" style="position: relative; left: 100px;">
                        <p class="h4">那么我们走吧，你我两个人 正当那十一日帝国吞噬天空 好似人们融化在早餐桌上的蛤蜊汤里</p>
                        <p class="h4 text-right">——研究员塔罗兰</p>
                    </div>
                </div>

<!--                <ul class="layui-timeline">-->
<!--                    <li class="layui-timeline-item">-->
<!--                        <i class="layui-icon layui-timeline-axis">&#xe63f;</i>-->
<!--                        <div class="layui-timeline-content layui-text">-->
<!--                            <h3 class="layui-timeline-title">姓名</h3>-->
<!--                            <p>-->
<!--                                杨俣哲-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="layui-timeline-item">-->
<!--                        <i class="layui-icon layui-timeline-axis">&#xe63f;</i>-->
<!--                        <div class="layui-timeline-content layui-text">-->
<!--                            <h3 class="layui-timeline-title">学号</h3>-->
<!--                            <p>-->
<!--                                1711396-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="layui-timeline-item">-->
<!--                        <i class="layui-icon layui-timeline-axis">&#xe63f;</i>-->
<!--                        <div class="layui-timeline-content layui-text">-->
<!--                            <h3 class="layui-timeline-title">邮箱</h3>-->
<!--                            <p>-->
<!--                                794433219@qq.com-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                </ul>-->
            </div>
            <div class="layui-container">
                <div class="pull-right" style="position: absolute;left: 650px;top: 10px;">
                    <img src="<?php echo Url::to('@web/resources/images/bp.JPG')?>" alt="" width="350" length="300" class="img-thumbnail">
                </div>
                <br>
            <div class="layui-row">
                <div class="layui-col-md3" style="position: relative; left: 100px;">
                    <i class="fa fa-user fa-2x">姓名</i>
                </div>
            </div>
            <div class="layui-row">
                <div class="layui-col-md3" style="position: relative; left: 100px;">
                    <p class="h4">孙一冉</p>
                </div>
            </div>
            <br>
            <div class="layui-row">
                <div class="layui-col-md3" style="position: relative; left: 100px;">
                    <i class="fa fa-info-circle fa-2x">学号</i>
                </div>
            </div>
            <div class="layui-row">
                <div class="layui-col-md3" style="position: relative; left: 100px;">
                    <p class="h4">1711297</p>
                </div>
            </div>
            <br>
            <div class="layui-row">
                <div class="layui-col-md3" style="position: relative; left: 100px;">
                    <i class="fa fa-superpowers fa-2x">Something to say</i>
                </div>
            </div>
            <div class="layui-row">
                <div class="layui-col-md10" style="position: relative; left: 100px;">
                    <p class="h4">我只愿你历遍山河，觉得人间值得。</p>
                    <p class="h4 text-right">——《禾叔的杂货铺》</p>
                </div>
            </div>
            </div>
            <div class="layui-container">
                <div class="pull-right" style="position: absolute;left: 650px;top: 10px;">
                    <img src="<?php echo Url::to('@web/resources/images/yue.jpg')?>" alt="" width="420" class="img-thumbnail">
                </div>
                <br>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <i class="fa fa-user fa-2x">姓名</i>
                    </div>
                </div>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <p class="h4">杨越</p>
                    </div>
                </div>
                <br>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <i class="fa fa-info-circle fa-2x">学号</i>
                    </div>
                </div>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <p class="h4">1711300</p>
                    </div>
                </div>
                <br>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <i class="fa fa-superpowers fa-2x">Something to say</i>
                    </div>
                </div>
                <div class="layui-row">
                    <div class="layui-col-md10" style="position: relative; left: 100px;">
                        <p class="h4">如梦似幻，你是我的neverland</p>
                    </div>
                </div>
            </div>
            <div class="layui-container">
                <div class="pull-right" style="position: absolute;left: 650px;top: 10px;">
                    <img src="<?php echo Url::to('@web/resources/images/ji.jpg')?>" alt="" width="400" class="img-thumbnail">
                </div>
                <br>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <i class="fa fa-user fa-2x">姓名</i>
                    </div>
                </div>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <p class="h4">王心荻</p>
                    </div>
                </div>
                <br>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <i class="fa fa-info-circle fa-2x">学号</i>
                    </div>
                </div>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <p class="h4">1711298</p>
                    </div>
                </div>
                <br>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <i class="fa fa-superpowers fa-2x">Something to say</i>
                    </div>
                </div>
                <div class="layui-row">
                    <div class="layui-col-md10" style="position: relative; left: 100px;">
                        <p class="h4">心之所向 素履以往 生如逆旅 一苇以航</p>
                    </div>
                </div>
            </div>
            <div class="layui-container">
                <div class="pull-right" style="position: absolute;left: 650px;top: 10px;">
                    <img src="<?php echo Url::to('@web/resources/images/gui.jpg')?>" alt="" width="400" class="img-thumbnail">
                </div>
                <br>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <i class="fa fa-user fa-2x">姓名</i>
                    </div>
                </div>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <p class="h4">解亚兰</p>
                    </div>
                </div>
                <br>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <i class="fa fa-info-circle fa-2x">学号</i>
                    </div>
                </div>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <p class="h4">1711431</p>
                    </div>
                </div>
                <br>
                <div class="layui-row">
                    <div class="layui-col-md3" style="position: relative; left: 100px;">
                        <i class="fa fa-superpowers fa-2x">Something to say</i>
                    </div>
                </div>
                <div class="layui-row">
                    <div class="layui-col-md10" style="position: relative; left: 100px;">
                        <p class="h4">我们跟随内心的声音，就这样朝前走着</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="layui-container">
    <div class="layui-card layui-bg-gray">
        <div class="layui-card-header">确定思路</div>
        <div class="layui-card-body">
            <div class="layui-progress layui-progress-big" lay-showPercent="yes" lay-filter="one">
                <div class="layui-progress-bar layui-bg-orange" lay-percent="60%"></div>
            </div>
        </div>
    </div>
    <div class="layui-card layui-bg-gray">
        <div class="layui-card-header">数据库编写</div>
        <div class="layui-card-body">
            <div class="layui-progress layui-progress-big" lay-showPercent="yes" lay-filter="two">
                <div class="layui-progress-bar layui-bg-red" lay-percent="45%"></div>
            </div>
        </div>
    </div>
    <div class="layui-card layui-bg-gray">
        <div class="layui-card-header">文档书写</div>
        <div class="layui-card-body">
            <div class="layui-progress layui-progress-big" lay-showPercent="yes" lay-filter="three">
                <div class="layui-progress-bar layui-bg-blue" lay-percent="30%"></div>
            </div>
        </div>
    </div>
    <div class="layui-card layui-bg-gray">
        <div class="layui-card-header">编写代码</div>
        <div class="layui-card-body">
            <div class="layui-progress layui-progress-big" lay-showPercent="yes" lay-filter="four">
                <div class="layui-progress-bar layui-bg-cyan" lay-percent="60%"></div>
            </div>
        </div>
    </div>
</div>
<?php LayuiAsset::addscript($this,'@web/resources/js/aboutus.js')?>
