@extends('admin.admin_master')
@section('dashboard_main_content')
{{ $errors->has('category_name') ? 'has-error' : '' }}

@if ($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
@endif

@if(count($errors))
	<div class="alert alert-danger">
		<strong>Whoops!</strong> There were some problems with your input.
		<br/>
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
<?php
define('WP_DEBUG', false);
?>


@if (count($errors) > 0)
mmmmmmmmmmmmmm
   
            @foreach ($errors->all() as $error)
              
            @endforeach
      
@endif
 <form class ="form-horizontal" role = "form" method="post" action="{{ url('save-category')}}">
      {!! csrf_field() !!}
   <div class = "form-group">
      <label for = "firstname" class = "col-sm-2 control-label">Category Name</label>
        
      <div class = "col-sm-10">
         <input type="text"  class ="form-control" id="category_name" name="category_name" placeholder = "Enter category Name">
      </div>
   </div>
   
   <div class = "form-group">
      <label for="parent" class = "col-sm-2 control-label">Category</label>
        
      <div class = "col-sm-10">
         <select name="parent_id" class = "form-control" required>
         <option value="">Select</option>
         <option value="0"> Main Category </option>
          @foreach( $data['all_cat'] as $row)
          <option value="{{ $row->category_row_id}}">
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
  
   
   <div class = "form-group">
      <div class = "col-sm-offset-2 col-sm-10">
         <input type ="submit" class = "btn btn-default" value="SAVE" />
      </div>
   </div>
    
</form>
@endsection