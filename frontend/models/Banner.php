<?php

namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class Banner extends Model {
    
    public function getAllBanner($banner_id,$limit){
        $query = new \yii\db\Query();
        $query->select('*')
                ->from('banner_image');        
        $query->join('LEFT JOIN', 'banner_image_description', 'banner_image_description.banner_image_id = banner_image.banner_image_id');
        $query->where(['=', 'banner_image.banner_id', $banner_id]);
        $query->orderBy(['banner_image.sort_order' => SORT_ASC]);
        $query->limit($limit);
        $query->offset(0);
        return $query->all();
    }
}