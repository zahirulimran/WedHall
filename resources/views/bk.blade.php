@extends('layout.master')
@section('content')		
			@if(session('success'))
			<div class="alert alert-success" role="alert">{{session('success')}}
			</div>
			@endif
    <!-- Hero Area Section Begin -->
    <section class="hero-area set-bg" data-setbg="{{ asset('img/wallpaper.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero-text">
                        <h1>Booking</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area Section End -->
				
<!-- Intro Text Section Begin -->
<section class="intro-section spad">
        <div class="container">
            <div class="row intro-text">
                <div class="col-mg-6">
                    <div class="intro-left">
                        <div class="section-title">
                            <span>Wedding Halls</span>
                        </div>
                    </div>
                    
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-10">
                            <img src="..." class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$data_wh->name}}</h5>
                                    <p class="card-text"><img src="img/placeholder.png" alt="">  {{$data_wh->address}}</p>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><img src="img/phone.png" alt="">{{$data_wh->phoneNo}} / {{$data_wh->email}}</p>
                                    <p class="card-text">{{$data_wh->capacity}}</p>
                                    <p class="card-text">RM{{$data_wh->price}}</p>
                                </div>
                                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModalLong">
	                                Booking
	                            </button>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </section>
    <!-- Intro Text Section End -->

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
		        <form action="/bk/create" method="POST">
		        {{csrf_field()}}
				  <div class="form-group">
				    <p>Date From</p>
				    <input name="adate" type="text" class="form-control" id="adate" aria-describedby="emailHelp" placeholder="Year/Month/Day">
					<p>Date To</p>
				    <input name="ddate" type="text" class="form-control" id="ddate" aria-describedby="emailHelp" placeholder="Year/Month/Day">
				    <p>Time From</p>
				    <input name="atime" type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Time">
					<p>Time To</p>
				    <input name="dtime" type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Time">
                    <input name="status" type="hidden" value="pending">
					<input name="userID" type="hidden" value="{{ Auth::user()->id }}"/>
					<input name="whID" type="hidden" value="{{ $data_wh->id }}"/>
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


    <!-- Facilities Section Begin -->
    <section class="facilities-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="facilities-item set-bg" data-setbg="{{ asset('img/catering2.jpg') }}">
                        <div class="fi-title">
                            <h2>D'Serai Catering</h2>
                            <p>From RM7000</p>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                        <a href="#" class="primary-btn">Make a Reservation</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="facilities-item set-bg fi-right" data-setbg="{{ asset('img/photography.jpg') }}">
                        <div class="fi-title">
                            <h2>LoveStep Photographer</h2>
                            <p>From RM1800</p>
                        </div>
                        <a href="#" class="primary-btn">Make a Reservation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Facilities Section End -->

    <!-- Home Page About Section Begin -->
    <section class="homepage-about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h2>“Customers love <br />Zack”</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus libero mauris, bibendum eget
                            sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna fermentum ornare. Morbi vel
                            ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae orci. Suspendisse maximus
                            malesuada. </p>
                        <a href="#" class="btn btn-primary">Make a Reservation</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="{{ asset('img/home-about-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="{{ asset('img/home-about-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="{{ asset('img/home-about-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="{{ asset('img/home-about-4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Page About Section End -->
@endsection
