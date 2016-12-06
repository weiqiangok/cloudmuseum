<?php 
use app\assets\CameraAsset;
CameraAsset::register($this);
$this->title = '相机建模';
$this->params['breadcrumbs']['0'] = '<a href="/upload/index">文件中心</a>';
$this->params['breadcrumbs'][] = $this->title;
?>
<header id="header">
    <hgroup>
        <h1>手机建模</h1>
        <h2>请按提示角度拍照上传</h2>
    </hgroup>
</header>
<form id="" action="/upload/receive" method="post">
<label>名称</label> <input type="text" id="signupform-username"
	class="form-control" name="SignupForm[username]">
<div class="help-block"></div>
<label>所属分类</label>
<select class="form-control" name="class">
	<option>金石</option>
	<option>书画</option>
	<option>陶瓷</option>
	<option>工艺</option>
</select>
<div class="help-block"></div>
<label>兴趣圈</label>
<select class="form-control" name="name="xq"">
	<option>收藏</option>
	<option>拍卖</option>
	<option>想要</option>
	<option>估价</option>
	<option>娱乐</option>
</select>
<div class="help-block"></div>
<input type="file" id="Front" class="dropify" /><br>
<input type="file" id="Back" class="dropify" /><br>
<input type="file" id="Left" class="dropify" /><br>
<input type="file" id="Right" class="dropify" /><br>
<input type="file" id="Top" class="dropify" /><br>
<input type="file" id="Bottom" class="dropify" />
<div class="help-block"></div>
<label>是否共享</label><br> <span class="glyphicon glyphicon-ok"></span><input
	type="radio" name="Sex" value="Y" checked="checked"> <span
	class="glyphicon glyphicon-remove"></span><input type="radio"
	name="Sex" value="N">
<div class="help-block"></div>
<button type="submit" class="btn btn-primary btn-block" name="signup-button">上传</button>
</form>
<script>
            window.onload=function(){
            	
                // Basic
                // $('.dropify').dropify();
                // Translated
                for(var i=0;i<6;i++){
                	var idname = $('.dropify')[i].id;
                	$('#'+idname).dropify({
                        messages: {
                            default: idname,
                            replace: '点击重新拍摄',
                            remove:  '移除',
                            error:   'Désolé, le fichier trop volumineux'
                        }
                    });
                }
                
                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            };
        </script>