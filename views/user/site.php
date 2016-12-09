<?php 
$this->title = '二次密码验证';
$this->params['breadcrumbs']['0'] = '账户设置';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('usermenu',['site'=>true]); ?>
<?= $this->render('passwordmenu',['site'=>true]); ?>
<div style="width: 50%;text-align: left;float:left;margin-left:5%;margin-top:3%;">
	<form id="form-signup" action="" method="post" >
		<input type="hidden" name="_csrf" value="WVVWaEZNM0gGPx4sNStVAygPMAAlP2AqEAIHNxEGXCZhAmRfax1.LA==">
		<div class="form-group" id="forma">
		<label class="control-label" for="inputError1">密码</label>
		<input type="password" id="oldPassword" class="form-control" name="oldPassword">
        <p class="help-block"></p>
        </div>
		<div class="form-group" id="formb">
		<label>输入手机号</label>
		<input type="text" id="telNum" class="form-control" name="telNum">
		<p class="help-block"></p>
        </div>
		<div class="form-group" id="formc">
		<label>输入验证码</label>
		<input type="text" id="identifyingCode" class="form-control" name="identifyingCode">
		<p class="help-block" id="compare"></p>
        </div>
		<input type="submit" class="btn btn-primary" value="修改" onclick="return check(this.form)">
	</form>
</div>