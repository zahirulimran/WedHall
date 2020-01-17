@extends('layouts.app')
@section('content')		
			@if(session('success'))
			<div class="alert alert-success" role="alert">{{session('success')}}
</div>
@endif

			<div class="row">

				<div class="col-6">
				<h1>Services Details</h1></div>
				
				<div class="col-6">
				<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModalLong">
	  Add Services
	</button>

				</div>	
					<table class="table">
					<tr>
						<th> Services </th>
						<th> Type </th>
						<th> Contact </th>
						<th> </th>

					</tr>
					@foreach($data_services as $services)
					<tr>
						<td>{{$services->services}}</td>
						<td>{{$services->type}}</td>
						<td>{{$services->contact}}</td>
						<td>
						<a href="/services/edit/{{$services->id}}" class="btn btn-warning btn-sm"> Update </a>
						<a href="/services/{{$services->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Delete')"> Delete </a>
						<a href="/services/insert/{{$services->id}}" class="btn btn-secondary btn-sm"> Insert to WH </a></td></td>

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
		        <form action="/services/create" method="POST">
		        {{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Services</label>
				    <input name="services" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Services">
				    <label for="exampleInputEmail1">Type</label>
				    <input name="type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Type">
					<label for="exampleInputEmail1">Contact</label>
				    <input name="contact" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Number Phone">
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