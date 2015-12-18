<?php

use common\components\MenuHelper;
$category = MenuHelper::getAllMenu();
?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div id="logo">
                    <a href="<?= Url::to('/');?>"><img src="assets/images/logo.png" title="Your Store" alt="Your Store" class="img-responsive" /></a>
                </div>
            </div>
            <div class="col-sm-8">
                <nav id="menu" class="navbar">
                    <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
                        <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
                    </div>
                    <div class="menu-wrapper" role="navigation">
                        <ul class="nav" role="menubar">
                            <?php foreach ($category['categories'] as $key => $value):?>                                
                                <li class="dropdown" role="menuitem"><a href="<?php echo $value['href']; ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $value['name']; ?></a>
                                <?php if(count($value['children']) > 0):?>
                                    <div class="mega-menu" aria-hidden="true" role="menu">
                                        <div class="nav-column">
                                            <ul>
                                                <?php foreach ($value['children'] as $key1 => $value1):?>
                                                    <li role="menuitem"><a href="<?php echo $value1['href'];?>"><?php echo $value1['name'];?></a></li>
                                                <?php endforeach;?>
                                            </ul>
                                        </div>                                        
                                    </div>
                                <?php endif;?>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-sm-2">
                <div id="cart" class="btn-group btn-block">
                    <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle">
                        <span id="cart-total">Your cart</span>
                    </button>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <p class="text-center">Your shopping cart is empty!</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>