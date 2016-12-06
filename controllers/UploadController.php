<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\User;
use app\models\Collection;
use app\models\modelSearchForm;
use app\models\Collection_info;

class UploadController extends Controller
{
	public function actionUpload()
	{
		if(\Yii::$app->user->isGuest){
        return $this->redirect(['site/login']);
		}
		if(!empty($_POST)){
    		if(empty($_FILES['thumbnail']['tmp_name'])|empty($_FILES['image']['tmp_name'])){
    		    \Yii::$app->session->setFlash ( 'warning', '请选择上传文件' );
    		}else{
    		    $path = \Yii::$app->basePath;
    		    $filePath = [];
    		    foreach ($_FILES as $key => $value){
    		        move_uploaded_file($_FILES[$key]["tmp_name"],$path."/web/upload/$key/" .$_FILES[$key]["name"]);
    		        $filePath[$key] = "/upload/$key/".$_FILES[$key]["name"];
    		    }
    		    $username = \Yii::$app->user->identity->username;
    		    $collection = new Collection();
    		    $collection -> username = $username;
    		    $collection -> name = $_POST['name'];
    		    $collection -> class = $_POST['class'];
    		    $collection -> interst = $_POST['interst'];
    		    $collection -> share = $_POST['share'];
    		    $collection -> thumbnail = $filePath['thumbnail'];
    		    $collection -> obj = $filePath['obj'];
    		    $collection -> image = $filePath['image'];
    		    $collection -> uv = $filePath['uv'];
    		    if($collection -> save()){
    		        \Yii::$app->session->setFlash ( 'success', '恭喜你，上传成功' );
    		    }
    		}
		}
    return $this->render('upload');
	}
	
	public function actionCamera()
	{
	    if(\Yii::$app->user->isGuest){
	        return $this->redirect(['site/login']);
	    }
	    return $this->render('camera');
	}
	
	public function actionIndex()
	{
	    if(\Yii::$app->user->isGuest){
	        return $this->redirect(['site/login']);
	    }
	    return $this->render('index');
	}
	public function actionComment()
	{
	    if(\Yii::$app->user->isGuest){
	        return $this->redirect(['site/login']);
	    }
	    if(!empty($_POST)){
// 	        var_dump($_POST);die;
	        $username = \Yii::$app->user->identity->username;
// 	        $connect = new Collection_info();
	        if($Collection_info = Collection_info::findOne(['username' => $username,'name'=>$_POST['name']])){
	        }else{
	            $Collection_info =new Collection_info();
	        }
// 	        var_dump($Collection_info);die;
	        $Collection_info -> username = $username;
	        $Collection_info -> name = $_POST['name'];
	        $Collection_info -> payname = $_POST['payname'];
	        $Collection_info -> email = $_POST['email'];
	        $Collection_info -> phoneNum = $_POST['phoneNum'];
	        $Collection_info -> price = $_POST['price'];
	        $Collection_info -> height = $_POST['height'];
	        $Collection_info -> length = $_POST['length'];
	        $Collection_info -> wide = $_POST['wide'];
	        $Collection_info -> years = $_POST['years'];
	        $Collection_info -> material = $_POST['material'];
	        if($Collection_info -> save()){
	            \Yii::$app->session->setFlash ( 'success', '恭喜你，更新成功' );
	        }
	    }
	    $names = modelSearchForm::searchlist();
        return $this->render('comment', [
            'names' => $names
        ]);
	}
	
	public function actionSearchcontent()
	{
	    $name = $_POST['name'];
	    try {
	        $lists = modelSearchForm::searchContent($name);
	        return json_encode($lists);
	    } catch (\Exception $e) {
	        return json_encode('');
	    }      
	}
}
