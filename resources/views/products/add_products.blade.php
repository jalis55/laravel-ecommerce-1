@extend('admin.admin_master')
@section('dashboard_main_content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="#">Forms</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>

            <h3 style="color: green">
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo $message;
                    Session::put('message', null);
                }
                ?>
            </h3>

            <div class="box-content">
                <form action="{{url('/store-product')}}" method="post" enctype='multipart/form-data'>
                {{csrf_field()}}
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Name</label>
                        <div class="controls">
                            <input type="text" name="product_name" class="span6 typeahead" id="typeahead">

                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category</label>
                        <div class="controls">
         <select name="parent_id" class = "form-control" required>
         <option value="">Select</option>
         <option value="0"> Main Category </option>
          @foreach( $data['category'] as $row)
          <option value="{{ $row->category_id}}">
               @if($row->level == 0) <b>  @endif  
               
               @if($row->level == 0) <b>  @endif 
               @if($row->level == 1) &nbsp; - @endif   
               @if($row->level == 2) &nbsp; &nbsp; - - @endif     
               @if($row->level == 3) &nbsp; &nbsp; &nbsp; - - - @endif       
               @if($row->level == 4) &nbsp; &nbsp; &nbsp; &nbsp; - - - - @endif       
               @if($row->level == 5) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  - - - - - @endif       
               @if($row->level > 5)  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - - - @endif
               
               {{ $row->category_name }} 
                @if($row->level == 0) </b>  @endif  
           </option>
          @endforeach
          
         </select>

                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Brands</label>
                        <div class="controls">
                            <select name="brand_id">
                                <option value=" ">Select brands</option>
                                @foreach($data['brand'] as $v_brand)
                                    <option value="{{$v_brand->brand_id}}">{{$v_brand->brand_name}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Price</label>
                        <div class="controls">
                            <input type="text" name="product_price" class="span6 typeahead" id="typeahead">

                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Quantity</label>
                        <div class="controls">
                            <input type="text" name="product_quantity" class="span6 typeahead" id="typeahead">

                        </div>
                    </div>


                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Product Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="product_description" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>

                    
                    <div class="control-group">
                        <label class="control-label">File Upload</label>
                        <div class="controls">
                            <input class="input-file uniform_on" name="product_image" type="file">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Publication Status</label>
                        <div class="controls">
                            <select name="publication_status">
                                <option>Select Status</option>
                                <option value="1">Published</option>
                                <option value="0">UnPublished</option>
                            </select>

                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </div>
                </fieldset>
               </form>

            </div>
        </div><!--/span-->
@endsection