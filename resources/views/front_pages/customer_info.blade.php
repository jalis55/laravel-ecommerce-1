@extends('front.home')
@section('home_main_content')
<div class="container">
            <h3 class="checkout-sep">Shipping Infomations</h3>
            <form id="shipping_form" action="{{url('/order')}}" method="post">
            	{{csrf_field()}}
            <div class="box-border">
                <ul>
                    <li class="row">
                        <div class="col-sm-8">
                            <label for="first_name" class="required">First Name</label>
                            <input type="text" class="input form-control" name="name" id="first_name" >
                        </div><!--/ [col] -->
                        
                    </li><!--/ .row -->
                    <li class="row">
                        <div class="col-sm-6">
                            <label for="company_name">Company Name</label>
                            <input type="text" name="compani_name" class="input form-control" id="company_name" >
                        </div><!--/ [col] -->
                        <div class="col-sm-6">
                            <label for="email_address" class="required">Email Address</label>
                            <input type="text" class="input form-control" name="email" id="email_address">
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <li class="row"> 
                        <div class="col-xs-12">

                            <label for="address" class="required">Address</label>
                            <input type="text" class="input form-control" name="address" id="address" >

                        </div><!--/ [col] -->

                    </li><!-- / .row -->

                    <li class="row">

                        <div class="col-sm-6">
                            
                            <label for="city" class="required">Zilla</label>
                            <input class="input form-control" type="text" name="zilla" id="city" >

                        </div><!--/ [col] -->

                        <div class="col-sm-6">
                            <label class="required">Upazila</label>
                                <select class="input form-control" name="">
                                    <option value="Alabama">Alabama</option>
                                    <option value="Illinois">Illinois</option>
                                    <option value="Kansas">Kansas</option>
                            </select>
                        </div><!--/ [col] -->
                    </li><!--/ .row -->

                    <li class="row">

                        <div class="col-sm-6">

                            <label for="postal_code" class="required">Zip/Postal Code</label>
                            <input class="input form-control" type="text" name="post_code" id="postal_code">
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <li class="row">
                        <div class="col-sm-6">
                            <label for="telephone" class="required">Mobile</label>
                            <input class="input form-control" type="text" name="mobile" id="telephone">
                        </div><!--/ [col] -->

                       

                    </li><!--/ .row -->
                    <li class="row">
                    	<h3 class="checkout-sep">Payment Information</h3>
                        <ul>
                   		 <li>
                           <label for="radio_button_5"><input type="radio" checked name="payment_method" id="radio_button_5" value="cod">Cash on delivary</label><br>
                            <label for="radio_button_6"><input type="radio" name="payment_method" id="radio_button_6" value="ssl">SSL</label>
                        </li>
                  		 


                		</ul>
                    </li><!--/ .row -->

                    
                    <li>
                        <button type="submit"  class="button">Continue</button>
                    </li>
                </ul>
                         
            </div>

        </form>
        <script type="text/javascript">
            $("#shipping_form").validate();
        </script>


</div>
@endsection