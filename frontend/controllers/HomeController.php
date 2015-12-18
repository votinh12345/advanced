<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\Url;
use common\models\LoginForm;
use frontend\models\Banner;
use frontend\models\Module;
use frontend\models\Featured;
use frontend\models\OrderProduct;
use frontend\models\Product;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Html;  

/**
 * Site controller
 */
class HomeController extends Controller {

    public function actionIndex() {
        $this->layout = 'home';
        $banner = new Banner();
        $listBanner = $banner->getAllBanner(7 , 5);        
        $dataBanner = array();
        foreach ($listBanner as $key => $value) {
            if(is_file(\Yii::$app->basePath.'\web/assets/image/'.$value['image'])){
                $dataBanner[] = array(
					'title' => $value['title'],
					'link'  => $value['link'],
					'image' => 'assets/image/'.$value['image']
				);
            }
        }        
        
        $listTop = $banner->getAllBanner(9 , 6);        
        $dataTopBrand = array();
        foreach ($listTop as $key => $value) {
            if(is_file(\Yii::$app->basePath.'\web/assets/image/'.$value['image'])){
                $dataTopBrand[] = array(
					'title' => $value['title'],
					'link'  => $value['link'],
					'image' => 'assets/image/'.$value['image']
				);
            }
        }      
        //get list product feature
        $module = new Module();
        $feature = new Featured();
        $setting = $module->getModule(28);
        $listFeature = $feature->getListProductFeature($setting);
        //get list product bestSeller
        $listBestSeller = $this->getBestSellerProducts();
        //get list image manufacture
        $listBannerManufacture = $banner->getAllBanner(8 , 12);  
        
        return $this->render('index',[
            'dataBanner' => $dataBanner,
            'dataTopBrand' => $dataTopBrand,
            'listFeature' => $listFeature,
            'listBestSeller' => $listBestSeller,
            'listBannerManufacture' => $listBannerManufacture
        ]);
    }
    
    public function getBestSellerProducts(){
        $product_data = array();
        $order = new OrderProduct();
        $data = $order->getAllBestSellerProducts(12);
        $product = new Product();
        $count = 0;
        foreach ($data as $result) {
            $info = $product->getProduct($result['product_id']);
            $product_data[$count]['product_id']  = $result['product_id'];
            $product_data[$count]['thumb'] = 'assets/image/'.$info['image'];
            $product_data[$count]['name'] = $info['image'];
            $product_data[$count]['description'] = $info['description'];
            $product_data[$count]['price'] = $info['price'];
            $product_data[$count]['special'] = $info['special'];
            $product_data[$count]['rating'] = $info['rating'];
            $product_data[$count]['href'] = 'product/product/'. 'product_id=' . $info['product_id'];
            $count ++;
        }
        
        return $product_data;
    }
}
