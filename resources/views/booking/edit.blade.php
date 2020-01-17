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
				
				<form action="/booking/{{$data_booking->id}}/update" method="POST">
				
		        {{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">ArrivalDate</label>
				    <input name="adate" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Arrival Date" value="{{$data_booking->adate}}">
					<label for="exampleInputEmail1">ArrivalDate</label>
				    <input name="ddate" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Deaprture Date" value="{{$data_booking->ddate}}">
				    <label for="exampleInputEmail1">Time</label>
				    <input name="atime" type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Arrival Time" value="{{$data_booking->atime}}">
					<label for="exampleInputEmail1">Time</label>
				    <input name="dtime" type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Departure Time" value="{{$data_booking->dtime}}">
					<label for="exampleInputEmail1">Status</label>
				    <select name="status" class="form-control">
						<option value="Pending">Pending</option>
						<option value="Process">Process</option>
						<option value="Success">Success</option>
					</select>
					<label for="exampleInputEmail1">Wedding Hall</label>
					<select name="whID" class="form-control"> 
						@foreach($data_wh as $wh) 
						<option value="{{$wh->id}}">{{$wh->name}}</option>
						@endforeach
					</select>				    
				  </div>
				  
		          <button type="submit" class="btn btn-warning">Update</button>
		        
				</form> 

				</div>
			</div>
@endsection