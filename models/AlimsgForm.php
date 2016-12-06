<?php

namespace app\models;

use app\models\msg\TopClient;
use app\models\msg\AlibabaAliqinFcSmsNumSendRequest;

class AlimsgForm 
{
    public function sendmsg($code,$phoneNum,$name='weiqiang'){
        $c = new TopClient;
        $c->appkey = "23489872";
        $c->secretKey = "8f3ecf0916cec867d94ee0e432430b8f";
        $req = new AlibabaAliqinFcSmsNumSendRequest;
        $req->setExtend($name); //用户名记录是哪个用户操作
        $req->setSmsType("normal"); //这个不用改你短信的话就默认这个就好了
        $req->setSmsFreeSignName("3D云博"); //签名
        $req->setSmsParam("{code:'$code'}"); //短信内容变量
        $req->setRecNum($phoneNum); //手机号码
        $req->setSmsTemplateCode("SMS_22480030"); //模版ID
        $resp = $c->execute($req);
        return $resp;
    }
}