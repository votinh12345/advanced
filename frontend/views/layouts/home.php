<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Your Store</title>        
        <meta name="description" content="My Store" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto">
        <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>  
    </head>
    <?php $this->beginBody() ?>
    
    <body class="main-menu-fixed  common-home page-common-home layout-fullwidth stickymenu">
        
        <?php echo \Yii::$app->view->renderFile('@app/views/element/left.php');?>
        <div id="wrapper" class="row-offcanvas row-offcanvas-left sidemenu-right">
            <div id="page" class="page-content-wrapper">
                <?php echo \Yii::$app->view->renderFile('@app/views/element/top.php');?>
                
                <?= $content ?>
                
                <footer id="footer">
                    <?php echo \Yii::$app->view->renderFile('@app/views/element/footer.php');?>
                </footer>
                
                <?php echo \Yii::$app->view->renderFile('@app/views/element/powered.php');?>
                
                <div class="bo-social-icons" id="top" style="display: block;">
                    <a class="bo-social-gray scrollup" href="#"><i class="fa fa-angle-up"></i></a>
                </div>
                
                <?php echo \Yii::$app->view->renderFile('@app/views/element/outsite.php');?>
            </div>
            
            <div class="sidebar-offcanvas  visible-xs visible-sm">
                <div class="offcanvas-inner  panel-offcanvas">
                    <div class="offcanvas-heading">
                        <button data-toggle="offcanvas" class="btn btn btn-primary" type="button"> <span class="fa fa-times"></span></button>
                    </div>
                    <div class="offcanvas-body">
                          <div id="offcanvasmenu"></div> 
                    </div>
                    <div class="offcanvas-footer panel-footer">
                        <div class="input-group" id="offcanvas-search">
                          <input type="text" class="form-control" placeholder="Search" value="" name="search">
                          <span class="input-group-btn">
                            <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                          </span>
                        </div>
                    </div>
                 </div> 
           </div>
            
            
        </div>
        
    </body>
    <?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>