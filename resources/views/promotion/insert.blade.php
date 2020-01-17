@extends('layout.master')
@section('content')		
			<h1>Insert Promotion to</h1>
			@if(session('success'))
			<div class="alert alert-success" role="alert">
  Done Update
</div>
@endif

			<div class="row">
				<div class="col-lg-12">
				
				<form action="/promotion/{{$data_promotion->id}}/insertOps" method="POST">
				
		        {{csrf_field()}}
					<div class="form-group">
				    
				  		<input name="promotionID" type="hidden" value="{{$data_promotion->id}}"/>
						<label for="exampleInputEmail1">Wedding Hall ID</label>
						<select name="whID" class="form-control"> 
							@foreach($data_wh as $wh) 
							<option value="{{$wh->id}}">{{$wh->name}}</option>
							@endforeach
						</select>
				  
		          		<button type="submit" class="btn btn-warning">Insert</button>
					</div>
				</form> 

					
				</div>
			</div>
@endsection