@extends('layout.master')
@section('content')	

@if(session('fail'))
	<div class="alert alert-warning" role="alert">{{session('fail')}}
	</div>
@elseif(session('success'))
	<div class="alert alert-success" role="alert">{{session('success')}}
	</div>
@endif


			<div class="row">

				<div class="col-6">
				<h1>Facilities Details</h1></div>
				
				<div class="col-6">
				<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModalLong">
	  Add Facilities
	</button>

				</div>	
					<table class="table">
					<tr>
						<th> Facilities </th>
						<th> Type </th>

					</tr>
					@foreach($data_facilities as $facilities)
					<tr>
						<td>{{$facilities->fac}}</td>
						<td>{{$facilities->type}}</td>
						<td>
						<a href="/facilities/{{$facilities->id}}/edit" class="btn btn-warning btn-sm"> Update </a>
						<a href="/facilities/{{$facilities->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Delete')"> Delete </a>
						<a href="/facilities/{{$facilities->id}}/insert" class="btn btn-secondary btn-sm"> Insert to WH </a></td>

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
		        <form action="/facilities/create" method="POST">
		        {{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Facilities</label>
				    <input name="fac" id="fac" type="text" class="form-control" required autocomplete="fac" placeholder="Enter Facilities(max 20)">
				    <label for="exampleInputEmail1">Type</label>
				    <input name="type" id="type" type="text" class="form-control" required autocomplete="type" placeholder="Enter Type(max 20)">
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