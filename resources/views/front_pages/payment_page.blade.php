
@extends('front.home')
@section('home_main_content')
<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Your shopping cart</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading no-line">
            <span class="page-heading-title2">Shopping Cart Summary</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content page-order">
           
            <div class="heading-counter warning">Your shopping cart contains:
                <span>{{count(Cart::content())}}</span>
            </div>
            <div class="order-detail-content">
                <table class="table table-bordered table-responsive cart_summary">
                    <thead>
                        <tr>
                            <th class="cart_product">Product</th>
                            <th>Description</th>
                            <th>Unit price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Cart::content() as $row)
                            
                       
                        <tr>
                            <td class="cart_product">
                                <a href="#"><img src="{{asset($row->options->image)}}" alt="Product"></a>
                            </td>
                            <td class="cart_description">
                                <p class="product-name"><a href="#">{{$row->name}}</a></p>
                                <small class="cart_ref">SKU : #123654999</small><br>
                                <small><a href="#">Color : Beige</a></small><br>   
                                <small><a href="#">Size : S</a></small>
                            </td>
                            
                            <td class="cart_avail"><span class="label label-success">${{$row->price}} </span></td>
                            <td class="qty">
                                <form action="{{url('update-to-cart')}}" method="post">
                                     {{csrf_field()}}
                                     <input type="hidden" name="rowId" value="{{$row->rowId}}">
                                     <h3>{{$row->qty}}</h3>
                                     
                                </form>
                               
                                
                            </td>
                            <td class="price">
                                <span>${{$row->qty*$row->price}}</span>
                            </td>
                           
                        </tr>
                         @endforeach
                        
                    </tbody>
                    <tfoot>

                        <tr>
                            <td colspan="4"><strong>Total</strong></td>
                            <td colspan="4"><strong>
                                {{Cart::total()}}
                            </strong></td>
                        </tr>
                    </tfoot>    
                </table>
                
            </div>
            @if($data['order_key']==0)
            <a href="{{url('/place-order')}}" class="btn btn-primary btn-block">place order</a>
            @else
            <form id="payment_gw" name="payment_gw" method="POST" action="https://securepay.sslcommerz.com/gwprocess/testbox/v3/process.php">
                {{csrf_field()}}
            <input type="hidden" name="total_amount" value="{{cart::total()}}" />
            <input type="hidden" name="store_id" value="test_storeID" />
            <input type="hidden" name="tran_id" value="xxxx" />
            <input type="hidden" name="success_url" value="http://localhost:15135/Home" />
            <input type="hidden" name="fail_url" value="http://localhost:15135/Home" />
            <input type="hidden" name="cancel_url" value="http://localhost:15135/Home" />
            <input type="hidden" name="version" value="2.00" />

            <div class="clearfix"></div>
            <div class="col-md-12">
                
                <!-- SUBMIT REQUEST !-->
                <button type="submit" class="btn btn-success btn-block"><i class="fa fa-calendar-check-o"></i> Pay Now</button>
            </div>
            <div class="clearfix"></div>
        </form>
            @endif
        </div>
    </div>
</div>
<!-- ./page wapper-->
@endsection