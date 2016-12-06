<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\User;

class UploadController extends Controller
{
	public function actionIndex()
	{
		if(\Yii::$app->user->isGuest){
        return $this->redirect(['site/login']);
		}
    return $this->render('index');
	}
	
	public function actionCamera()
	{
	    if(\Yii::$app->user->isGuest){
	        return $this->redirect(['site/login']);
	    }
	    return $this->render('camera');
	}
}