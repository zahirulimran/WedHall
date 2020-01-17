@extends('layouts.app')
@section('content')		
			<h1>Insert Services to</h1>
			@if(session('success'))
			<div class="alert alert-success" role="alert">
  Done Update
</div>
@endif

			<div class="row">
				<div class="col-lg-12">
				
				<form action="/services/insertOps/{{$data_services->id}}" method="POST">
				
		        {{csrf_field()}}
					<div class="form-group">
				    
				  		<input name="servicesID" type="hidden" value="{{$data_services->id}}"/>
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