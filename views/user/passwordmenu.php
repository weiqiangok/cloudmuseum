<div  style="width: 60%;float:left;margin-left:5%;">
	<ul id="w0" class="nav nav-tabs nav-main">
	   <li id='userinfo' class='<?= isset($user)?'active':'' ?>'><a href="/user/index">个人信息</a></li>
		<li id='usersafe' class='<?= isset($site)?'active':'' ?>'><a href="/user/site">二次验证设置</a></li>
		<li id='userpassword' class='<?= isset($password)?'active':'' ?>'><a href="/user/password">修改密码</a></li>
	</ul>
</div>