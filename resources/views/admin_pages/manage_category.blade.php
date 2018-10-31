@extends('admin.admin_master')
@section('dashboard_main_content')	
<a href="{{url('add-category')}}" class="btn btn-success btn-block">Add Category</a>
<table class="table table-hover">
  <thead>
    <tr>
      <th>Category Name</th>	
      <th>Status</th>
      <th>Action</th>
      
	  <th>&nbsp;</th>      
    </tr>
  </thead>
  <tbody>  
  
    @foreach($data['category_data'] as $row)    
	 <tr>            
      <td> 
       @if($row->level == 0) <b>  @endif 
       @if($row->level == 1) &nbsp; - @endif   
       @if($row->level == 2) &nbsp; &nbsp; - - @endif     
       @if($row->level == 3) &nbsp; &nbsp; &nbsp; - - - @endif       
       @if($row->level == 4) &nbsp; &nbsp; &nbsp; &nbsp; - - - - @endif       
       @if($row->level == 5) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  - - - - - @endif       
       @if($row->level > 5)  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - - - @endif       
       
       
       {{ $row->category_name }} 
       @if($row->level == 0) </b>  @endif 
       </td> 
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
			 <a class="btn btn-danger" href="{{url('/unpulished-category/'.$row->category_id)}}">
				<i class="halflings-icon white thumbs-down"></i> 
			 </a>	
			@endif
			@if ($row->publication_status == 0)
			 <a class="btn btn-success" href="{{url('/pulished-category/'.$row->category_id)}}">
			  <i class="halflings-icon white thumbs-up"></i>
			 </a>  
			@endif
						
			 <a class="btn btn-info" href="{{url('/edit-category/'.$row->category_id)}}">
				<i class="halflings-icon white edit"></i>  
			</a>
			@if(!$row->has_child)
			<a class="btn btn-danger" href="{{url('/delete-category/'.$row->category_id)}}" onclick="return check_delete();">
				<i class="halflings-icon white trash"></i> 
			</a>
			@endif
		</td>
      
      <td>&nbsp;</td>
    </tr>
	@endforeach
  </tbody>
</table>

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
@endsection