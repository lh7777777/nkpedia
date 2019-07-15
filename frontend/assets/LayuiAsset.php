<?php

namespace frontend\assets;

use yii\web\AssetBundle;
/**
 * Team:没有蛀牙,NKU
 * Coding by 杨俣哲 1711396,20190713
 * This is ui Asset
 */
/**
 * Main backend application asset bundle.
 */
class LayuiAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'layui/css/layui.css',
        'css/my.css',
        'resources/css/background.css',
        'font-awesome/css/font-awesome.css'
    ];
    public $js = [
        'layui/layui.js',
    ];
    public $depends = [
    ];
    //定义按需加载JS方法，注意加载顺序在最后
    public static function addScript($view, $jsfile) {
        $view->registerJsFile($jsfile, [AppAsset::className(), 'depends' => 'frontend\assets\LayuiAsset']);
    }

    //定义按需加载css方法，注意加载顺序在最后
    public static function addCss($view, $cssfile) {
        $view->registerCssFile($cssfile, [AppAsset::className(), 'depends' => 'frontend\assets\LayuiAsset']);
    }
}
