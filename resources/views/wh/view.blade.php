@extends('layouts.app')
@section('content')		
			@if(session('success'))
			<div class="alert alert-success" role="alert">{{session('success')}}
			</div>
			@endif
            
				
				<h1>Hall Details</h1>
        <div class="row">
			<div class="col-lg-12">
				
					<table class="table">
					<tr>
						<th> Name </th>
						<th> Email </th>
						<th> Phone No </th>
						<th> Price </th>
						<th> Capacity </th>

					</tr>

					<tr>
						<td>{{$data_wh->name}}</td>
						<td>{{$data_wh->email}}</td>
						<td>{{$data_wh->phoneNo}}</td>
						<td>{{$data_wh->price}}</td>
						<td>{{$data_wh->capacity}}</td>
					</tr>

				</table>
			</div>
        </div>
@endsection
