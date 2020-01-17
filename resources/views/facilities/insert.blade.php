@extends('layout.master')
@section('content')		
			<h1>Insert Facilities to</h1>
			@if(session('success'))
			<div class="alert alert-success" role="alert">
  Done Update
</div>
@endif

			<div class="row">
				<div class="col-lg-12">
				
				<form action="/facilities/{{$data_facilities->id}}/insertOps" method="POST">
				
		        {{csrf_field()}}
					<div class="form-group">
				    
				  		<input name="facilitiesID" type="hidden" value="{{$data_facilities->id}}"/>
						<label for="exampleInputEmail1">Wedding Hall ID</label>
						<select name="whID" class="form-control"> 
							@foreach($data_wh as $wh) 
							<option value="{{$wh->id}}">{{$wh->name}}</option>
							@endforeach
						</select>
				  
		          		<button type="submit" class="btn btn-warning">Insert</button>
					</div>
				</form> 

					
				</div>
			</div>
@endsection