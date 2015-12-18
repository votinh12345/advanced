<?php
use yii\helpers\Url;
?>
<div class="header-top space-padding-tb-40">
    <div class="container">
        <div class="inside text-center">
            <!-- logo -->
            <div  id="logo-theme" class="logo-store"><a href="<?= Url::to('/');?>" class="img-responsive"><span>Pavo Mode - Responsive Opencart Theme</span></a></div>
        </div>
    </div>
</div>
<!-- sys-notification -->
<div id="sys-notification">
    <div class="container">
        <div id="notification"></div>
    </div>
</div>
<!-- /sys-notification -->
<div class="main-columns container-full">
    <div class="row">
        <div class="col-md-12" id="sidebar-main">
            <div class="space-padding-0" id="content">
                <div class="homebuilder clearfix " id="pav-homebuilder2092889128"><div class="wrapp">
                        <?php if (count($dataBanner) > 0): ?>
                            <div class="pav-container  container-fluid "  >
                                <div class="pav-inner"   style="margin:0 auto 30px">
                                    <div class="row row-level-1 "  >
                                        <div class="row-inner clearfix" >
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                <div class="col-inner " >
                                                    <div class="layerslider-wrapper hidden-xs" style="max-width:1620px;">
                                                        <div class="bannercontainer banner-boxed" style="padding: 0;margin: 0;">
                                                            <div id="sliderlayer330983624" class="rev_slider boxedbanner" style="width:100%;height:640px; " >
                                                                <ul>
                                                                    <?php foreach ($dataBanner as $key => $value) : ?>
                                                                        <li data-masterspeed="300"  data-transition="random" data-slotamount="7" data-thumb="<?= $value['image'] ?>">
                                                                            <img src="<?= $value['image'] ?>"  alt="Image 0"/>
                                                                        </li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (count($dataTopBrand) > 0) : ?>
                            <div class="pav-container container ">
                                <div class="pav-inner">
                                    <div class="row row-level-1 ">
                                        <div class="row-inner clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "><div class="col-inner ">
                                                    <div data-ride="owlcarousel" class="widget-carousel panel carousel effect-carousel owl-carousel-play pavcarousel panel-v4   " id="pavcarousel4">
                                                        <div class="widget-heading panel-heading"><h4 class="panel-title">Top Brands</h4></div>
                                                        <div data-navigation="true" data-pagination="false" data-show="1" class="owl-carousel box-content owl-theme" style="opacity: 1; display: block;">
                                                            <div class="owl-wrapper-outer">
                                                                <div class="owl-wrapper" style="width: 2062px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                                                                    <div class="owl-item" style="width: 1031px;">
                                                                        <div class="item active">
                                                                            <div class="row">
                                                                                <?php for ($i = 0; $i < 3; $i++): ?>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                        <div class="item-inner effect-v5">
                                                                                            <a href="#"><img class="img-responsive" alt="logo" src="<?= $dataTopBrand[$i]['image'] ?>"></a>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php endfor; ?>
                                                                            </div>
                                                                            <?php if (count($dataTopBrand) > 3): ?>
                                                                                <div class="row">
                                                                                    <?php for ($j = 3; $j < count($dataTopBrand); $j++): ?>
                                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                            <div class="item-inner effect-v5">
                                                                                                <a href="#"><img class="img-responsive" alt="logo" src="<?= $dataTopBrand[$j]['image'] ?>"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    <?php endfor; ?>
                                                                                </div>
                                                                            <?php endif; ?>   
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="pav-container  container ">
                            <div class="pav-inner  ">
                                <div class="row row-level-1 ">
                                    <div class="row-inner clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                            <div class="col-inner ">
                                                <div class="widget-products producttabs panel effect-carousel panel-v4 ">
                                                    <div class="widget-heading panel-heading">
                                                        <h4 class="panel-title">Latest Products</h4>
                                                    </div>
                                                    <div class="tab-v1 ">
                                                        <div class="tab-heading">
                                                            <ul id="product_tabs1859047402" class="nav nav-tabs" role="tablist">
                                                                <li>
                                                                    <a aria-expanded="true" href="#tab-latest1859047402" role="tab" data-toggle="tab"><i class="fa "></i>Featured</a>
                                                                </li>
                                                                <li>
                                                                    <a aria-expanded="true" href="#tab-bestseller1859047402" role="tab" data-toggle="tab"><i class="fa "></i>Bestsellers</a>
                                                                </li>
                                                            </ul>
                                                        </div>   
                                                        <div class="tab-content panel-body">
                                                            <div data-ride="owlcarousel" id="tab-latest1859047402" class="tab-pane fade box-products owl-carousel-play tabcarousel1859047402">
                                                                <div class="owl-carousel product-grid" data-show="1" data-pagination="false" data-navigation="true">
                                                                    <?php $row = (int) ceil(count($listFeature['products']) / 4); ?>
                                                                    <?php for ($i = 0; $i < $row; $i++): ?>
                                                                        <?php if ($i == 0): ?>
                                                                            <div class="item active">
                                                                            <?php else: ?>
                                                                                <div class="item">
                                                                                <?php endif; ?>
                                                                                <div class="row products-row">
                                                                                    <?php if ($i != ($row - 1)): ?>
                                                                                        <?php for ($j = $i * 3; $j < $i * 3 + 4; $j++): ?>
                                                                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 product-col">
                                                                                                <div itemscope="" itemtype="http://schema.org/Product" class="product-block clearfix item-default">
                                                                                                    <div class="block-img text-center">
                                                                                                        <div class="image swap">
                                                                                                            <a href="<?= $listFeature['products'][$j]['href']; ?>" title="" itemprop="url" class="img">
                                                                                                                <img alt="" title="" src="<?= $listFeature['products'][$j]['thumb']; ?>" itemprop="image" class="img-responsive">
                                                                                                            </a>
                                                                                                            <!-- Swap image -->
                                                                                                            <a href="<?= $listFeature['products'][$j]['href']; ?>" class="hover-image"><img alt="" src="<?= $listFeature['products'][$j]['thumb']; ?>" class="img-responsive"></a>
                                                                                                            <!-- Swap image -->
                                                                                                            <!-- zoom image-->
                                                                                                            <div class="zoom ">
                                                                                                                <a title="White/Sport Turquoise" class="product-zoom btn btn-inverse-light radius-x" href="image/catalog/demo/product/product3.jpg">
                                                                                                                    <i class="fa fa-search-plus"></i>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                            <div class="action">
                                                                                                                <div class="cart">            
                                                                                                                    <button onclick="cart.addcart(<?= $listFeature['products'][$j]['product_id']; ?>);" type="button" class="btn btn-white icon-v2" data-loading-text="Loading...">
                                                                                                                        <span class="">Add to Cart</span>
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                                <div class="wishlist">
                                                                                                                    <button onclick="wishlist.addwishlist(<?= $listFeature['products'][$j]['product_id']; ?>);" title="Add to Wish List" type="button" class="btn btn-white icon-v2"><span class="">Add to Wish List</span></button> 
                                                                                                                </div>      

                                                                                                                <div class="compare">     
                                                                                                                    <button onclick="compare.addcompare(<?= $listFeature['products'][$j]['product_id']; ?>);" title="Add to Compare" type="button" class="btn btn-white icon-v2"><span class="">Add to Compare</span></button> 
                                                                                                                </div>  
                                                                                                                <div class="quickview">
                                                                                                                    <a title="Quick View" href="<?= $listFeature['products'][$j]['href']; ?>" class="iframe-link  btn btn-white icon-v2">
                                                                                                                        <span>Quick View</span>
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="product-meta">      
                                                                                                        <h3 itemprop="name" class="name"><a href="<?= $listFeature['products'][$j]['href']; ?>"><?= $listFeature['products'][$j]['name']; ?></a></h3>      
                                                                                                        <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="price">
                                                                                                            <span class="price-new">$250,000.00</span>
                                                                                                            <meta itemprop="price" content="250,000">
                                                                                                            <meta itemprop="priceCurrency" content="">
                                                                                                        </div>
                                                                                                        <div class="rating space-top-10">
                                                                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                                        </div>
                                                                                                        <p itemprop="description" class="description">																 Water resistant Nike+ Sport Watch features TomTom GPS for accurate speed and distance information											 Track your time, distance, pace or speed, beats per minute (BPM) heart rate (with optional HRM...</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        <?php endfor; ?>
                                                                                    <?php else : ?>
                                                                                        <?php for ($j = $i * 3; $j < count($listFeature['products']); $j++): ?>
                                                                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 product-col">
                                                                                                <div itemscope="" itemtype="http://schema.org/Product" class="product-block clearfix item-default">
                                                                                                    <div class="block-img text-center">
                                                                                                        <div class="image swap">
                                                                                                            <a href="<?= $listFeature['products'][$j]['href']; ?>" title="" itemprop="url" class="img">
                                                                                                                <img alt="" title="" src="<?= $listFeature['products'][$j]['thumb']; ?>" itemprop="image" class="img-responsive">
                                                                                                            </a>
                                                                                                            <!-- Swap image -->
                                                                                                            <a href="<?= $listFeature['products'][$j]['href']; ?>" class="hover-image"><img alt="" src="<?= $listFeature['products'][$j]['thumb']; ?>" class="img-responsive"></a>
                                                                                                            <!-- Swap image -->
                                                                                                            <!-- zoom image-->
                                                                                                            <div class="zoom ">
                                                                                                                <a title="White/Sport Turquoise" class="product-zoom btn btn-inverse-light radius-x" href="image/catalog/demo/product/product3.jpg">
                                                                                                                    <i class="fa fa-search-plus"></i>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                            <div class="action">
                                                                                                                <div class="cart">            
                                                                                                                    <button onclick="cart.addcart(<?= $listFeature['products'][$j]['product_id']; ?>);" type="button" class="btn btn-white icon-v2" data-loading-text="Loading...">
                                                                                                                        <span class="">Add to Cart</span>
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                                <div class="wishlist">
                                                                                                                    <button onclick="wishlist.addwishlist(<?= $listFeature['products'][$j]['product_id']; ?>);" title="Add to Wish List" type="button" class="btn btn-white icon-v2"><span class="">Add to Wish List</span></button> 
                                                                                                                </div>      

                                                                                                                <div class="compare">     
                                                                                                                    <button onclick="compare.addcompare(<?= $listFeature['products'][$j]['product_id']; ?>);" title="Add to Compare" type="button" class="btn btn-white icon-v2"><span class="">Add to Compare</span></button> 
                                                                                                                </div>  
                                                                                                                <div class="quickview">
                                                                                                                    <a title="Quick View" href="index.php@route=themecontrol_2Fproduct&amp;product_id=54" class="iframe-link  btn btn-white icon-v2">
                                                                                                                        <span>Quick View</span>
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        <?php endfor; ?>
                                                                                    <?php endif; ?>
                                                                                </div>
                                                                            </div>
                                                                        <?php endfor; ?>
                                                                    </div>
                                                                    <div class="carousel-controls-v1">
                                                                        <a data-slide="prev" href="#tab-latest1859047402" class="carousel-control left">
                                                                            <i class="fa fa-chevron-left"></i>
                                                                        </a>
                                                                        <a data-slide="next" href="#tab-latest1859047402" class="carousel-control right">
                                                                            <i class="fa fa-chevron-right"></i>
                                                                        </a>
                                                                    </div>

                                                                </div>
                                                                <div data-ride="owlcarousel" id="tab-bestseller1859047402" class="tab-pane fade box-products owl-carousel-play tabcarousel1859047402">
                                                                    <div class="owl-carousel product-grid" data-show="1" data-pagination="false" data-navigation="true">
                                                                        <?php $row = (int) ceil(count($listBestSeller) / 4); ?>
                                                                        <?php for ($i = 0; $i < $row; $i++): ?>
                                                                            <?php if ($i == 0): ?>
                                                                                <div class="item active">
                                                                                <?php else: ?>
                                                                                    <div class="item">
                                                                                    <?php endif; ?>
                                                                                    <div class="row products-row">
                                                                                        <?php if ($i != ($row - 1)): ?>
                                                                                            <?php for ($j = $i * 3; $j < $i * 3 + 4; $j++): ?>
                                                                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 product-col">
                                                                                                    <div itemscope="" itemtype="http://schema.org/Product" class="product-block clearfix item-default">
                                                                                                        <div class="block-img text-center">
                                                                                                            <div class="image swap">
                                                                                                                <a href="<?= $listBestSeller[$j]['href']; ?>" title="" itemprop="url" class="img">
                                                                                                                    <img alt="" title="" src="<?= $listBestSeller[$j]['thumb']; ?>" itemprop="image" class="img-responsive">
                                                                                                                </a>
                                                                                                                <!-- Swap image -->
                                                                                                                <a href="<?= $listBestSeller[$j]['href']; ?>" class="hover-image"><img alt="" src="<?= $listBestSeller[$j]['thumb']; ?>" class="img-responsive"></a>
                                                                                                                <!-- Swap image -->
                                                                                                                <!-- zoom image-->
                                                                                                                <div class="zoom ">
                                                                                                                    <a title="White/Sport Turquoise" class="product-zoom btn btn-inverse-light radius-x" href="image/catalog/demo/product/product3.jpg">
                                                                                                                        <i class="fa fa-search-plus"></i>
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                                <div class="action">
                                                                                                                    <div class="cart">            
                                                                                                                        <button onclick="cart.addcart(<?= $listBestSeller[$j]['product_id']; ?>);" type="button" class="btn btn-white icon-v2" data-loading-text="Loading...">
                                                                                                                            <span class="">Add to Cart</span>
                                                                                                                        </button>
                                                                                                                    </div>
                                                                                                                    <div class="wishlist">
                                                                                                                        <button onclick="wishlist.addwishlist(<?= $listBestSeller[$j]['product_id']; ?>);" title="Add to Wish List" type="button" class="btn btn-white icon-v2"><span class="">Add to Wish List</span></button> 
                                                                                                                    </div>      

                                                                                                                    <div class="compare">     
                                                                                                                        <button onclick="compare.addcompare(<?= $listBestSeller[$j]['product_id']; ?>);" title="Add to Compare" type="button" class="btn btn-white icon-v2"><span class="">Add to Compare</span></button> 
                                                                                                                    </div>  
                                                                                                                    <div class="quickview">
                                                                                                                        <a title="Quick View" href="<?= $listBestSeller[$j]['href']; ?>" class="iframe-link  btn btn-white icon-v2">
                                                                                                                            <span>Quick View</span>
                                                                                                                        </a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="product-meta">      
                                                                                                            <h3 itemprop="name" class="name"><a href="<?= $listBestSeller[$j]['href']; ?>"><?= $listBestSeller[$j]['name']; ?></a></h3>      
                                                                                                            <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="price">
                                                                                                                <span class="price-new">$250,000.00</span>
                                                                                                                <meta itemprop="price" content="250,000">
                                                                                                                <meta itemprop="priceCurrency" content="">
                                                                                                            </div>
                                                                                                            <div class="rating space-top-10">
                                                                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                                            </div>
                                                                                                            <p itemprop="description" class="description">																 Water resistant Nike+ Sport Watch features TomTom GPS for accurate speed and distance information											 Track your time, distance, pace or speed, beats per minute (BPM) heart rate (with optional HRM...</p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            <?php endfor; ?>
                                                                                        <?php else : ?>
                                                                                            <?php for ($j = $i * 3; $j < count($listBestSeller); $j++): ?>
                                                                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 product-col">
                                                                                                    <div itemscope="" itemtype="http://schema.org/Product" class="product-block clearfix item-default">
                                                                                                        <div class="block-img text-center">
                                                                                                            <div class="image swap">
                                                                                                                <a href="<?= $listBestSeller[$j]['href']; ?>" title="" itemprop="url" class="img">
                                                                                                                    <img alt="" title="" src="<?= $listBestSeller[$j]['thumb']; ?>" itemprop="image" class="img-responsive">
                                                                                                                </a>
                                                                                                                <!-- Swap image -->
                                                                                                                <a href="<?= $listBestSeller[$j]['href']; ?>" class="hover-image"><img alt="" src="<?= $listBestSeller[$j]['thumb']; ?>" class="img-responsive"></a>
                                                                                                                <!-- Swap image -->
                                                                                                                <!-- zoom image-->
                                                                                                                <div class="zoom ">
                                                                                                                    <a title="White/Sport Turquoise" class="product-zoom btn btn-inverse-light radius-x" href="image/catalog/demo/product/product3.jpg">
                                                                                                                        <i class="fa fa-search-plus"></i>
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                                <div class="action">
                                                                                                                    <div class="cart">            
                                                                                                                        <button onclick="cart.addcart(<?= $listBestSeller[$j]['product_id']; ?>);" type="button" class="btn btn-white icon-v2" data-loading-text="Loading...">
                                                                                                                            <span class="">Add to Cart</span>
                                                                                                                        </button>
                                                                                                                    </div>
                                                                                                                    <div class="wishlist">
                                                                                                                        <button onclick="wishlist.addwishlist(<?= $listBestSeller[$j]['product_id']; ?>);" title="Add to Wish List" type="button" class="btn btn-white icon-v2"><span class="">Add to Wish List</span></button> 
                                                                                                                    </div>      

                                                                                                                    <div class="compare">     
                                                                                                                        <button onclick="compare.addcompare(<?= $listFeature['products'][$j]['product_id']; ?>);" title="Add to Compare" type="button" class="btn btn-white icon-v2"><span class="">Add to Compare</span></button> 
                                                                                                                    </div>  
                                                                                                                    <div class="quickview">
                                                                                                                        <a title="Quick View" href="" class="iframe-link  btn btn-white icon-v2">
                                                                                                                            <span>Quick View</span>
                                                                                                                        </a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            <?php endfor; ?>
                                                                                        <?php endif; ?>
                                                                                    </div>
                                                                                </div>
                                                                            <?php endfor; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="carousel-controls-v1">
                                                                        <a data-slide="prev" href="#tab-bestseller1859047402" class="carousel-control left">
                                                                            <i class="fa fa-chevron-left"></i>
                                                                        </a>
                                                                        <a data-slide="next" href="#tab-bestseller1859047402" class="carousel-control right">
                                                                            <i class="fa fa-chevron-right"></i>
                                                                        </a>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
    <!--                                                <script>
                                                        $(function () {
                                                            $('#product_tabs1859047402 a:first').tab('show');
                                                        })
                                                        $('.tabcarousel1859047402').carousel({interval: 3000, pause: 'hover'});
                                                    </script>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pav-container container">
                                    <div class="pav-inner">
                                        <div class="row row-level-1">
                                            <div class="row-inner clearfix">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 809px; height: 150px; overflow: hidden; visibility: hidden;">
                                                        <!-- Loading Screen -->
                                                        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                                                            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                                            <div style="position:absolute;display:block;background:url('<?= \Yii::$app->request->BaseUrl?>assets/image/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                                                        </div>
                                                        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 809px; height: 150px; overflow: hidden;">
                                                            <?php foreach ($listBannerManufacture as $key => $value) :?>
                                                            <div style="display: none;">
                                                                <img data-u="image" src="assets/image/<?= $value['image'];?>" />
                                                            </div>
                                                            <?php endforeach;?>                                                            
                                                        </div>
                                                        <!-- Arrow Navigator -->
                                                        <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
                                                        <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                                                           
                        </div>                        
                    </div>
                </div>
            </div> 
        </div>
    </div>