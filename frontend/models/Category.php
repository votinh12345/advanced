<?php

namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class Category extends Model {

    public function getAllCategory() {
        $query = new \yii\db\Query();
        $query->select('*')
                ->from('category')
                ->distinct();
        $query->join('LEFT JOIN', 'category_description', 'category_description.category_id = category.category_id');
        $query->join('LEFT JOIN', 'category_to_store', 'category_to_store.category_id = category.category_id');
        $query->where(['=', 'category.status', '1']);
        return $query->all();
    }

    public function getCategories($parent_id = 0){
        $query = new \yii\db\Query();
        $query->select('*')
                ->from('category');
        $query->join('LEFT JOIN', 'category_description', 'category_description.category_id = category.category_id AND category_description.language_id = '.(int)\Yii::$app->params['config_language_id']);
        $query->join('LEFT JOIN', 'category_to_store', 'category_to_store.category_id = category.category_id AND category_to_store.store_id = '. (int)\Yii::$app->params['store_id']);
        $query->where(['=', 'category.parent_id', $parent_id]);
        $query->orderBy(['category.sort_order' => SORT_ASC]);
        return $query->all();
    }
}
