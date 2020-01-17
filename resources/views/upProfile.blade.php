@extends('layout.master')
@section('content')		

			@if(session('success'))
			<div class="alert alert-success" role="alert">
  Done Update
</div>
@endif
<section class="hero-area set-bg" data-setbg="{{ asset('img/wallpaper.jpg') }}">
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Profile') }}</div>

                            <div class="card-body">
                                <form action="/upProfile/{{$data_users->id}}/update" method="POST">
				
		                            {{csrf_field()}}

                                    <input name="role" type="hidden" value="user">
                                    <div class="form-group row">
                                        <label for="exampleInputEmail1" class="col-md-4 col-form-label text-md-right"><p>Name</p></label>

                                        <div class="col-md-6">
                                            <p><input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" value="{{$data_users->name}}"></p>    
                                        </div>
                                    </div>

                                    <input name="password" type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password" value="{{$data_users->password}}"></p> 

                                    <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-md-4 col-form-label text-md-right"><p>PhoneNo</p></label>

                                        <div class="col-md-6">
                                            <p><input name="phoneNo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone No" value="{{$data_users->phoneNo}}"></p>   
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-md-4 col-form-label text-md-right"><p>Email</p></label>

                                        <div class="col-md-6">
                                        <p><input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" value="{{$data_users->email}}"></p>   
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-md-4 col-form-label text-md-right"><p>Address</p></label>

                                        <div class="col-md-6">
                                        <p><textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$data_users->address}}</textarea></p>   
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                        <p><button type="submit" class="btn btn-warning">Update</button></p> 
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection