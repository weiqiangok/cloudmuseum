<?php
use app\assets\SecretAsset;
$this->title = '隐私管理';
$this->params['breadcrumbs']['0'] = '账户设置';
$this->params['breadcrumbs'][] = $this->title;
SecretAsset::register($this);
?>
<?= $this->render('usermenu',['secret'=>true]); ?>
<div style="width: 70%; text-align: left; float: left; margin-left: 5%;">
	<div class="panel panel-default">
		<div class="panel-heading min-height-50">您可以在这里设置查看可评论权限：</div>
		<div class="switch" style="padding: 15px 20px;">
			<form class="form-horizontal" action="" method="post">
				<input type="hidden" name="_csrf"
					value="WVVWaEZNM0gGPx4sNStVAygPMAAlP2AqEAIHNxEGXCZhAmRfax1.LA==">
				<div class="form-group">
					<label class="col-sm-3"><li>所有人都可以看得到我</li></label>
					<div class="controls">
						<div class="switch" tabindex="0">
							<input name="see" type="radio" value="1" <?php echo ($see===true)?'checked':''?>>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3"><li>只有我的好友可以看到</li></label>
					<div class="controls">
						<div class="switch" tabindex="0">
							<input name="see" type="radio" value="0" <?php echo ($see===false)?'checked':''?>>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3"><li>只有我的好友能评论我</li></label>
					<div class="controls">
						<div class="switch" tabindex="0">
							<input name="comment" type="checkbox" value="1" <?php echo ($comment===true)?'checked':''?>>
						</div>
					</div>
				</div>
				<div class="controls">
					<button type="submit" class="btn btn-warning">
						<span class="glyphicon glyphicon-floppy-disk"></span> save
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
window.onload=function(){$('[type="radio"],[type="checkbox"]').bootstrapSwitch();}
</script>