<?php

namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;


class Module extends Model {
    
    public function getModule($module_id){
        $query = new \yii\db\Query();
        $query->select('*')
                ->from('module');        
        $query->where(['=', 'module.module_id', $module_id]);        
        $data = $query->one();
        if($data){
            return json_decode($data['setting'], true);
        } else {
            return array();;
        }
    }
}