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
				
				<form action="/wh/{{$data_wh->id}}/update" method="POST">
				
		        {{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Name</label>
				    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" value="{{$data_wh->name}}">
				    <label for="exampleInputEmail1">Email</label>
				    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" value="{{$data_wh->email}}">
				    <label for="exampleInputEmail1">PhoneNo</label>
				    <input name="phoneNo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone No" value="{{$data_wh->phoneNo}}">
				    <label for="exampleFormControlTextarea1">Address</label>
    				<textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$data_wh->address}}</textarea>
    				<label for="exampleInputEmail1">Price</label>
				    <input name="price" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price" value="{{$data_wh->price}}">
					<label for="exampleInputEmail1">Capacity</label>
				    <input name="capacity" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price" value="{{$data_wh->capacity}}">
					
				    
				  </div>
				  
		          <button type="submit" class="btn btn-warning">Update</button>
		        
				</form> 

				</div>
			</div>
@endsection
