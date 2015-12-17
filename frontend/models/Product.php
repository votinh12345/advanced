<?php

namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

class Product extends Model {

    public function getProduct($product_id) {
        $query = new \yii\db\Query();
        $query->select(['*','product_description.name AS name',
            'product.image', 'manufacturer.name AS manufacturer',
            '(SELECT price FROM product_discount pd2 WHERE pd2.product_id = product.product_id AND pd2.customer_group_id = "'.(int)\Yii::$app->params['config_customer_group_id'].'" AND pd2.quantity = "1" AND ((pd2.date_start = "0000-00-00" OR pd2.date_start < NOW()) AND (pd2.date_end = "0000-00-00" OR pd2.date_end > NOW())) ORDER BY pd2.priority ASC, pd2.price ASC LIMIT 1) AS discount',
            '(SELECT price FROM product_special ps WHERE ps.product_id = product.product_id AND ps.customer_group_id  = "'.(int)\Yii::$app->params['config_customer_group_id'].'" AND ((ps.date_start = "0000-00-00" OR ps.date_start < NOW()) AND (ps.date_end = "0000-00-00" OR ps.date_end > NOW())) ORDER BY ps.priority ASC, ps.price ASC LIMIT 1) AS special',
            '(SELECT points FROM product_reward pr WHERE pr.product_id = product.product_id AND pr.customer_group_id ="'.(int)\Yii::$app->params['config_customer_group_id'].'") AS reward',
            '(SELECT ss.name FROM stock_status ss WHERE ss.stock_status_id = product.stock_status_id AND ss.language_id ="'.(int)\Yii::$app->params['config_language_id'].'") AS stock_status',
            '(SELECT wcd.unit FROM weight_class_description wcd WHERE product.weight_class_id = wcd.weight_class_id AND wcd.language_id = "' . (int)\Yii::$app->params['config_language_id'] . '") AS weight_class',
            '(SELECT lcd.unit FROM length_class_description lcd WHERE product.length_class_id = lcd.length_class_id AND lcd.language_id = "' . (int)\Yii::$app->params['config_language_id'] . '") AS length_class',
            '(SELECT AVG(rating) AS total FROM review r1 WHERE r1.product_id = product.product_id AND r1.status = "1" GROUP BY r1.product_id) AS rating',
            '(SELECT COUNT(*) AS total FROM review r2 WHERE r2.product_id = product.product_id AND r2.status = "1" GROUP BY r2.product_id) AS reviews',
            'product.sort_order',
            ])
                ->from('product')
                ->join('LEFT JOIN', 'product_description' ,'product.product_id = product_description.product_id')
                ->join('LEFT JOIN', 'product_to_store', 'product.product_id = product_to_store.product_id')
                ->join('LEFT JOIN', 'manufacturer' , 'product.manufacturer_id = manufacturer.manufacturer_id');        
        $query->where(
                'product.product_id = :product_id '
                . 'AND product_description.language_id = :language_id '
                . 'AND product.status = :status '
                . 'AND product.date_available <= NOW() '
                . 'AND product_to_store.store_id = :store_id ',
                [':product_id' => (int)$product_id, ':language_id' => (int)\Yii::$app->params['config_language_id'], ':status' => 1,':store_id' => (int)\Yii::$app->params['store_id']]
            );
        return $query->one();
    }

}
