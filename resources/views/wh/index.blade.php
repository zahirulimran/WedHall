@extends('layouts.app')
@section('content')		
			@if(session('success'))
			<div class="alert alert-success" role="alert">{{session('success')}}
			</div>
			@endif

			<div class="row">

				<div class="col-6">
				<h1>Wedding Hall Details</h1></div>
				
				<div class="col-6">
				<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModalLong">
	  Add Wedding Hall
	</button>
	<a class="btn btn-sm btn-warning" href="/wh/list"->List</a>
				</div>	
					<table class="table">
					<tr>
						<th> </th>
						<th> Name </th>
						<th> Email </th>
						<th> Phone No </th>
						<th> Address </th>
						<th> Price </th>
						<th> Capacity </th>
						<th> Facilities </th>
						<th> Services </th>
					</tr>

		
					@foreach($data_wh as $wh)
					<tr>
						<td><img src="{{url('storage/public/uploads/photos/' . $wh->image)}}" width="100px;" height="100px;" alt="{{$wh->image}}"></td>
						<td>{{$wh->name}}</td>
						<td>{{$wh->email}}</td>
						<td>{{$wh->phoneNo}}</td>
						<td>{{$wh->address}}</td>
						<td>RM{{$wh->price}}</td>
						<td>{{$wh->capacity}}</td>
						<td>
						@foreach($wh->faci as $faci)
							@if($loop->iteration > 1)
								|
							@endif
								{{$faci->fac}}
						@endforeach
						</td>
						<td>
						@foreach($wh->ser as $ser)
							@if($loop->iteration > 1)
								|
							@endif
								{{$ser->type}}
						@endforeach
						</td>
						<td>
						<a href="/wh/{{$wh->id}}/edit" class="btn btn-warning btn-sm"> Update </a>
						<a href="/wh/{{$wh->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Delete')"> Delete </a>

					</tr>
					@endforeach
					
				

				</table>
				</div>

				</div>
			<!-- Modal ADD USER -->
		<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Create New</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="/wh/create" method="POST" enctype="multipart/form-data">
		        {{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Name</label>
				    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
				    <label for="exampleInputEmail1">Email</label>
				    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email"><small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				    <label for="exampleInputEmail1">PhoneNo</label>
				    <input name="phoneNo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone No">
				    <label for="exampleFormControlTextarea1">Address</label>
    				<textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Address"></textarea>
				    <label for="exampleInputEmail1">Price</label>
				    <input name="price" type="int" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price RM">
					<label for="exampleInputEmail1">Capcity</label>
					<input name="capacity" type="int" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Capacity">
					<label for="image">Insert image</label>
        			<input type="file" class="form-control" name="image"/>
					<input name="userID" type="hidden" value="{{ Auth::user()->id }}"/>
					
				  </div>
				 	

		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Submit</button>
				</form> 
		      </div>
		    </div>
		  </div>
		</div>
	

@endsection