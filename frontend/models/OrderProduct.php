<?php

namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class OrderProduct extends Model {
    
    public function getAllBestSellerProducts($limit){
        $time = new \DateTime('now');
        $today = $time->format('Y-m-d');
        $query = new \yii\db\Query();
        $query->select('order_product.product_id , SUM(order_product.quantity) AS total')
                ->from('order_product');        
        $query->join('LEFT JOIN', 'order', 'order_product.order_id = order.order_id');
        $query->join('LEFT JOIN', 'product', 'order_product.product_id = product.product_id');
        $query->join('LEFT JOIN', 'product_to_store', 'product.product_id = product_to_store.product_id');
        $query->where(['>', 'order.order_status_id', 0]);
        $query->andWhere(['=', 'product.status', 1]);
        $query->andWhere(['<=', 'product.date_available', $today]);
        $query->andWhere(['=', 'product_to_store.store_id', (int)\Yii::$app->params['store_id']]);
        $query->groupBy('order_product.product_id');
        $query->orderBy(['total' => SORT_DESC]);
        $query->limit($limit);
        $query->offset(0);
        return $query->all();
    }
}