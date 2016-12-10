<?php
use app\assets\PhonenumAsset;
PhonenumAsset::register($this);
$this->title = '二次密码验证';
$this->params['breadcrumbs']['0'] = '<a href="/user/index">个人中心</a>';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('usermenu',['site'=>true]); ?>
<?= $this->render('passwordmenu',['site'=>true]); ?>
<div
	style="width: 40%; text-align: left; float: left; margin-left: 5%; margin-top: 3%;">
	<form id="form-signup" action="" method="post">
		<input type="hidden" name="_csrf"
			value="WVVWaEZNM0gGPx4sNStVAygPMAAlP2AqEAIHNxEGXCZhAmRfax1.LA=="> <label>输入手机号</label>
		<div class="form-group" id="formb">
			<div style="width: 60%; float: left;">
				<input type="text" id="telNum" class="form-control" name="telNum"
					value="<?php echo isset($phoneNum)?$phoneNum:''?>">
			</div>
			<div style="width: 35%; margin-left: 5%; float: left;">
				<input id="btnSendCode" type="button" class="btn btn-info"
					value="获取验证码" onClick="sendMessage()" />
			</div>
		</div>
		<div style="clear: both;"></div>
		<p class="help-block"></p>
		<div class="form-group" id="formc">
			<label>输入验证码</label> <input type="text" id="identifyingCode"
				class="form-control" name="identifyingCode">
		</div>
		<input type="submit" class="btn btn-primary" value="确定">
	</form>
</div>
