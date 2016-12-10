<?php
$this->title = '个人信息';
$this->params['breadcrumbs']['0'] = '账户设置';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('usermenu',['site'=>true]); ?>
<?= $this->render('passwordmenu',['user'=>true]); ?>
<div
	style="width: 50%; text-align: left; float: left; margin-left: 5%; margin-top: 3%;">
	<form id="w1" class="form-horizontal" action="" method="post"
		role="form">
		<input type="hidden" name="_csrf"
			value="T3NCeVdBTFIYG3cvOTl/FDUKBkwvKnQIGSQOQS52NR8jPnE0Ai8gFw==">
		<div class="form-group">
			<label class="control-label col-sm-3">用户名</label>
			<div class="col-sm-6">
				<input type="text" id="username" class="form-control"
					name="username" value="<?php echo $username?>" maxlength="45" disabled>
				<div class="help-block help-block-error "></div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3">姓名</label>
			<div class="col-sm-6">
				<input type="text" id="realname" class="form-control"
					name="realname" value="<?php echo isset($realname)?$realname:''?>" maxlength="45">
				<div class="help-block help-block-error "></div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3">电子邮箱</label>
			<div class="col-sm-6">
				<input type="text" id="email" class="form-control"
					name="email" value="<?php echo isset($email)?$email:''?>" maxlength="45">
				<div class="help-block help-block-error "></div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3">手机号</label>
			<div class="col-sm-6">
				<input type="text" id="phoneNum" class="form-control"
					name="phoneNum" value="<?php echo isset($phoneNum)?$phoneNum:''?>" maxlength="45" disabled>
				<div class="help-block help-block-error "></div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3">身份证</label>
			<div class="col-sm-6">
				<input type="text" id="idcard" class="form-control"
					name="idcard" value="<?php echo isset($idcard)?$idcard:''?>" maxlength="45">
				<div class="help-block help-block-error "></div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3">组织机构</label>
			<div class="col-sm-6">
				<input type="text" id="organization" class="form-control"
					name="organization" value="<?php echo isset($organization)?$organization:''?>" maxlength="45">
				<div class="help-block help-block-error "></div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<button type="submit" class="btn btn-primary">修改</button>
			</div>
		</div>
	</form>
</div>