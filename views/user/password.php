<?php
use app\assets\UserAsset;
$this->title = '修改密码';
UserAsset::register($this);
$this->params['breadcrumbs']['sdsdf'] = '<a href="/user/site">安全设置</a>';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('usermenu',['site'=>true]); ?>
<?= $this->render('passwordmenu',['password'=>true]); ?>
<div style="width: 50%;text-align: left;float:left;margin-left:5%;margin-top:3%;">
	<form id="form-signup" action="" method="post" >
		<input type="hidden" name="_csrf" value="WVVWaEZNM0gGPx4sNStVAygPMAAlP2AqEAIHNxEGXCZhAmRfax1.LA==">
		<div class="form-group" id="forma">
		<label class="control-label" for="inputError1">原密码</label>
		<input type="password" id="oldPassword" class="form-control" name="oldPassword">
        <p class="help-block"></p>
        </div>
		<div class="form-group" id="formb">
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