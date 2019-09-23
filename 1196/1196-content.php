<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';   
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1196">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="content-left col-md-6 col-sm-6 col-xs-6">
                    <h3>E-commerce :: Product Page</h3>
                </div>
                <div class="content-right col-md-6 col-sm-6 col-xs-6">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>  
            </div> 
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="admin-panel">
                    <div class="admin-title">
                        <h3>
                            E-commerce page design
                        </h3>
                        <ul class="items">
                            <li>
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Settings 1</a></li>
                                    <li><a href="#">Settings 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="close-link">
                                    <i class="fa fa-close"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="admin-content">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="product-img">
                                    <a href="#"><img src="images/prod-1.jpg" alt="product" id="main"></a>
                                </div>
                                <div class="product-gallery">
                                    <a href="images/prod-1.jpg" onclick="swap(this); return false;"><img src="images/prod-1.jpg" ></a>
                                    <a href="images/prod-2.jpg" onclick="swap(this); return false;"><img src="images/prod-2.jpg"/></a>
                                   <a href="images/prod-5.jpg" onclick="swap(this); return false;"><img src="images/prod-5.jpg"/></a>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="product-name">
                                    <h3>LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
                                </div>
                                <div class="product-info">
                                    <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                                    <div class="product-color">
                                        <h4>Available Colors</h4>

                                        <ul class="color-name">
                                            <li>
                                                <p>Green</p>
                                                <div class="color green"></div>
                                            </li>
                                            <li>
                                                <p>Blue</p>
                                                <div class="color blue"></div>
                                            </li>
                                            <li>
                                                <p>Red</p>
                                                <div class="color red"></div>
                                            </li>
                                            <li>
                                                <p>Orange</p>
                                                <div class="color orange"></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="product-size">
                                        <h4>Size <small>Please select one</small></h4>

                                        <ul class="size-name">
                                            <li>
                                                <a href="#" class="btn-size">Small</a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-size">Medium</a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-size">Large</a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-size">X-tra</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-price">
                                        <h1 class="price">Ksh80.00</h1>
                                        <span class="price-tax">Ex Tax: Ksh80.00</span>
                                    </div>
                                    <div class="product-btnadd">
                                        <a href="#" class="add-to-cart">Add to Cart</a>
                                        <a href="#" class="add-to-cart">Add to Wishlist</a>
                                    </div>
                                    <div class="product-social">
                                        <ul class="list-social">
                                            <li>
                                                <a href="#"><i class="fa fa-facebook-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-envelope-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-rss-square"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                                    <li><a data-toggle="tab" href="#menu1">Profile 1</a></li>
                                    <li><a data-toggle="tab" href="#menu2">Profile 2</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">                                                
                                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk</p>
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