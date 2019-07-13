<?php

namespace frontend\assets;

use yii\web\AssetBundle;

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
        'resources/css/background.css'
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
