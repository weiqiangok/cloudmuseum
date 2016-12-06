<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\User;
use app\models\msg\AlimsgForm;

class UserController extends Controller
{
	public function actionSite()
	{
		if(\Yii::$app->user->isGuest){
			return $this->redirect(['site/login']);
		}
		return $this->render('site');
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
	public function actionInfo()
	{
		if(\Yii::$app->user->isGuest){
			return $this->redirect(['site/login']);
		}
		
		return $this->render('info');
	}
	public function actionMessage()
	{
	    $code = rand(100000,999999);
	    $phoneNum = '17091429869';
	    var_dump(AlimsgForm::sendmsg($code,$phoneNum));
	    return $this->render('message');
	}
}
