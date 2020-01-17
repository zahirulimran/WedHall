@extends('layouts.app')
@section('content')		
			@if(session('success'))
			<div class="alert alert-success" role="alert">{{session('success')}}
</div>
@endif
			<div class="row">

				<div class="col-6">
				<h1>Booking Details</h1></div>
				
				<div class="col-6">
				<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModalLong">
	  Add Booking
	</button>

				</div>	
					<table class="table">
					<tr>
						<th> Arrival Date </th>
						<th> Departure Date </th>
						<th> Arrival Time </th>
						<th> Departure Time </th>
						<th> Status </th>
						<th> User ID </th>
						<th> Wedding Hall ID </th>

					</tr>
					@foreach($data_booking as $booking)
					<tr>
						<td>{{$booking->adate}}</td>
						<td>{{$booking->ddate}}</td>
						<td>{{$booking->atime}}</td>
						<td>{{$booking->dtime}}</td>
						<td>{{$booking->status}}</td>
						<td><a data-toggle="modal" data-target="#exampleModalLong">{{$booking->userID}}</a></td>
						<td><a href="/wh/view/{{$booking->whID}}">{{$booking->whID}}</a></td>
						<td>
						<a href="/booking/{{$booking->id}}/edit" class="btn btn-warning btn-sm">Update</a>
						<a href="/booking/{{$booking->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Delete')"> Delete </a></td>

					</tr>
				@endforeach
				</table>
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
		        <form action="/booking/create" method="POST">
		        {{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Date From</label>
				    <input name="adate" type="text" class="form-control" id="adate" aria-describedby="emailHelp" placeholder="Year/Month/Day">
					<label for="exampleInputEmail1">Date To</label>
				    <input name="ddate" type="text" class="form-control" id="ddate" aria-describedby="emailHelp" placeholder="Year/Month/Day">
				    <label for="exampleInputEmail1">Time From</label>
				    <input name="atime" type="text" class="form-control" id="atime" aria-describedby="emailHelp" placeholder="Enter Time">
					<label for="exampleInputEmail1">Time To</label>
				    <input name="dtime" type="text" class="form-control" id="dtime" aria-describedby="emailHelp" placeholder="Enter Time">
					<input name="status" type="hidden" value="pending">
					<input name="userID" type="hidden" value="{{ Auth::user()->id }}"/>
					<label for="exampleInputEmail1">Wedding Hall</label>
					<select name="whID" class="form-control"> 
						@foreach($data_wh as $wh) 
						<option value="{{$wh->id}}">{{$wh->name}}</option>
						@endforeach
					</select>
				  </div> 	
		      </div>
			  <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Submit</button>
				</form>
				</div>
		    </div>
		  </div>
		</div>

		

		  <!-- Modal wh -->
		<div class="modal fade" id="whDetail" tabindex="-1" role="dialog" aria-labelledby="whDetailTitle" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="whDetailTitle">Wedding Hall Detail</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
			  <table class="table">
					<tr>
						<th> Name </th>
						<th> Email </th>
						<th> Phone No </th>
						<th> Address </th>
						<th> Price </th>
					</tr>

					<tr>
						<td>{{$wh->name}}</td>
						<td>{{$wh->email}}</td>
						<td>{{$wh->phoneNo}}</td>
						<td>{{$wh->address}}</td>
						<td>{{$wh->price}}</td>
						<td>
					</tr>
				</table>
		      </div>
			  <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
		    </div>
		  </div>
		</div>
@endsection