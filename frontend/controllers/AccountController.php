<?php

namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\Banner;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\BaseUrl;
use yii\helpers\Html;
/**
 * Site controller
 */
class AccountController extends Controller {
    
    public function actionRegister(){
        $this->layout = 'home';
        return $this->render('register');
    }
}
