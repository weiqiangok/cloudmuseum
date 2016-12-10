var InterValObj; //timer变量，控制时间
var count = 30; //间隔函数，1秒执行
var curCount;//当前剩余秒数
var code = ""; //验证码
var codeLength = 6;//验证码长度

function sendMessage() {
curCount = count;
var dealType; //验证方式
if ($("#phone").attr("checked") == true) {
	dealType = "phone";
}
else {
	dealType = "email";
}
//产生验证码
for (var i = 0; i < codeLength; i++) {
	code += parseInt(Math.random() * 9).toString();
}
//设置button效果，开始计时
	
//向后台发送处理数据
	var phoneNum = $("#telNum").val();
	if((/^1[34578]\d{9}$/.test(phoneNum))){
		$.ajax({
			type: "GET", //用POST方式传输
			url: '/user/msgcode?phoneNum='+phoneNum, //目标地址
			error: function (XMLHttpRequest, textStatus, errorThrown) { },
			success: function (result){
				if(result == 1){
					var msg = "发送成功，请查看您的手机！";
				}else if(result == 0){
					var msg = "发送失败，请稍后再试！";
				}
				alertSelf(result,msg);
				$("#btnSendCode").attr("disabled", "true");
				$("#btnSendCode").val( + curCount + "秒再获取");
				InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
			}
		});
	}else{
		alertSelf(0,'手机号码输入有误，请重新输入！');
	}
}
//timer处理函数
function SetRemainTime() {
	if (curCount == 0) {                
		window.clearInterval(InterValObj);//停止计时器
		$("#btnSendCode").removeAttr("disabled");//启用按钮
		$("#btnSendCode").val("重新发送验证码");
		code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效    
	}
	else {
		curCount--;
		$("#btnSendCode").val( + curCount + "秒再获取");
	}
}
function alertSelf(code,msg){
	text1 = '<div id="msg-alert" class=""></div>';
	$(".breadcrumb").after(text1);
	text2 = '<button id="alert-close" type="button" class="close" data-dismiss="alert" aria-hidden="false">×</button>';
	if(code==1){
		$("#msg-alert").addClass("alert-success alert fade in");
	} else if(code==0){
		$("#msg-alert").addClass("alert-danger alert fade in");
	}
	text3 = '<label id="alert-msg">'+msg+'</label>';
	$("#msg-alert").addClass("alert-close");
	$("#msg-alert").append(text2);
	$("#msg-alert").append(text3);
}