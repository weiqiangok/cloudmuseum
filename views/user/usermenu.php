<?php
use  yii\helpers\Html;
?>
<div class="panel panel-default" style="width: 25%;text-align: left; float:left;">
	<div class="panel-heading">
	   <h2 class="panel-title"><i class="fa fa-user fa-fw"></i><span class="glyphicon glyphicon-user"></span>个人中心</h2>
	</div>
	<div id="w2" class="list-group">
	    <?= Html::a('<span class="glyphicon glyphicon-lock"></span> 安全设置', ['/user/site',], ['class' => isset($site)?'list-group-item active':'list-group-item']);?>
		<?= Html::a('<span class="glyphicon glyphicon-list-alt"></span> 我的信息', ['/user/info',], ['class' => isset($info)?'list-group-item active':'list-group-item']);?>
		<?= Html::a('<span class="glyphicon glyphicon-shopping-cart"></span> 订单信息', ['/user/site',], ['class' => 'list-group-item']);?>
		<?= Html::a('<span class="glyphicon glyphicon-ok-sign"></span> 支付信息', ['/user/site',], ['class' => 'list-group-item']);?>
		<?= Html::a('<span class="glyphicon glyphicon-cloud"></span> 云空间管理', ['/user/site',], ['class' => 'list-group-item']);?>
		<?= Html::a('<span class="glyphicon glyphicon-eye-close"></span> 隐私管理', ['/user/site',], ['class' => 'list-group-item']);?>
	</div>        
</div>