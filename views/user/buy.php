<?php
use app\assets\SecretAsset;
$this->title = '支付信息';
$this->params['breadcrumbs']['0'] = '账户设置';
$this->params['breadcrumbs'][] = $this->title;
SecretAsset::register($this);
?>
<?= $this->render('usermenu',['buy'=>true]); ?>
<div style="width: 70%; text-align: left; float: left; margin-left: 5%;">
<h3><em>功能正在开发中......</em></h3>
</div>