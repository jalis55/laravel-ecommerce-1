@extend('admin.admin_master')
@section('dashboard_main_content')
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Products</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>

        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Category ID</th>
                    <th>Brand ID</th>
                    <th>Product Image</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($product_info as $product){
                ?>
                <tr>
                    <td>{{ $product->product_id }}</td>
                    <td class="center">{{ $product->product_name }} </td>
                    <td class="center">{{ $product->category_id }} </td>
                    <td class="center">{{ $product->brand_id}} </td>
                    <td><img src="{{$product->product_image}}" width="50" height="50" ></td>


                    <td class="center">
                        <?php
                        if ($product->publication_status == 1){

                        ?>

                        <span class="label label-success">Published</span>
                            <?php
                            }
                            else{
                                ?>

                        <span class="label label-important">UnPublished</span>
                            <?php } ?>
                        @if($product->top_status==1)
                             <span class="label label-success">top</span>   
                        @endif

                    </td>
                    <td class="center">
                        <?php
                        if($product->publication_status == 1){
                            ?>

                        <a class="btn btn-danger" href="{{URL::to('/unpublished-product/'.$product->product_id)}}">
                            <i class="halflings-icon white thumbs-down"></i>
                        </a>
                            <?php

                            }else{

                                ?>

                        <a class="btn btn-success" href="{{URL::to('/published-product/'.$product->product_id)}}">
                            <i class="halflings-icon white thumbs-up"></i>
                        </a>
                            <?php } ?>
                        @if($product->top_status==1)
                        <a class="btn btn-success" href="{{URL::to('/remove-top/'.$product->product_id)}}" title="remove from top">
                            <i class="halflings-icon white minus"></i>
                        </a>
                        @else 
                        <a class="btn btn-success" href="{{URL::to('/add-top/'.$product->product_id)}}" title="add to top">
                            <i class="halflings-icon white plus"></i>
                        </a>
                        @endif

                        <a class="btn btn-info" href="{{URL::to('/edit-product/'.$product->product_id)}}">
                            <i class="halflings-icon white edit"></i>
                        </a>
                        <a class="btn btn-danger" href="{{URL::to('/delete-product/'.$product->product_id)}}" onclick="return checkDelete();">
                            <i class="halflings-icon white trash"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
@endsection
