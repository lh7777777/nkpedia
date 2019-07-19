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
                <br>
                <div class="layui-row">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user fa-lg">姓名</i>
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
            <div>条目2</div>
            <div>条目3</div>
            <div>条目4</div>
            <div>条目5</div>
        </div>
    </div>
</div>
<br>
<div class="layui-container">
    <div class="layui-card layui-bg-gray">
        <div class="layui-card-header">确定思路</div>
        <div class="layui-card-body">
            <div class="layui-progress layui-progress-big" lay-showPercent="yes" lay-filter="one">
                <div class="layui-progress-bar layui-bg-orange" lay-percent="20%"></div>
            </div>
        </div>
    </div>
    <div class="layui-card layui-bg-gray">
        <div class="layui-card-header">数据库编写</div>
        <div class="layui-card-body">
            <div class="layui-progress layui-progress-big" lay-showPercent="yes" lay-filter="two">
                <div class="layui-progress-bar layui-bg-red" lay-percent="20%"></div>
            </div>
        </div>
    </div>
    <div class="layui-card layui-bg-gray">
        <div class="layui-card-header">文档书写</div>
        <div class="layui-card-body">
            <div class="layui-progress layui-progress-big" lay-showPercent="yes" lay-filter="three">
                <div class="layui-progress-bar layui-bg-blue" lay-percent="20%"></div>
            </div>
        </div>
    </div>
    <div class="layui-card layui-bg-gray">
        <div class="layui-card-header">编写代码</div>
        <div class="layui-card-body">
            <div class="layui-progress layui-progress-big" lay-showPercent="yes" lay-filter="four">
                <div class="layui-progress-bar layui-bg-cyan" lay-percent="20%"></div>
            </div>
        </div>
    </div>
</div>
<?php LayuiAsset::addscript($this,'@web/resources/js/aboutus.js')?>
