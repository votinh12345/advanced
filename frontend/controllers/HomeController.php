<?php

namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\Banner;
use frontend\models\Module;
use frontend\models\Featured;
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
        return $this->render('index',[
            'dataBanner' => $dataBanner,
            'dataTopBrand' => $dataTopBrand,
            'listFeature' => $listFeature
        ]);
    }
}
