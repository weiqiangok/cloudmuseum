<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<img src="/images/login_1.png"; height=26px; width=110px;>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $items=[];
    if(Yii::$app->user->isGuest){
    	$items = [
    		['label' => '<span class="glyphicon glyphicon-comment"></span> 关于', 'url' => ['/site/about']],
    		['label' => '<span class="glyphicon glyphicon-pencil"></span> 注册', 'url' => ['/site/signup']],
    		['label' => '<span class="glyphicon glyphicon-log-in"></span> 登录', 'url' => ['/site/login']]
    	];
    }else{
    	$items = [
            ['label' => '<span class="glyphicon glyphicon-comment"></span> 关于', 'url' => ['/site/about']],
            ['label' => '<span class="glyphicon glyphicon-send"></span> 上传', 'url' => ['/upload/index']],
    		['label' => "<span class='glyphicon glyphicon-user'></span> 个人信息", 'url' => ['/user/site']],
            Yii::$app->user->isGuest ? (
                ['label' => '登录', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    '<span class="glyphicon glyphicon-log-out"></span> (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
		'encodeLabels' => false,
        'items' => $items,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div style="text-align:center">
    <strong>
        <p>CopyRight@ 2016 Sanlin Image All Rights Reserved. 三临 版权所有 粤网文[2016]0345-021号 <?= date('Y') ?></p>
    </strong>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
