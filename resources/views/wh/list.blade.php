@extends('layouts.app')
@section('content')		
			@if(session('success'))
			<div class="alert alert-success" role="alert">
  Done Update
</div>
@endif

				<div class="col-6">
				<h1>Hall Details</h1>
				</div>
				<div class="col-6">
				<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModalLong">
	  				Search by Parameter
				</button>
				
				</div>
				

                <div id="Modal">
					<table class="table">
					<tr>
						<th> Name </th>
						<th> Email </th>
						<th> Phone No </th>
						<th> Address </th>
						<th> Price </th>
						<th> Capacity </th>
						<th> Facilities </th>
						<th> Services </th>
						

					</tr>
					@foreach($option as $wh)
					<tr>
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
						<a href="/wh/{{$wh->id}}/edit" class="btn btn-warning btn-sm"> Booking </a>

					</tr>
				@endforeach
				</table>
				</div>
				<!-- Modal Search -->
		<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Search by Parameter</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="{{URL::current()}}">
		        {{csrf_field()}}
				  <div class="form-group">
					<input type="hidden" name="min_price" value=""> <br><br>
					<div class="input-group mb-3">
					<div class="input-group-prepend">
						<button class="btn btn-outline-secondary" type="button">Price</button>
					</div>
					<select name="min_price" class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
								<option selected value=" ">min price</option>
								<option value="0">0</option>
								<option value="200">RM 200</option>
								<option value="300">RM 300</option>
								<option value="400">RM 400</option>
					</select>
					<select name="max_price" class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
								<option selected value=" ">max price</option>
								<option value="500">RM 500</option>
								<option value="600">RM 600</option>
								<option value="700">RM 700</option>
								<option value="800">RM 800</option>
					</select>
					</div>
					
					<div class="input-group mb-3">
					<div class="input-group-prepend">
						<button class="btn btn-outline-secondary" type="button">Location</button>
					</div>
					<select name="locations" class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
								<option selected></option>
								<option value="Bandaraya">Bandaraya Melaka</option>
								<option value="Ayer Keroh">Ayer Keroh</option>
								<option value="Jasin">Jasin</option>
					</select>
					</div>
					<div class="input-group mb-3">
					<div class="input-group-prepend">
						<button class="btn btn-outline-secondary" type="button">Capacity</button>
					</div>
					<select name="caps" class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
								<option selected></option>
								<option value="300"><=300</option>
								<option value="400"><=400</option>
								<option value="500"><=500</option>
								<option value="600"><=600</option>
					</select>
					</div>
					<div class="input-group mb-3">
					<div class="input-group-prepend">
						<button class="btn btn-outline-secondary" type="button">Facilities</button>
					</div>
					<select name="fac" class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
								<option selected></option>
								<option value="Parking Lot">Parking Lot</option>
								<option value="Room">Room</option>
					</select>
					</div>
					<div class="input-group mb-3">
					<div class="input-group-prepend">
						<button class="btn btn-outline-secondary" type="button">Services</button>
					</div>
					<select name="ser" class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
								<option selected></option>
								<option value="D'Serai">D'Serai Catering</option>

					</select>
					</div>
				  </div>
				 	

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Submit</button>
				</form> 
		      </div>
		    </div>
		  </div>
@endsection