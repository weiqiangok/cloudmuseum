<?php
$this->title = '密码重置请求';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-request-password-reset">
	<h3>密码重置请求</h3>
	<p>请填写您的电子邮件，一个重置密码的链接将被发送到您提供的邮箱。</p>
	<div class="row">
		<div class="col-lg-5">
			<form id="request-password-reset-form"
				action="" method="post">
				<input type="hidden" name="_csrf"
					value="a3FhZC14aUchECYRVQghIA1CCAB3HwECADALM1cuDj44FAYQQBYRDA==">
				<div
					class="form-group required">
					<label class="control-label"">电子邮箱</label>
					<input type="text" id="email"
						class="form-control" name="email">
					<div class="help-block"></div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">发送</button>
				</div>
			</form>
		</div>
	</div>
</div>