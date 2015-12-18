<nav id="topbar" class="">
    <div class="inside">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 space-margin-tb-20">
                <div class="quick-user pull-left space-left-40">
                    <div class="language-wrapper">
                        <form id="language" enctype="multipart/form-data" method="post" action="#">
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn-dropdown" type="button">
                                    <span class="hidden"><img title="English" alt="English" src="<?= \Yii::$app->request->BaseUrl?>assets/image/gb.png"></span>
                                    <span>English</span>
                                    <span class="fa fa-angle-down"></span>
                                </button>
                                <ul class="dropdown-menu dropdown">
                                    <li><a href="en" class="list-item"><img title="English" alt="English" src="<?= \Yii::$app->request->BaseUrl?>assets/image/gb.png"> English</a></li>
                                    <li><a href="ar" class="list-item"><img title="Arabic" alt="Arabic" src="<?= \Yii::$app->request->BaseUrl?>assets/image/ar.png"> Arabic</a></li>
                                </ul>
                            </div>
                            <input type="hidden" value="" name="code">
                            <input type="hidden" value="#" name="redirect">
                        </form>
                    </div>
                </div>
                <div class="quick-user pull-left">
                    <div class="currency-wrapper">
                        <form id="currency" enctype="multipart/form-data" method="post" action="#">
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn-dropdown" type="button">
                                    <span>$</span>

                                    <span class="fa fa-angle-down"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><button name="EUR" type="button" class="currency-select list-item">€ Euro</button></li>
                                    <li><button name="GBP" type="button" class="currency-select list-item">£ Pound Sterling</button></li>
                                    <li><button name="USD" type="button" class="currency-select list-item">$ US Dollar</button></li>
                                </ul>
                            </div>
                            <input type="hidden" value="" name="code">
                            <input type="hidden" value="#" name="redirect">
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center space-top-15">
                <div class="box-custom">
                    <h4>Free Shipping On Orders Over $150.00</h4>
                    <p>7 days a week</p>
                </div>                              
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="pull-right hidden-xs">
                    <div class="clearfix" id="cart">
                        <div class="dropdown-toggle" data-loading-text="Loading..." data-toggle="dropdown">      
                            <div class="cart-inner">
                                <a href="default.htm">
                                    <div class="wrap-cart">
                                        <span class="cart-total" id="cart-total">0 item(s) - $0.00</span>     
                                        <i class="icon-cart pull-left"></i>     
                                    </div>
                                </a>
                            </div>
                        </div>
                        <ul class="dropdown-menu content">
                            <li>
                                <div class="text-center space-padding-10">Your shopping cart is empty!</div>
                            </li>
                        </ul>
                    </div>                  
                </div>
                <ul class="links space-margin-tb-20 pull-right">
                    <li><a href="#" class=""><i class="fa fa-user"></i><span>My Account</span></a></li>
                    <li><a id="wishlist-total" href="#" class="wishlist"><i class="fa fa-pencil-square-o"></i><span>Wish List (0)</span></a></li>
                    <li><a href="#"><i class="fa fa-pencil"></i><span>Register</span></a></li>
                    <li><a href="#n"><i class="fa fa-lock"></i><span>Login</span></a>  </li>
                </ul>                  
            </div>

        </div>
    </div>
</nav>