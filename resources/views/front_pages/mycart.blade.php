
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
                            <th>Avail.</th>
                            <th>Unit price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th  class="action"><i class="fa fa-trash-o"></i></th>
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
                            <td class="cart_avail"><span class="label label-success">In stock</span></td>
                            <td class="cart_avail"><span class="label label-success">${{$row->price}} </span></td>
                            <td class="qty">
                                <form action="{{url('update-to-cart')}}" method="post">
                                     {{csrf_field()}}
                                     <input type="hidden" name="rowId" value="{{$row->rowId}}">
                                     <input class="form-control input-sm" name="qty" type="number" value="{{$row->qty}}">
                                     <input type="submit" title="update" value="+">
                                </form>
                               
                                
                            </td>
                            <td class="price">
                                <span>${{$row->qty*$row->price}}</span>
                            </td>
                            <td class="action">
                                <form action="{{url('delete-from-cart')}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="rowId" value="{{$row->rowId}}">
                                     <input type="submit" class="btn btn-danger" value="X" >
                                    
                                </form>
                               
                            </td>
                        </tr>
                         @endforeach
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" rowspan="2"></td>
                            <td colspan="3">Total</td>
                           
                            <td colspan="2">${{Cart::subtotal()}}</td>
                        </tr>
                        
                        <tr>
                            <td colspan="3"><strong>Tax(2%)</strong></td>
                            <td colspan="2"><strong>
                                ${{Cart::tax()}}
                            </strong></td>
                        </tr><tr>
                            <td colspan="4"><strong>Total</strong></td>
                            <td colspan="4"><strong>
                                {{Cart::total()}}
                            </strong></td>
                        </tr>
                    </tfoot>    
                </table>
                <div class="cart_navigation">
                    <a class="prev-btn" href="{{url('/')}}">Continue shopping</a>
                    <a class="next-btn" href="{{url('shipping')}}">Proceed to checkout</a>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./page wapper-->
@endsection