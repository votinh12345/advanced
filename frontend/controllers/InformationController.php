<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\Url;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Html;

/**
 * Site controller
 */
class InformationController extends Controller {

    public function actionAbout() {
        $this->layout = 'home';

        return $this->render('about', [
        ]);
    }

    public function actionDelivery() {
        $this->layout = 'home';

        return $this->render('delivery', [
        ]);
    }
    
    public function actionPolicy(){
        $this->layout = 'home';

        return $this->render('policy', [
        ]);
    }
    
    public function actionTerm(){
        $this->layout = 'home';

        return $this->render('term', [
        ]);
    }

}
