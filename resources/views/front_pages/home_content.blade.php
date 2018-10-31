@extends('front.home')
@section('home_main_content')
<!-- Home slideder-->
<div id="home-slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 slider-left"></div>
            <div class="col-sm-9 header-top-right">
                <div class="homeslider">
                    <ul id="contenhomeslider">
                       {{-- top items --}}
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Home slideder-->
<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <h2 class="page-heading">
                    <span class="page-heading-title">LATEST DEALS</span>
                </h2>
                <div class="latest-deals-product">
                    <span class="count-down-time2">
                        <span class="icon-clock"></span>
                        <span>end in</span>
                        <span class="countdown-lastest" data-y="2016" data-m="7" data-d="1" data-h="00" data-i="00" data-s="00"></span>
                    </span>
                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "10" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
{{--                         @foreach ($data['latest'] as $row)
                       
                        <li>
                            <div class="left-block">
                                <a href="{{url('/view-product-details/'.$row->product_id)}}"><img class="img-responsive" alt="product" src="{{asset($row->product_image)}}" style="height:200px;width: 300px;" /></a>
                                <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="{{url('/view-product-details/'.$row->product_id)}}"></a>
                                </div>
                                <div class="add-to-cart">
                                    <a title="Add to Cart" href="{{url('/view-product-details/'.$row->product_id)}}">Add to Cart</a>
                                </div>
                                <div class="price-percent-reduction2">
                                  new
                                </div>
                            </div>
                            <div class="right-block">
                                <h5 class="product-name"><a href="#">{{$row->product_name}}</a></h5>
                                <div class="content_price">
                                    <span class="price product-price">{{$row->product_price}}</span>
                                     <span class="price old-price">$52,00</span> 
                                </div>
                            </div>
                        </li>
                         @endforeach --}}
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!---->
<div class="content-page">
    <div class="container">
        <!-- featured category fashion -->

        <!-- end featured category fashion -->
        <!-- featured category sports -->
        <div class="category-featured sports">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/icon-sports.png" /></a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-2" class="floor-elevator">
                    <a href="#elevator-1" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-3" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-6">

                                    <div class="box">
                                        <ul class="product-list row">
{{--                                            @foreach ($data['fashion'] as $row)
                                              
                                          
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">{{$row->product_name}}</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">{{$row->product_price}}</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="{{url('/view-product-details/'.$row->product_id)}}">
                                                    <img class="img-responsive" alt="product" src="{{asset($row->product_image)}}" style="height: 200px;width: 200px;" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="{{url('/view-product-details/'.$row->product_id)}}"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="{{url('/view-product-details/'.$row->product_id)}}">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach --}}



                                        </ul>
                                        <div>
                                            <center>
                                            <a href=""><h3 class="btn btn-default">view all</h3></a>
                                        </center>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category sports-->
        <div class="category-featured sports">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="jewelry" src="assets/data/icon-sports.png" /></a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-2" class="floor-elevator">
                    <a href="#elevator-1" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-3" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-6">

                                    <div class="box">
                                        <ul class="product-list row">
{{--                                            @foreach ($data['jewelry'] as $row)
                                              
                                          
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">{{$row->product_name}}</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">{{$row->product_price}}</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="{{url('/view-product-details/'.$row->product_id)}}">
                                                    <img class="img-responsive" alt="product" src="{{asset($row->product_image)}}" style="height: 200px;width: 200px;" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="{{url('/view-product-details/'.$row->product_id)}}"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="{{url('/view-product-details/'.$row->product_id)}}">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach --}}



                                        </ul>
                                        <div>
                                            <center>
                                            <a href=""><h3 class="btn btn-default">view all</h3></a>
                                        </center>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        
        <!-- featured category electronic -->
        <div class="category-featured electronic">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="Electrocnics" src="" /></a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
<!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-3" class="floor-elevator">
                    <a href="#elevator-2" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-4" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                          
{{--                             @foreach ($brands as $brand)
                               <li><a href="#">{{$brand->brand_name}}</a></li>
                            @endforeach --}}
                            
                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-6">

                                    <div class="box">
                                        <ul class="product-list row">
                                          
