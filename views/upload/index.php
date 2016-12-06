<?php 
use app\assets\UploadAsset;
UploadAsset::register($this);
$this->title = '上传';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default" style="width: 25%;text-align: left; float:left;">
	<div class="panel-heading">
	   <h2 class="panel-title"><i class="fa fa-user fa-fw"></i><span class="glyphicon glyphicon-send"></span>上传中心</h2>
	</div>
	<div id="w2" class="list-group">
		<a class="list-group-item active" href="/upload/index"><i class="fa fa-cog fa-fw"></i><span class="glyphicon glyphicon-arrow-up"></span> 上传3D模型</a>
		<a class="list-group-item" href="/upload/modeling"><i class="fa fa-bell fa-fw"></i><span class="glyphicon glyphicon-list-alt"></span> 高精度建模与备案</a>
		<a class="list-group-item" href="/upload/camera"><i class="fa fa-envelope fa-fw"></i><span class="glyphicon glyphicon-camera"></span> 相机模型</a>
	</div>        
</div>
<div style="width: 50%;text-align: left;float:left;margin-left:10%;">
	<form id="form-signup" action="/signup" method="post">
		<input type="hidden" name="_csrf" value="WVVWaEZNM0gGPx4sNStVAygPMAAlP2AqEAIHNxEGXCZhAmRfax1.LA==">
		<label>名称</label>
		<input type="text" id="signupform-username" class="form-control" name="SignupForm[username]">
		<div class="help-block"></div>
		<label>缩略图</label>
		<input type="file" id="exampleInputFile" class="file">
		<div class="help-block"></div>
		<label>上传OBJ</label>
		<input type="file" id="exampleInputFile" class="file">
		<div class="help-block"></div>
		<label>上传贴图</label>
		<input type="file" id="exampleInputFile" class="file">
		<div class="help-block"></div>
		<label>上传UV文件</label>
		<input type="file" id="exampleInputFile" class="file">
		<div class="help-block"></div>
		<label>所属分类</label><br>
		金石<input type="radio" name="class" value="N" checked="checked">
		书画<input type="radio" name="class" value="N">
		陶瓷<input type="radio" name="class" value="N">
		工艺<input type="radio" name="class" value="N">
		<div class="help-block"></div>
		<label>兴趣圈</label><br>
		收藏<input type="radio" name="xq" value="N" checked="checked">
		拍卖<input type="radio" name="xq" value="N">
		想要<input type="radio" name="xq" value="N">
		估价<input type="radio" name="xq" value="N">
		娱乐<input type="radio" name="xq" value="N">
		<div class="help-block"></div>
		<label>是否共享</label><br>
		是<input type="radio" name="Sex" value="Y" checked="checked">
		否<input type="radio" name="Sex" value="N">
		<div class="help-block"></div>
		<button type="submit" class="btn btn-primary" name="signup-button">上传</button>
	</form>
</div>