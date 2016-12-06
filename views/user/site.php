<?php 
$this->title = '个人中心';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('usermenu',['site'=>true]); ?>
<?= $this->render('passwordmenu',['site'=>true]); ?>