{{--                                             @foreach($data['digital'] as $row)

                                          
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">{{$row->product_name}}</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">{{$row->product_price}}</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="{{asset($row->product_image)}}" style="height: 200px;width: 200px;" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="{{url('/view-product-details/'.$row->product_id)}}"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                          @endforeach --}}



                                        </ul>
                                        <div>
                                            <center>
                                            <a href=""><h3 class="btn btn-default">view all</h3></a>
                                        </center>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category electronic-->
        <!-- featured category Digital -->
        <div class="category-featured digital">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/icon-digital.png" />DIGITAL</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-10">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-11">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-10">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-11">Most Reviews</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-4" class="floor-elevator">
                    <a href="#elevator-3" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-5" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <li><a href="#">Tablet selfie</a></li>
                            <li><a href="#">Laptop Batteries</a></li>
                            <li><a href="#">OTG flash drives</a></li>
                            <li><a href="#">Mouse</a></li>
                            <li><a href="#">Keyboard</a></li>
                            <li><a href="#">SSD</a></li>
                            <li><a href="#">Tenda router</a></li>
                            <li><a href="#">3D printer</a></li>
                            <li><a href="#">Laser Pens</a></li>
                            <li><a href="#">Printer Supplies</a></li>
                            <li><a href="#">Gaming</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 manufacture-list">
                        <div class="manufacture-waper">
                            <div class="owl-carousel-vertical" data-items="1" data-autoplay="false" data-nav="true" data-dots="false" data-loop="true" >
                                <div class="item">
                                    <ul >
                                        <li><a href="#"><img src="assets/data/m1.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m2.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m3.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m4.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m5.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m6.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m7.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m8.jpg" alt="manufacture"></a></li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul >
                                        <li><a href="#"><img src="assets/data/m1.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m2.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m3.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m4.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m5.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m6.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m7.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m8.jpg" alt="manufacture"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-10">
                                   <div class="row">
                                        <div class="col-sm-12 category-list-product">
                                            <ul class="product-list row">
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Cute Speaker</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p67.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Bphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p68.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Sonic Camera</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p69.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Blue Nano Projector</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p70.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Smartphone Battery</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p71.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p72.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#"> SamSing Gallaxy S5</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p73.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Ipado Air 2</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p74.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                   </div>
                                </div>
                                <div class="tab-panel" id="tab-11">
                                   <div class="row">
                                        <div class="col-sm-12 category-list-product">
                                            <ul class="product-list row">
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p74.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p73.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p72.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p71.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p70.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p69.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p68.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p67.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
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
        <!-- end featured category Digital-->
        <!-- featured category furniture -->
       <div class="category-featured furniture">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/icon-furniture.png" />furniture</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-12">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-13">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-12">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-13">Most Reviews</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-5" class="floor-elevator">
                    <a href="#elevator-4" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-6" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <li><a href="#">Cross Stitch</a></li>
                            <li><a href="#">Diamond Painting</a></li>
                            <li><a href="#">Cake Tools</a></li>
                            <li><a href="#">Cooking Tools</a></li>
                            <li><a href="#">Curtain</a></li>
                            <li><a href="#">Bedding</a></li>
                            <li><a href="#">Wall Décor</a></li>
                            <li><a href="#">Decorative Flowers</a></li>
                            <li><a href="#">Home Storage</a></li>
                            <li><a href="#">Pest Control</a></li>
                            <li><a href="#">Pet Products</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-12">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="assets/data/banner-product3.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Interesting Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p75.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Relaxed Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p76.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Innovative Red Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p77.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">White Stack Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p78.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Kute Innovative Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p79.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Pretty Green & Inox</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p80.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-13">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="assets/data/banner-product3.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p78.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p77.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p78.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p76.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p75.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p74.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category furniture-->
        <!-- featured category jewelry -->
        <div class="category-featured jewelry">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/icon-jewelry.png" />jewelry</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-14">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-15">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-14">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-15">Most Reviews</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-6" class="floor-elevator">
                    <a href="#elevator-5" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#" class="btn-elevator disabled down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <li><a href="#">Multi-Layer Necklaces</a></li>
                            <li><a href="#">925 Silver</a></li>
                            <li><a href="#">Pearl Jewelry</a></li>
                            <li><a href="#">Friendship Bracelets</a></li>
                            <li><a href="#">Brinco</a></li>
                            <li><a href="#">Body Chains</a></li>
                            <li><a href="#">Carp Fishing</a></li>
                            <li><a href="#">DIY Beads</a></li>
                            <li><a href="#">Digital Watches</a></li>
                            <li><a href="#">Dress Watches</a></li>
                            <li><a href="#">Men's Watches</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-14">
                                    <div class="box-left">
                                        <ul class="owl-intab owl-carousel" data-loop="true" data-items="1" data-autoplay="true" data-dots="false" data-nav="true">
                                            <li><a href="#"><img src="assets/data/banner-intab2.jpg" alt="Image"></a></li>
                                            <li><a href="#"><img src="assets/data/jewelry-slide.jpg" alt="Image"></a></li>
                                        </ul>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Sexy Green Swan</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p81.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Golden & Creative Ring</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p82.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Diamond Ring</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p83.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="box-full clearfix">
                                        <ul class="product-list">
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Ruby & Golden Ring</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p84.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Natural Pearl Necklace</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p85.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Diamond Couple</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p86.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Sexy Earrings</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p87.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Precious Stones</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p88.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                       </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-15">
                                    <div class="box-full clearfix">
                                        <ul class="product-list">
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p81.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p82.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p83.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p84.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p85.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p86.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p87.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p88.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p84.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p81.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                       </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category jewelry-->
    </div>
</div>

