<?php
use  yii\helpers\Html;
?>
<div class="panel panel-default" style="width: 25%;text-align: left; float:left;">
	<div class="panel-heading">
	   <h2 class="panel-title"><i class="fa fa-user fa-fw"></i><span class="glyphicon glyphicon-user"></span>用户中心</h2>
	</div>
	<div id="w2" class="list-group">
	    <?= Html::a('<span class="glyphicon glyphicon-lock"></span> 账户设置', ['/user/index',], ['class' => isset($site)?'list-group-item active':'list-group-item']);?>
		<?= Html::a('<span class="glyphicon glyphicon-shopping-cart"></span> 订单信息', ['/user/order',], ['class' => isset($order)?'list-group-item active':'list-group-item']);?>
		<?= Html::a('<span class="glyphicon glyphicon-cloud"></span> 云空间管理', ['/user/cloud',], ['class' => isset($cloud)?'list-group-item active':'list-group-item']);?>
		<?= Html::a('<span class="glyphicon glyphicon-eye-close"></span> 隐私管理', ['/user/secret',], ['class' => isset($secret)?'list-group-item active':'list-group-item']);?>
		<?= Html::a('<span class="glyphicon glyphicon-ok-sign"></span> 支付信息', ['/user/buy',], ['class' => isset($buy)?'list-group-item active':'list-group-item']);?>
	</div>        
</div>