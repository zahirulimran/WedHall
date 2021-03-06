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
                        <h1>Home</h1>
                    </div>
                    <a class="nav-link" href="/adminlte">Dashboard</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area Section End -->


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