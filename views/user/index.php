<?php 
$this->title = '个人信息';
$this->params['breadcrumbs']['0'] = '账户设置';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('usermenu',['site'=>true]); ?>
<?= $this->render('passwordmenu',['user'=>true]); ?>
<div style="width: 50%;text-align: left;float:left;margin-left:5%;margin-top:3%;">
    <form id="w1" class="form-horizontal" action="/user/site" method="post" role="form">
    <input type="hidden" name="_csrf" value="T3NCeVdBTFIYG3cvOTl/FDUKBkwvKnQIGSQOQS52NR8jPnE0Ai8gFw==">
    <div class="form-group field-profile-email">
    <label class="control-label col-sm-3" for="profile-email">电子邮箱</label>
    <div class="col-sm-6">
    <input type="text" id="profile-email" class="form-control" name="Profile[email]" value="" maxlength="45">
    <div class="help-block help-block-error "></div>
    </div>
    <div class="help-block col-sm-3">此邮箱将被公开</div>
    </div>
    <div class="form-group field-profile-nickname">
    <label class="control-label col-sm-3" for="profile-nickname">昵称</label>
    <div class="col-sm-6">
    <input type="text" id="profile-nickname" class="form-control" name="Profile[nickname]" maxlength="45">
    <div class="help-block help-block-error "></div>
    </div>
    
    </div>
    <div class="form-group field-profile-gender">
    <label class="control-label col-sm-3">性别</label>
    <div class="col-sm-6">
    <input type="hidden" name="Profile[gender]" value=""><div id="profile-gender"><label class="radio-inline"><input type="radio" name="Profile[gender]" value="0"> 保密</label>
    <label class="radio-inline"><input type="radio" name="Profile[gender]" value="1"> 男</label>
    <label class="radio-inline"><input type="radio" name="Profile[gender]" value="2"> 女</label></div>
    <div class="help-block help-block-error "></div>
    </div>
    
    </div>
    
    <div class="form-group field-profile-qq">
    <label class="control-label col-sm-3" for="profile-qq">QQ</label>
    <div class="col-sm-6">
    <input type="text" id="profile-qq" class="form-control" name="Profile[qq]" maxlength="45">
    <div class="help-block help-block-error "></div>
    </div>
    
    </div>
    
    
    
    
    
    <div class="form-group field-profile-signature">
    <label class="control-label col-sm-3" for="profile-signature">个性签名</label>
    <div class="col-sm-6">
    <textarea id="profile-signature" class="form-control" name="Profile[signature]" maxlength="45"></textarea>
    <div class="help-block help-block-error "></div>
    </div>
    
    </div>
    
    <div class="form-group">
        <div class="col-sm-3"></div>
        <div class="col-sm-6"><button type="submit" class="btn btn-primary">修改</button></div>
    </div>
    
    </form>
</div>