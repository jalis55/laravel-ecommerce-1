@extends('front.home')
@section('home_main_content')
<div class="row">
            
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-12" id="center_column">
                <!-- Product -->
                <form action="{{url('add-to-cart')}}" method="post">
                    {{csrf_field()}}
                    <div id="product">
                        <div class="primary-box row">
                            <div class="pb-left-column col-xs-12 col-sm-5">
                                <!-- product-imge-->
                                <div class="product-image">
                                    <div class="product-full">
                                        <img id="product-zoom" src='{{asset($data['product_by_id']->product_image)}}' data-zoom-image="{{asset($data['product_by_id']->product_image)}}"/>
                                    </div>
                                    
                                </div>
                                <!-- product-imge-->
                            </div>
                            <div class="pb-right-column col-xs-12 col-sm-7">
                                <input type="hiddes" name="product_id" value="{{$data['product_by_id']->product_id}}">
                                <h1 class="product-name">{{$data['product_by_id']->product_name}}</h1>
                                <div class="product-comments">
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="comments-advices">
                                        <a href="#">Based  on 3 ratings</a>
                                        <a href="#"><i class="fa fa-pencil"></i> write a review</a>
                                    </div>
                                </div>
                                <div class="product-price-group">
                                    <span class="price">{{$data['product_by_id']->product_price}}</span>
                                    <span class="old-price">$52.00</span>
                                    
                                </div>
                                <div class="info-orther">
                                    <p>Item Code: #453217907</p>
                                    <p>Availability: <span class="in-stock">In stock</span></p>
                                    <p>Condition: New</p>
                                </div>
                                <div class="product-desc">
                                   {{$data['product_by_id']->product_description}}
                                </div>
                                <div class="form-option">
                                    <p class="form-option-title">Available Options:</p>
                                    
                                    <div class="attributes">
                                        <div class="attribute-label">Qty:</div>
                                        <div class="attribute-list product-qty">
                                            <div class="qty">
                                                <input id="option-product-qty" type="number" name="qty" value="1">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="attributes">
                                        <div class="attribute-label">Size:</div>
                                        <div class="attribute-list">
                                            <select name="size">
                                                <option value="1">X</option>
                                                <option value="2">XL</option>
                                                <option value="3">XXL</option>
                                            </select>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-action">
                                    <div class="button-group">
                                        {{-- <a class="btn-add-cart" href="{{URL::to('add-to-cart')}}">Add to cart</a> --}}
                                        <button type="submit" class="btn-add-cart">Add to cart</button>
                                    </div>
                                    <div class="button-group">
                                        <a class="wishlist" href="#"><i class="fa fa-heart-o"></i>
                                        <br>Wishlist</a>
                                        <a class="compare" href="#"><i class="fa fa-signal"></i>
                                        <br>        
                                        Compare</a>
                                    </div>
                                </div>
                                <div class="form-share">
                                    <div class="sendtofriend-print">
                                        <a href="javascript:print();"><i class="fa fa-print"></i> Print</a>
                                        <a href="#"><i class="fa fa-envelope-o fa-fw"></i>Send to a friend</a>
                                    </div>
                                    <div class="network-share">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                        </div>
                    </div>
                <!-- Product -->
            </div>
            <script type="text/javascript">
                $('#product-zoom').okzoom({
                  width: 200,
                  height: 200,
                  round: true,
                  background: "#fff",
                  backgroundRepeat: "repeat",
                  shadow: "0 0 5px #000",
                  border: "1px solid black"
                });
            </script>
            <!-- ./ Center colunm -->
        </div>
        @endsection