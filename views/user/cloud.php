<?php
$this->title = '云空间管理';
$this->params['breadcrumbs']['0'] = '账户设置';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('usermenu',['cloud'=>true]); ?>
<div style="width: 70%; text-align: left; float: left; margin-left: 5%;">
	<h3>云空间使用情况：</h3>
	<div class="progress">
		<div class="progress-bar progress-bar-striped active"
			role="progressbar" aria-valuenow="45" aria-valuemin="0"
			aria-valuemax="100" style="width: 45%">已用 45%（900M/2G）</div>
	</div>
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="panel-heading min-height-50">容量套餐，优惠促销中</div>
		<table class="table table-hover">
			<tbody>
				<tr>
					<th>ID</th>
					<th>容量</th>
					<th>原价</th>
					<th>现价</th>
					<th>使用时间</th>
					<th>活动日期</th>
					<th>操作</th>
				</tr>
				<tr>
					<td scope="row">1</td>
					<td>1G</td>
					<td><del>¥10</del></td>
					<td style="color: #F5622E">¥7</td>
					<td>1月</td>
					<td>2016-12-01——2017-01-31</td>
					<td><button type="button" class="btn btn-success btn-sm">立即购买</button></td>
				</tr>
				<tr>
					<td scope="row">2</td>
					<td>5G</td>
					<td><del>¥50</del></td>
					<td style="color: #F5622E">¥30</td>
					<td>1月</td>
					<td>2016-12-01——2017-01-31</td>
					<td><button type="button" class="btn btn-success btn-sm">立即购买</button></td>
				</tr>
				<tr>
					<td scope="row">3</td>
					<td>1G</td>
					<td><del>¥100</del></td>
					<td style="color: #F5622E">¥70</td>
					<td>1年</td>
					<td>2016-12-01——2017-01-31</td>
					<td><button type="button" class="btn btn-success btn-sm">立即购买</button></td>
				</tr>
				<tr>
					<td scope="row">4</td>
					<td>5G</td>
					<td><del>¥300</del></td>
					<td style="color: #F5622E">¥200</td>
					<td>1年</td>
					<td>2016-12-01——2017-01-31</td>
					<td><button type="button" class="btn btn-success btn-sm">立即购买</button></td>
				</tr>
			</tbody>
		</table>
	</div>
	<span class="glyphicon glyphicon-question-sign"
		style="margin-top: 70px;">小贴士</span>
	<div class="panel panel-default"
		style="background-color: #FDFCE7; margin-top: 10px; padding: 15px 20px;">
		<a class="item" href="" target="_blank">1.付费容量的有效期如何计算？</a><br> <br> <a
			class="item" href="" target="_blank">2.容量到期后怎么处理？</a>
	</div>
</div>