<?php

use frontend\assets\LayuiAsset;
use yii\helpers\Url;
/**
 * Team:没有蛀牙,NKU
 * Coding by 杨俣哲 1711396,20190715
 * This is the hot word page
 */
?>
<div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-md6 layui-col-md-offset3">
            <img src="<?php echo Url::to('@web/resources/title/1.png'); ?>" alt=""/>
        </div>
    </div>
</div>
<div class="layui-container">
    <table class="layui-table" lay-skin="line">
        <colgroup>
            <col width="150">
            <col width="200">
            <col>
        </colgroup>
        <thead>
        <tr>
            <th>热点词条</th>
            <th>点击次数</th>
            <th>词条类别</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>贤心</td>
            <td>2016-11-29</td>
            <td>人生就像是一场修行</td>
        </tr>
        <tr>
            <td>许闲心</td>
            <td>2016-11-28</td>
            <td>于千万人之中遇见你所遇见的人，于千万年之中，时间的无涯的荒野里…</td>
        </tr>
        </tbody>
    </table>
</div>
<?php LayuiAsset::addscript($this,'@web/resources/js/rank.js')?>
