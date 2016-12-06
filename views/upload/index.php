<?php
use app\assets\ModelingAsset;
use app\models\Collection;

ModelingAsset::register($this);
$this->title = '我的藏品';
$this->params['breadcrumbs'][] = $this->title;
$username = \Yii::$app->user->identity->username;
$sql = "select * from collection where username='$username'";
$result = Collection::findBySql($sql)->all();
?>
<div class="panel panel-default" style="width: 25%;text-align: left; float:left;">
	<div class="panel-heading">
	   <h2 class="panel-title"><i class="fa fa-user fa-fw"></i><span class="glyphicon glyphicon-file"></span>文件中心</h2>
	</div>
	<div id="w2" class="list-group">
		<a class="list-group-item" href="/upload/upload"><i class="fa fa-cog fa-fw"></i><span class="glyphicon glyphicon-send"></span> 上传3D模型</a>
		<a class="list-group-item" href="/upload/comment"><i class="fa fa-bell fa-fw"></i><span class="glyphicon glyphicon-list-alt"></span> 高精度建模与备案</a>
		<a class="list-group-item" href="/upload/camera"><i class="fa fa-envelope fa-fw"></i><span class="glyphicon glyphicon-camera"></span> 相机模型</a>
	</div>        
</div>
<div style="width:70%; float:right; margin-left:5%;">
    <section class="grid3d vertical" id="grid3d">
    	<div class="grid-wrap">
    		<div class="grid">
    			<?php 
        			foreach ($result as $key => $value){
        			    $thumbnail = $value["thumbnail"];
        			    echo "<figure><img src='$thumbnail' alt='img01'/></figure>";
        			}
    			?>
    		</div>
    	</div><!-- /grid-wrap -->
    	<div class="content">
    		<?php 
    			foreach ($result as $key => $value){
    			    echo "<div><div class='dummy-img'><img src={$value['image']} alt='img01'/></div>";
    			    echo "<p class='dummy-text' style='color:#bb9b68;'>{$value['name']}</p>";
    			    echo "<p class='dummy-text'>分类：{$value['class']}</p>";
    			    echo "<p class='dummy-text'>兴趣：{$value['interst']}</p>";
    			    echo "</div>";
    			}
    		?>
    		<span class="loading"></span>
    		<span class="icon close-content"></span>
    	</div>
    </section>
</div>
<script>
	window.onload=function(){new grid3D( document.getElementById( 'grid3d' ) );}
</script>