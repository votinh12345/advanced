<?php

use common\components\MenuHelper;

$category = MenuHelper::getAllMenu();
?>
<div class="sidemenu-left ps-container ps-active-y" id="sidebar-wrapper" data-ps-id="b4218f6b-83f4-8723-4daa-8c88aad5b8bf">
    <div class="hidden-lg hidden-md">
        <!-- menu -->
        <div class="pav-mainnav" id="pav-mainnav">
            <div class="pav-megamenu-mb">
                <button type="button" class="btn btn-primary canvas-menu hidden-lg hidden-md" data-toggle="offcanvas"><span class="fa fa-bars"></span> Menu</button>
                <nav class="hidden-sm hidden-xs" id="pav-megamenu">
                    <div class="navbar">
                        <div role="navigation" class="megamenu" id="mainmenutop">
                            <div class="navbar-header">
                                <div id="bs-megamenu" class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav megamenu">
                                        <li class="parent dropdown home aligned-left">
                                            <a href="" data-toggle="dropdown" class="dropdown-toggle"><span class="menu-title">Home</span></a>
                                        </li>
                                        <li class=" aligned-left parent dropdown ">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                <span class="menu-title">Categories</span><b class="caret"></b>
                                            </a>
                                            <div style="width:800px" class="dropdown-menu">
                                                <div class="dropdown-menu-inner">
                                                    <div class="row">
                                                        <div class="mega-col col-xs-12 col-sm-12 col-md-3 "> 
                                                            <div class="mega-col-inner">
                                                                <?php foreach ($category['categories'] as $key => $value) : ?>
                                                                    <div id="pavowid-<?= $value['category_id']; ?>" class="pavo-widget">
                                                                        <div id="pavowid-<?= $value['category_id']; ?>" class="pavo-widget">
                                                                            <h5 class="widget-heading title"><?= $value['name']; ?></h5>
                                                                            <?php if (count($value['children']) > 0): ?>
                                                                                <div class="sub-categories space-25">
                                                                                    <ul class="content">
                                                                                        <?php foreach ($value['children'] as $key1 => $value1) : ?>
                                                                                            <li>
                                                                                                <a href="<?= $value1['href']; ?>">
                                                                                                    <span><?= $value1['name']; ?></span>
                                                                                                </a>
                                                                                            </li>
                                                                                        <?php endforeach; ?>
                                                                                    </ul>
                                                                                </div>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                                                                                                        
                                        <li class="parent dropdown  aligned-left">
                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                                <span class="menu-title">Customer Service</span></a>
                                            <div class="dropdown-menu level1">
                                                <div class="dropdown-menu-inner">
                                                    <div class="row">
                                                        <div data-type="menu" class="mega-col col-xs-12 col-sm-12 col-md-12">
                                                            <div class="mega-col-inner">
                                                                <ul>
                                                                    <li class=""><a href="#"><span class="menu-title">Contact Us</span></a></li>
                                                                    <li class=""><a href="#"><span class="menu-title">Returns</span></a></li>
                                                                    <li class=""><a href="#"><span class="menu-title">Site Map</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>                                                                               
                                        
                                    </ul>				
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>    </div></div> 
        <!-- menu -->  
    </div>
    <!-- search -->
    <div class="hidden-xs hidden-sm">
        <div id="sidebar-search" class="input-group">
            <input type="text" name="search" value="" placeholder="Search" class="form-control">
            <span class="input-group-btn">
                <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
            </span>
        </div>

        <!-- mega menu -->
        <div class="panel panel-menu">
            <div class="panel-heading">
                <h3 class="panel-title">Main menu</h3>
            </div>
            <div class="panel-body tree-menu">
                <ul class="list-unstyled">
                    <li><a href="/">home</a></li>
                    <li><a href="#">Featured</a></li>
                    <li><a href="#">Bestsellers</a></li>                                    
                </ul>        	 
            </div>
        </div>


        <!-- category -->
        <div class="panel panel-menu panel-v1">
            <div class="panel-heading"><h4 class="panel-title">Categories</h4></div>
            <div class="panel-body tree-menu">
                <ul id="accordion14489554901908838579" class="accordion">
                    <?php foreach ($category['categories'] as $key => $value) : ?>
                        <li class="accordion-group">
                            <a href="javascript:void(0)" class="active"><?= $value['name'] ?></a>
                            <?php if (count($value['children']) > 0): ?>
                                <div class="accordion-heading pull-right">
                                    <span data-toggle="collapse" data-parent="#accordion<?= $value['category_id']; ?>" data-target="#collapse_<?= $value['category_id']; ?>" class="bg collapsed" aria-expanded="false"><i class="fa fa-plus-square"></i></span>
                                </div>
                                <ul id="collapse_<?= $value['category_id']; ?>" class="accordion-body collapse" aria-expanded="false" style="height: 0px;">
                                    <?php foreach ($value['children'] as $key1 => $value1): ?>
                                        <li>
                                            <a href="<?= $value1['href']; ?>"><?= $value1['name']; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="panel panel-menu">
            <div class="panel-heading">
                <h3 class="panel-title">Customer Service</h3>
            </div>
            <div class="panel-body tree-menu">
                <ul class="list-unstyled">						
                    <li><a href="#">Contact Us</a></li>						
                    <li><a href="#">Returns</a></li>						
                    <li><a href="#">Site Map</a></li>						                    								
                </ul>   
                <ul class="list-unstyled list-inline list-social">	
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>	
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>	
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>	
                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>            

        </div>
    </div>
    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: -634px;">
        <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
    </div>
</div>