@extends('layout.master')
@section('content')		
			@if(session('success'))
			<div class="alert alert-success" role="alert">{{session('success')}}
</div>
@endif

			<div class="row">

				<div class="col-6">
				<h1>Promotion Details</h1></div>
				
				<div class="col-6">
				<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModalLong">
	  Add Promotion
	</button>

				</div>	
					<table class="table">
					<tr>
						<th> Promotion </th>
						<th> Type </th>

					</tr>
					@foreach($data_promotion as $promotion)
					<tr>
						<td>{{$promotion->promotion}}</td>
						<td>{{$promotion->type}}</td>
						<td>
						<a href="/promotion/{{$promotion->id}}/edit" class="btn btn-warning btn-sm"> Update </a>
						<a href="/promotion/{{$promotion->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Delete')"> Delete </a>
						<a href="/promotion/{{$promotion->id}}/insert" class="btn btn-secondary btn-sm"> Insert to WH </a></td></td>

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
		        <form action="/promotion/create" method="POST">
		        {{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Promotion</label>
				    <input name="promotion" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Promotion">
				    <label for="exampleInputEmail1">Type</label>
				    <input name="type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Type">
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