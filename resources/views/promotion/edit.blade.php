@extends('layout.master')
@section('content')		
			<h1>Update Data</h1>
			@if(session('success'))
			<div class="alert alert-success" role="alert">
  Done Update
</div>
@endif

			<div class="row">
				<div class="col-lg-12">
				
				<form action="/promotion/{{$data_promotion->id}}/update" method="POST">
				
		        {{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Promotion</label>
				    <input name="promotion" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Promotion" value="{{$data_promotion->promotion}}">
				    <label for="exampleInputEmail1">Type</label>
				    <input name="type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Type" value="{{$data_promotion->type}}">					    
				  </div>
				  
		          <button type="submit" class="btn btn-warning">Update</button>
		        
				</form> 

				</div>
			</div>
@endsection