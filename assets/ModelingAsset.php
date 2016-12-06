<?php

namespace app\assets;

use yii\web\AssetBundle;

class ModelingAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/modeling/component.css',
        'css/modeling/demo.css',
        'css/modeling/normalize.css'
    ];
    public $js = [
        'js/modeling/modernizr.custom.js',
        'js/modeling/classie.js',
        'js/modeling/grid3d.js',
        'js/modeling/helper.js'
    ];
    public $depends = [
        'app\assets\AppAsset',
    ];
}
