@extends('layout.master')
@section('content')		
			@if(session('success'))
			<div class="alert alert-success" role="alert">{{session('success')}}
			</div>
			@endif
    <!-- Hero Area Section Begin -->
    <section class="hero-area set-bg" data-setbg="img/wallpaper.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero-text">
                        <h1>Halls</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area Section End -->

    <!-- Search Filter Section Begin -->

    <section class="search-filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <form action="{{URL::current()}}" class="check-form">
		            {{csrf_field()}}
                        <h4>Search By Parameter</h4>
                        <div class="room-quantity">
                            <div class="single-quantity">
                            <p>Min Price</p>
                            <select name="min_price" class="suit-select" id="inputGroupSelect03" aria-label="Example select with button addon">
								<option selected value=" "></option>
								<option value="0">0</option>
								<option value="200">RM 200</option>
								<option value="300">RM 300</option>
								<option value="400">RM 400</option>
                            </select>
                            </div>
                            <div class="single-quantity last">
                            <p>Max Price</p>
                            <select name="max_price" class="suit-select" id="inputGroupSelect03" aria-label="Example select with button addon">
								<option selected value=" "></option>
								<option value="500">RM 500</option>
								<option value="600">RM 600</option>
								<option value="700">RM 700</option>
                                <option value="800">RM 800</option>
                            </select>
                            </div>
                        </div>
                        <div class="room-selector">
                            <p>Location</p>
                            <select name="locations" class="suit-select" id="inputGroupSelect03" aria-label="Example select with button addon">
								<option selected></option>
								<option value="Bandaraya">Bandaraya Melaka</option>
								<option value="Ayer Keroh">Ayer Keroh</option>
                                <option value="Jasin">Jasin</option>
                            </select>
                        </div>
                        <div class="room-selector">
                            <p>Capacity</p>
                            <select name="caps" class="suit-select" id="inputGroupSelect03" aria-label="Example select with button addon">
								<option selected></option>
								<option value="300">300 People</option>
								<option value="400">400 People</option>
								<option value="500">500 People</option>
								<option value="600">600 People</option>
                            </select>
                        </div>
                    
		                <button type="submit" class="btn btn-primary">Submit</button>
				        </form> 
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Search Filter Section End -->
    
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
                    
                    @foreach($option as $wh)
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-10">
                            <img src="..." class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$wh->name}}</h5>
                                    <p class="card-text"><img src="img/placeholder.png" alt="">  {{$wh->address}}</p>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><img src="img/phone.png" alt="">{{$wh->phoneNo}} / {{$wh->email}}</p>
                                    <p class="card-text">{{$wh->capacity}}people    -RM{{$wh->price}}*-</p>
                                    <p class="card-text">Service(
                                    @foreach($wh->ser as $ser)
                                        @if($loop->iteration > 1)
                                            |
                                        @endif
                                            {{$ser->type}}
                                    @endforeach
                                    )</p>
                                </div>

                                <a href="/bk/{{$wh->id}}" class="btn btn-primary"> Booking </a> 
                            </div>
                        </div>
                    </div>
                @endforeach 
                </div>
            </div>
        </div>
    </section>
    <!-- Intro Text Section End -->

    <!-- Facilities Section Begin -->
    <section class="facilities-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="facilities-item set-bg" data-setbg="img/catering2.jpg">
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
                    <div class="facilities-item set-bg fi-right" data-setbg="img/photography.jpg">
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
                                <img src="img/home-about-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="img/home-about-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="img/home-about-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="img/home-about-4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Home Page About Section End -->
@endsection