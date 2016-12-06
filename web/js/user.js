function check(form) {
	if(form.oldPassword.value==''||form.newPassword1.value==''||form.newPassword2.value==''){
		return false;
	}else if (form.newPassword1.value != form.newPassword2.value) {
		$('#formc').addClass("has-error");
		$('#compare').text("两次输入不一致!");
		form.newPassword2.focus();
		return false;
	}else return true;
}
$('.form-control').blur(function (){
	var id = this.parentNode.id;
	if(this.value==''){
		$('#'+id).addClass("has-error");
		$('#'+id).find("p").text("不能为空!");
	}else {
		$('#'+id).removeClass("has-error");
		$('#'+id).find("p").empty();
	}
})