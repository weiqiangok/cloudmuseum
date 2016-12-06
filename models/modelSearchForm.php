<?php

namespace app\models;

use app\models\Collection_info;

class modelSearchForm
{
    public function searchlist(){
        $username = \Yii::$app->user->identity->username;
        $collection = new Collection();
        $result = $collection->findAll(['username' => $username]);
        $names=[];
        foreach ($result as $key => $value){
            $names[] =  $value->name;
        }
        return $names;
    }
    public function searchContent($name){
        $collection_info = new Collection_info();
        $result = $collection_info->findone(['name' =>$name]);
        return $result->attributes;
    }
}