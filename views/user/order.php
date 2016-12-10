<?php
use app\assets\SecretAsset;
$this->title = '订单信息';
$this->params['breadcrumbs']['0'] = '账户设置';
$this->params['breadcrumbs'][] = $this->title;
SecretAsset::register($this);
?>
<?= $this->render('usermenu',['order'=>true]); ?>
<div style="width: 70%; text-align: left; float: left; margin-left: 5%;">
	<fieldset style="padding:.35em .625em .75em;margin:0 2px; background: #eef3f8; border: 2px solid #c4d3ea;">
	<legend style="padding:.5em;border:0;width:auto">云空间购买</legend>
	<div class="panel panel-default">
		<div class="panel-heading min-height-50" style="height:40px">
		<div style="float:left">日期：2016-12-10 </div>
		<div style="float:left; margin-left:50px">订单号：102345781354</div>
		</div>
        	<table class="table table-hover">
        			<tbody>
        				<tr>
        					<th>ID</th>
        					<th>商品名</th>
        					<th>单价</th>
        					<th>数量</th>
        					<th>实付款</th>
        					<th>交易状态</th>
        				</tr>
        				<tr>
        					<td>1</td>
        					<td>云盘（1G/月）</td>
        					<td>¥10</td>
        					<td>2</td>
        					<td><strong>¥14</strong></td>
        					<td style="color: green">已完成</td>
        				</tr>
        			</tbody>
        	</table>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading min-height-50" style="height:40px">
		<div style="float:left">日期：2016-12-12 </div>
		<div style="float:left; margin-left:50px">订单号：102345781389</div>
		</div>
        	<table class="table table-hover">
        			<tbody>
        				<tr>
        					<th>ID</th>
        					<th>商品名</th>
        					<th>单价</th>
        					<th>数量</th>
        					<th>实付款</th>
        					<th>交易状态</th>
        				</tr>
        				<tr>
        					<td>1</td>
        					<td>云盘（5G/月）</td>
        					<td>¥50</td>
        					<td>1</td>
        					<td><strong>¥30</strong></td>
        					<td style="color: #F5622E">待支付</td>
        				</tr>
        			</tbody>
        	</table>
	</div>
	</fieldset>
	<fieldset style="padding:.35em .625em .75em;margin:0 2px; background: #eef3f8; border: 2px solid #c4d3ea;">
	<legend style="padding:.5em;border:0;width:auto">藏品购买</legend>
	<div class="panel panel-default">
		<div class="panel-heading min-height-50" style="height:40px">
		<div style="float:left">日期：2016-12-12 </div>
		<div style="float:left; margin-left:50px">订单号：102345781389</div>
		</div>
        	<table class="table table-hover">
        			<tbody>
        				<tr>
        					<th>ID</th>
        					<th>商品名</th>
        					<th>单价</th>
        					<th>数量</th>
        					<th>实付款</th>
        					<th>交易状态</th>
        				</tr>
        				<tr>
        					<td>1</td>
        					<td>玄龙焕墨</td>
        					<td>¥88888</td>
        					<td>1</td>
        					<td><strong>¥80000</strong></td>
        					<td style="color: #F5622E">待支付</td>
        				</tr>
        			</tbody>
        	</table>
	</div>
	</fieldset>
</div>