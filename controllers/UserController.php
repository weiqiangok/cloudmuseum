<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\User;
use app\models\AlimsgForm;
use app\models\Private_info;
use Redis;

class UserController extends Controller
{
    public function actionIndex()
    {
        if(\Yii::$app->user->isGuest){
            return $this->redirect(['site/login']);
        }
        if($_POST!=null){
            $username = \Yii::$app->user->identity->username;
            $user = User::findByUsername($username);
            $user->realname = $_POST['realname'];
            $user->email = $_POST['email'];
            $user->idcard = $_POST['idcard'];
            $user->organization = $_POST['organization'];
            if($user->save()){
                \Yii::$app->session->setFlash ( 'success', '恭喜你，信息更新成功！' );
            }
        }
        $username = \Yii::$app->user->identity->username;
        $user = User::findByUsername($username);
        $realname = $user->realname;
        $email = $user->email;
        $phoneNum = $user->phoneNum;
        $idcard = $user->idcard;
        $organization = $user->organization;
        return $this->render('index', [
            'username' => $username,
            'realname'=>$realname,
            'email'=>$email,
            'phoneNum'=>$phoneNum,
            'idcard'=>$idcard,
            'organization'=>$organization,
        ]);
    }
    public function actionSite()
	{
		if(\Yii::$app->user->isGuest){
			return $this->redirect(['site/login']);
		}
		$username = \Yii::$app->user->identity->username;
		$user = User::findByUsername($username);
		if($_POST!=null){
		    $identifyingCode = $_POST['identifyingCode'];
		    $phoneNum = $_POST['telNum'];
		    $redis = new Redis();
		    $redis->connect('127.0.0.1', 6379);
		    $code = $redis->get($phoneNum);
            if($code !==false&$code == $identifyingCode){
                $user ->phoneNum = $phoneNum;
                if($user->save()){
                    \Yii::$app->session->setFlash ( 'success', '恭喜你，手机号绑定成功' );
                }
            }else{
                \Yii::$app->session->setFlash ( 'error', '验证码输入有误，请重新输入！' );
                return $this->render('site',['phoneNum'=>$phoneNum]);
            }
		}
		$phoneNum = $user ->phoneNum;
		return $this->render('site',['phoneNum'=>$phoneNum]);
	}
	public function actionPassword()
	{
		if(\Yii::$app->user->isGuest){
			return $this->redirect(['site/login']);
		}
		if($_POST!=null){
		   $username = \Yii::$app->user->identity->username;
		   $user = User::findByUsername($username);
		   $oldPassword = $_POST['oldPassword'];
		   $hash = $user->password_hash;
		   if(\Yii::$app->security->validatePassword($oldPassword, $hash)){
		       $user->password=$_POST['newPassword'];
		       if($user->save()){
		          \Yii::$app->session->setFlash ( 'success', '修改成功' );
		       }
		   }else{
		       \Yii::$app->session->setFlash ( 'error', '原密码输入错误' );
		   }
		}
		return $this->render('password');
	}
	public function actionSendmail()
	{
	    $str = null;
	    $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
	    $max = strlen($strPol)-1;
	    for($i=0;$i<$max;$i++){
	        $str.=$strPol[rand(0,$max)];//rand($min,$max)生成介于min和max两个数之间的一个随机整数
	    }
	    if(!empty($_POST)){
	       $email = $_POST['email'];
	       $user = User::findOne(['email' => $email]);
	       if($user!=null){
	           $redis = new Redis();
	           $redis->connect('127.0.0.1', 6379);
	           $redis->setex($str,3600*24*5,$email);
	           $mail= \Yii::$app->mailer->compose();
	           $mail->setTo($email); //要发送给那个人的邮箱
	           $mail->setSubject("密码重置"); //邮件主题
	           $mail->setTextBody('text'); //发布纯文字文本
	           $mail->setHtmlBody("<h3>点击链接重设密码</h3>  http://weiqiangok.cn/user/passwordset?token=".$str); //发送的消息内容
	           if($mail->send()){
	               \Yii::$app->session->setFlash ( 'success', '发送成功，请查收您的邮箱！' );
	           }else{
	               \Yii::$app->session->setFlash ( 'error', '发送失败，请稍后再试！' );
	           }
	           return $this->render('sendmail');
	       }
	    }
	    return $this->render('sendmail');
	}
	public function actionPasswordset()
	{
	    $redis = new Redis();
	    $redis->connect('127.0.0.1', 6379);
	    $email = $redis->get($_GET['token']);
	    $user = User::findOne(['email' => $email]);
	    if($user!==null){
	        return $this->render('passwordset',['token'=>$_GET['token']]);
	    }
	}
	public function actionSetsuccess()
	{
	    if(!empty($_POST)){
	        $newPassword = $_POST['newPassword'];
	        $token = $_POST['oldPassword'];
	        $redis = new Redis();
	        $redis->connect('127.0.0.1', 6379);
	        $email = $redis->get($token);
// 	        var_dump($email);die;
            if($email !== false){
                $user = User::findOne(['email' => $email]);
                $user -> password = $newPassword;
                if($user->save()){
                    \Yii::$app->session->setFlash ( 'success', '修改成功,请重新登录！' );
                }
//                 var_dump($user);die;
            }
	        return $this->goHome();
	    }
	}
	public function actionInfo()
	{
		if(\Yii::$app->user->isGuest){
			return $this->redirect(['site/login']);
		}
		return $this->render('info');
	}
	public function actionMsgcode()
	{
        $phoneNum = $_GET['phoneNum'];
        $code = rand(100000,999999);
	    $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
        $redis->setex($phoneNum,300,$code);
	    $name = \Yii::$app->user->identity->username;
	    try {
	        $result = AlimsgForm::sendmsg($code,$phoneNum,$name);
	    } catch (\Exception $e) {
	        return 0;
	    }
        return 1;
	}
	public function actionCloud()
	{
	    if(\Yii::$app->user->isGuest){
	        return $this->redirect(['site/login']);
	    }
	    return $this->render('cloud');
	}
	public function actionSecret()
	{
	    if(\Yii::$app->user->isGuest){
	        return $this->redirect(['site/login']);
	    }
	    $username = \Yii::$app->user->identity->username;
	    if($_POST!=null){
	        if($Private_info = Private_info::findOne(['username'=>$username])){
	        }else{
	            $Private_info =new Private_info();
	        }
	        $Private_info -> username = $username;
	        $Private_info -> see = isset($_POST['see'])?$_POST['see']:null;
	        $Private_info -> comment = isset($_POST['comment'])?$_POST['comment']:0;
	        if($Private_info -> save()){
	            \Yii::$app->session->setFlash ( 'success', '修改成功' );
	        }
	    }
	   $see = null;
	   $comment = null;
       if($Private_info = Private_info::findOne(['username'=>$username])){
           $see = $Private_info -> see;
           $comment = $Private_info -> comment;
       }
	   return $this->render('secret', [
            'see' => $see,
            'comment' => $comment
        ]);
	}
	public function actionOrder()
	{
	    if(\Yii::$app->user->isGuest){
	        return $this->redirect(['site/login']);
	    }
	    return $this->render('order');
	}
	public function actionBuy()
	{
	    if(\Yii::$app->user->isGuest){
	        return $this->redirect(['site/login']);
	    }
	    return $this->render('buy');
	}
}
