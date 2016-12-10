<?php
use app\assets\UserAsset;
$this->title = '重置密码';
UserAsset::register($this);
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="width: 40%;text-align: left;">
	<form id="form-signup" action="/user/setsuccess" method="post" >
		<input type="hidden" name="_csrf" value="WVVWaEZNM0gGPx4sNStVAygPMAAlP2AqEAIHNxEGXCZhAmRfax1.LA==">
		<div class="form-group" id="formb">
		<input type="hidden" id="oldPassword" class="form-control" name="oldPassword" value="<?php echo $token?>">
		<h3>请输入您的新密码：</h3>
		<label>新密码</label>
		<input type="password" id="newPassword1" class="form-control" name="newPassword">
		<p class="help-block"></p>
        </div>
		<div class="form-group" id="formc">
		<label>重复新密码</label>
		<input type="password" id="newPassword2" class="form-control" name="newPassword">
		<p class="help-block" id="compare"></p>
        </div>
		<input type="submit" class="btn btn-primary" value="修改" onclick="return check(this.form)">
	</form>
</div>