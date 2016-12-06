<?php
use app\assets\CommentAsset;
CommentAsset::register($this);
$this->title = ' 高精度建模与备案';
$this->params['breadcrumbs']['0'] = '<a href="/upload/index">文件中心</a>';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default" style="width: 25%;text-align: left; float:left;">
	<div class="panel-heading">
	   <h2 class="panel-title"><i class="fa fa-user fa-fw"></i><span class="glyphicon glyphicon-file"></span>文件中心</h2>
	</div>
	<div id="w2" class="list-group">
		<a class="list-group-item" href="/upload/upload"><i class="fa fa-cog fa-fw"></i><span class="glyphicon glyphicon-send"></span> 上传3D模型</a>
		<a class="list-group-item active" href="/upload/comment"><i class="fa fa-bell fa-fw"></i><span class="glyphicon glyphicon-list-alt"></span> 高精度建模与备案</a>
		<a class="list-group-item" href="/upload/camera"><i class="fa fa-envelope fa-fw"></i><span class="glyphicon glyphicon-camera"></span> 相机模型</a>
	</div>        
</div>
<div style="width:65%; float:left; margin-left:10%; margin-top:-15px;">
    <h3>请选择您的藏品</h3>
    <div class="help-block"></div>
    <div style="width:60%; float:left;">
        <select class="form-control" id="select">
          <?php foreach ($names as $value){
              echo "<option>{$value}</option>";
          }?>
    	</select>
    </div>
    <div style="width:20%; float:right;">
    	<button type="submit" class="btn btn-success" id="search">search</button>
	</div>
	<div style="clear:both;"></div>
	<div class="help-block"></div>
	<div  id="comment" style="width:70%; float:left; display:none">
		<form role="form" action="" method="post">
		<input type="hidden" name="_csrf" value="WVVWaEZNM0gGPx4sNStVAygPMAAlP2AqEAIHNxEGXCZhAmRfax1.LA==">
		<input type="hidden" id="name" name="name" >
          <div class="input-group">
      			<div class="input-group-addon">姓名</div>
      			<input class="form-control" id="payname" name="payname">
		  </div>
		  <div class="help-block"></div>
		  
          <div class="form-inline">
          	<div class="input-group">
      			<div class="input-group-addon">邮箱</div>
      			<input class="form-control" id="email" name="email">
			</div>
         	<div class="input-group">
      			<div class="input-group-addon">手机号</div>
      			<input class="form-control" id="phoneNum" name="phoneNum">
			</div>
          </div>
          <div class="help-block"></div>
          
          <div class="input-group">
      			<div class="input-group-addon">估价</div>
      			<input class="form-control" id="price" name="price">
			</div>
          <div class="help-block"></div>
          
          <div class="input-group">
      			<div class="input-group-addon">高(cm)</div>
      			<input class="form-control" id="height" name="height">
      			<div class="input-group-addon">长(cm)</div>
      			<input class="form-control" id="length" name="length">
      			<div class="input-group-addon">宽(cm)</div>
      			<input class="form-control" id="wide" name="wide">
		  </div>
          <div class="help-block"></div>
          
          <div class="form-inline">
          	<div class="input-group">
      			<div class="input-group-addon">年代</div>
      			<input class="form-control" id="years" name="years">
			</div>
         	<div class="input-group">
      			<div class="input-group-addon">材质</div>
      			<input class="form-control" id="material" name="material">
			</div>
          </div>
          <div class="help-block"></div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
    	</form>
	</div>
</div>