<div id="content-wrap">
    <div class="container">
        <!-- Baner bottom -->
        <div class="row banner-bottom">
            <div class="col-sm-6 item-left">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="ads" class="img-responsive" src="assets/data/banner-botom1.jpg" /></a>
                </div>
            </div>
            <div class="col-sm-6 item-right">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="ads" class="img-responsive" src="assets/data/banner-bottom2.jpg" /></a>
                </div>
            </div>
        </div>
        <!-- end banner bottom -->

        <!-- blog list -->
        <div class="blog-list">
            <h2 class="page-heading">
                <span class="page-heading-title">From the blog</span>
            </h2>
            <div class="blog-list-wapper">
                <ul class="owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                    <li>
                        <div class="post-thumb image-hover2">
                            <a href="#"><img src="assets/data/blog1.jpg" alt="Blog"></a>
                        </div>
                        <div class="post-desc">
                            <h5 class="post-title">
                                <a href="#">Share the love with KuteShop</a>
                            </h5>
                            <div class="post-meta">
                                <span class="date">February 27, 2015</span>
                                <span class="comment">27 comment</span>
                            </div>
                            <div class="readmore">
                                <a href="#">Readmore</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="post-thumb image-hover2">
                            <a href="#"><img src="assets/data/blog2.jpg" alt="Blog"></a>
                        </div>
                        <div class="post-desc">
                            <h5 class="post-title">
                                <a href="#">Share the love with KuteShop</a>
                            </h5>
                            <div class="post-meta">
                                <span class="date">February 27, 2015</span>
                                <span class="comment">27 comment</span>
                            </div>
                            <div class="readmore">
                                <a href="#">Readmore</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="post-thumb image-hover2">
                            <a href="#"><img src="assets/data/blog3.jpg" alt="Blog"></a>
                        </div>
                        <div class="post-desc">
                            <h5 class="post-title">
                                <a href="#">Big sales this summer</a>
                            </h5>
                            <div class="post-meta">
                                <span class="date">February 27, 2015</span>
                                <span class="comment">27 comment</span>
                            </div>
                            <div class="readmore">
                                <a href="#">Readmore</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="post-thumb image-hover2">
                            <a href="#"><img src="assets/data/blog4.jpg" alt="Blog"></a>
                        </div>
                        <div class="post-desc">
                            <h5 class="post-title">
                                <a href="#">How to shop with us</a>
                            </h5>
                            <div class="post-meta">
                                <span class="date">February 27, 2015</span>
                                <span class="comment">27 comment</span>
                            </div>
                            <div class="readmore">
                                <a href="#">Readmore</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ./blog list -->
        <!-- service 2 -->
        <div class="services2">
            <ul>
                <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                    <div class="service-wapper">
                        <div class="row">
                            <div class="col-sm-6 image">
                                <div class="icon">
                                    <img src="assets/data/icon-s1.png" alt="service">
                                </div>
                                <h3 class="title"><a href="#">Great Value</a></h3>
                            </div>
                            <div class="col-sm-6 text">
                                We offer competitive prices on our 100 million plus product range.
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                    <div class="service-wapper">
                        <div class="row">
                            <div class="col-sm-6 image">
                                <div class="icon">
                                    <img src="assets/data/icon-s2.png" alt="service">
                                </div>
                                <h3 class="title"><a href="#">Worldwide Delivery</a></h3>
                            </div>
                            <div class="col-sm-6 text">
                                With sites in 5 languages, we ship to over 200 countries & regions.
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                    <div class="service-wapper">
                        <div class="row">
                            <div class="col-sm-6 image">
                                <div class="icon">
                                    <img src="assets/data/icon-s3.png" alt="service">
                                </div>
                                <h3 class="title"><a href="#">Safe Payment</a></h3>
                            </div>
                            <div class="col-sm-6 text">
                                Pay with the world’s most popular and secure payment methods.
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                    <div class="service-wapper">
                        <div class="row">
                            <div class="col-sm-6 image">
                                <div class="icon">
                                    <img src="assets/data/icon-s4.png" alt="service">
                                </div>
                                <h3 class="title"><a href="#">Shop with Confidence</a></h3>
                            </div>
                            <div class="col-sm-6 text">
                                Our Buyer Protection covers your purchase from click to delivery.
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                    <div class="service-wapper">
                        <div class="row">
                            <div class="col-sm-6 image">
                                <div class="icon">
                                    <img src="assets/data/icon-s5.png" alt="service">
                                </div>
                                <h3 class="title"><a href="#">24/7 Help Center</a></h3>
                            </div>
                            <div class="col-sm-6 text">
                                Round-the-clock assistance for a smooth shopping experience.
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                    <div class="service-wapper">
                        <div class="row">
                            <div class="col-sm-6 image">
                                <div class="icon">
                                    <img src="assets/data/icon-s6.png" alt="service">
                                </div>
                                <h3 class="title"><a href="#">Shop On-The-Go</a></h3>
                            </div>
                            <div class="col-sm-6 text">
                                Download the app and get the world of KuteShop at your fingertips.
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <!-- ./service 2 -->
    </div> <!-- /.container -->
</div>
@endsection