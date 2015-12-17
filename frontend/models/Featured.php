<?php

namespace frontend\models;

use common\models\User;
use frontend\models\Product;
use yii\base\Model;
use Yii;

class Featured extends Model {

    public function getListProductFeature($setting) {
        $data['products'] = array();

        if (!$setting['limit']) {
            $setting['limit'] = 4;
        }

        if (!empty($setting['product'])) {
            $products = array_slice($setting['product'], 0, (int) $setting['limit']);            
            foreach ($products as $product_id) {
                $product = new Product();
                $product_info = $product->getProduct($product_id);
                $data['products'][] = array(
						'product_id'  => $product_info['product_id'],
						'thumb'       => 'assets/image/'.$product_info['image'],
						'name'        => $product_info['name'],
						'description' => substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, (int)\Yii::$app->params['config_product_description_length']) . '..',
						'price'       => $product_info['price'],
						'special'     => $product_info['special'],
//						'tax'         => $product_info['tax'],
						'rating'      => $product_info['rating'],
						'href'        => 'product/product/'. 'product_id=' . $product_info['product_id']
					);
            }
        }
        
        return $data;
    }

}
