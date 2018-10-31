@extends('admin.admin_master')
@include('products.custom');
@section('dashboard_main_content')	
<script type="text/javascript">
	function check_delete()
	{
		check=confirm("are you sure to delete");
		if(check)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
</script>
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{url('dashboard')}}">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="">Manage sub category</a>
				</li>
			</ul>	
				<div class="box span12">
					<a href="{{url('add-sub-category')}}" class="btn btn-primary btn-block">Add Sub Category</a>
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break">Manage sub category</span></h2>
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
								  <th>Sub category Id</th>
								  <th>Name</th>
								  <th>Date</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							@foreach ($data['sub_category_data'] as $row)
								<tr>
								<td>{{$row->sub_cat_id}}</td>
								<td>{{$row->sub_cat_name}}</td>
								<td class="center">{{$row->created_at}}</td>
								<td class="center">
									@if ($row->publication_status == 1)
										<span class="label label-success">Published</span>
									@endif
									@if ($row->publication_status == 0)
										<span class="label label-danger">Unpublished</span>
									@endif

								</td>
								<td class="center">
										@if ($row->publication_status == 1)
										<a class="btn btn-danger" href="{{url('/unpulished-sub-category/'.$row->sub_cat_id)}}">
										 <i class="halflings-icon white thumbs-down"></i> 
									    @endif
									    @if ($row->publication_status == 0)
									     <a class="btn btn-success" href="{{url('/pulished-sub-category/'.$row->sub_cat_id)}}">
										 <i class="halflings-icon white thumbs-up"></i> 
									    @endif

									</a>
									<a class="btn btn-info" href="{{url('/edit-sub-category/'.$row->sub_cat_id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{url('/delete-sub-category/'.$row->sub_cat_id)}}" onclick="return check_delete();">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							@endforeach
							


							
							
							
						  </tbody>
					  </table>            
					</div>

			
			</div><!--/row-->
			
@endsection