<?php 
use app\assets\UploadAsset;
UploadAsset::register($this);
$this->title = '上传3D模型';
$this->params['breadcrumbs']['0'] = '<a href="/upload/index">文件中心</a>';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default" style="width: 25%;text-align: left; float:left;">
	<div class="panel-heading">
	   <h2 class="panel-title"><i class="fa fa-user fa-fw"></i><span class="glyphicon glyphicon-file"></span>文件中心</h2>
	</div>
	<div id="w2" class="list-group">
		<a class="list-group-item active" href="/upload/upload"><i class="fa fa-cog fa-fw"></i><span class="glyphicon glyphicon-send"></span> 上传3D模型</a>
		<a class="list-group-item" href="/upload/comment"><i class="fa fa-bell fa-fw"></i><span class="glyphicon glyphicon-list-alt"></span> 高精度建模与备案</a>
		<a class="list-group-item" href="/upload/camera"><i class="fa fa-envelope fa-fw"></i><span class="glyphicon glyphicon-camera"></span> 相机模型</a>
	</div>        
</div>
<div style="width: 50%;text-align: left;float:left;margin-left:10%;">
	<form id="" action="" enctype="multipart/form-data" method="post">
		<input type="hidden" name="_csrf" value="WVVWaEZNM0gGPx4sNStVAygPMAAlP2AqEAIHNxEGXCZhAmRfax1.LA==">
		<label>名称</label>
		<input type="text" id="signupform-username" class="form-control" name="name">
		<div class="help-block"></div>
		<label>缩略图</label>
		<input type="file" id="exampleInputFile" class="file" name="thumbnail">
		<div class="help-block"></div>
		<label>上传OBJ</label>
		<input type="file" id="exampleInputFile" class="file" name="obj">
		<div class="help-block"></div>
		<label>上传贴图</label>
		<input type="file" id="exampleInputFile" class="file" name="image">
		<div class="help-block"></div>
		<label>上传UV文件</label>
		<input type="file" id="exampleInputFile" class="file" name="uv">
		<div class="help-block"></div>
		<label>所属分类</label><br>
		<select class="form-control" name="class">
			<option>金石</option>
			<option>书画</option>
			<option>陶瓷</option>
			<option>工艺</option>
		</select>
		<div class="help-block"></div>
		<label>兴趣圈</label><br>
		<select class="form-control" name="interst">
			<option>收藏</option>
			<option>拍卖</option>
			<option>想要</option>
			<option>估价</option>
			<option>娱乐</option>
		</select>
		<div class="help-block"></div>
		<label>是否共享</label><br>
		<span class="glyphicon glyphicon-ok"></span><input type="radio" name="share" value="1" checked="checked">
		<span class="glyphicon glyphicon-remove"></span><input type="radio" name="share" value="0">
		<div class="help-block"></div>
		<button type="submit" class="btn btn-primary">上传</button>
	</form>
</div>