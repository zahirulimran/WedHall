@extends('layouts.app')
@section('content')		
			@if(session('success'))
			<div class="alert alert-success" role="alert">{{session('success')}}
			</div>
			@endif

			<div class="row">

				<div class="col-6">
				<h1>User Details</h1></div>
					
				<table class="table">
					<tr>
						<th> Nama </th>
						<th> Password </th>
						<th> Phone No </th>
						<th> Email </th>
						<th> Address </th>

					</tr>
					@foreach($data_users as $user)
					<tr>
						<td>{{$user->name}}</td>
						<td>{{$user->password}}</td>
						<td>{{$user->phoneNo}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->address}}</td>
						<td>
						<a href="/user/{{$user->id}}/edit" class="btn btn-warning btn-sm"> Update </a>
						<a href="/user/{{$user->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Delete')"> Delete </a></td>

					</tr>
				@endforeach
				</table>
			</div>

@endsection
