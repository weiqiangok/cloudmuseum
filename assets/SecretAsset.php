<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SecretAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap-switch.css'
    ];
    public $js = [
        'js/bootstrap-switch.js'
    ];
    public $depends = [
        'app\assets\AppAsset',
    ];
}
