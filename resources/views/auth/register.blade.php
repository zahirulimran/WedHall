<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WeddHall</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/one-page-wonder.min.css" rel="stylesheet">
</head>
<body>
 <!-- Page Preloder -->
 <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header>
         <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    WedHall
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
         </nav>
    </header>
    <!-- Header End -->
    <section class="hero-area set-bg" data-setbg="{{ ('img/wallpaper.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                
                                <input name="role" type="hidden" value="user">

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right"><p>{{ __('Name') }}</p></label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Name"> 

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right"><p>{{ __('E-Mail Address') }}</p></label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter E-mail Address">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phoneNo" class="col-md-4 col-form-label text-md-right"><p>{{ __('Phone No') }}</p></label>

                                    <div class="col-md-6">
                                        <input id="phoneNo" type="text" class="form-control @error('email') is-invalid @enderror" name="phoneNo" value="{{ old('phoneNo') }}" required autocomplete="phoneNo" placeholder="Enter Phone No">

                                        @error('phoneNo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right"><p>{{ __('Address') }}</p></label>

                                    <div class="col-md-6">
                                        
                                        <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Address "></textarea>
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right"><p>{{ __('Password') }}</p></label>

                                    
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password Exp:Password@123">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><p>{{ __('Confirm Password') }}</p></label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter Password Exp:Password@123">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
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
    <!-- Footer Section Begin -->
    <footer class="footer-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-item">
                                <div class="footer-logo">
                                    <a href="#"><img src="img/author-1.png" alt=""></a>
                                </div>
                                <p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-item">
                                <h5>Contact Info</h5>
                                <ul>
                                    <li><img src="img/placeholder.png" alt="">Lipat Kajang Perdana 7<br />Jasin, Melaka</li>
                                    <li><img src="img/phone.png" alt="">+60 1111 469645</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <div class="row pt-5">
                            <div class="col-lg-12 ">
                                <div class="small text-white text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer> 
    <!-- Footer Section End -->
	
	 <!-- Js Plugins -->
   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.magnific-popup.min.js"></script>
   <script src="js/jquery-ui.min.js"></script>
   <script src="js/jquery.nice-select.min.js"></script>
   <script src="js/jquery.slicknav.js"></script> 
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/main.js"></script>
</body>

</html>
