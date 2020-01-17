@extends('layouts.app')
@section('content')		
			<h1>Update Data</h1>
			@if(session('success'))
			<div class="alert alert-success" role="alert">
  Done Update
</div>
@endif

			<div class="row">
				<div class="col-lg-12">
				
				<form action="/services/{{$data_services->id}}/update" method="POST">
				
		        {{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Services</label>
				    <input name="services" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Services" value="{{$data_services->services}}">
				    <label for="exampleInputEmail1">Type</label>
				    <input name="type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Type" value="{{$data_services->type}}">	
					<label for="exampleInputEmail1">Contact</label>
				    <input name="contact" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Number Phone" value="{{$data_services->type}}">					    
				  </div>
				  
		          <button type="submit" class="btn btn-warning">Update</button>
		        
				</form> 

				</div>
			</div>
@endsection