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
				
				<form action="/user/{{$data_users->id}}/update" method="POST">
				
		        {{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Role</label>
					<div class="col-md-6">
						<input type="radio" name="role" value="user"> User<br>
						<input type="radio" name="role" value="admin"> Admin<br>
					</div>
				    <label for="exampleInputEmail1">Name</label>
				    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" value="{{$data_users->name}}">
				    <input name="password" type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password" value="{{$data_users->password}}">
				    <label for="exampleInputEmail1">PhoneNo</label>
				    <input name="phoneNo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone No" value="{{$data_users->phoneNo}}">
				    <label for="exampleInputEmail1">Email</label>
				    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" value="{{$data_users->email}}">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				    <label for="exampleFormControlTextarea1">Address</label>
    				<textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$data_users->address}}</textarea>
				  </div>
				  
		          <button type="submit" class="btn btn-warning">Update</button>
		        
				</form> 

				</div>
			</div>
@endsection
