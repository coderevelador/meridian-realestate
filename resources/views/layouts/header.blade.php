<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Meridian Homes Property Sales</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ asset('image/logo-meridian.png') }}" rel="icon">
    <link href="{{ asset('image/logo-meridian.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css" rel="stylesheet') }}">
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- Toastr Notification --}}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css"
        rel="stylesheet"> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>

<body>


    <!--/ Nav Star /-->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand mx-auto" href="{{ route('website-home') }}"><img
                    src="{{ asset('image/logo-meridian.png') }}" alt="" width="70px"></a>

            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('website-home') ? 'active' : '' }}"
                            href="{{ route('website-home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="https://www.meridianhomes.co.in/about-meridian/"
                            target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('all-properties') ? 'active' : '' }}"
                            href="{{ route('all-properties') }}">All Property</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.meridianhomes.co.in/blog/" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact-us')}}" >Contact
                            Us</a>
                    </li>
                </ul>

            </div>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <a href="https://api.whatsapp.com/send?phone=+919847804032&text=Enquiry for meridian property sale."
                class="float" target="_blank">
                <i class="fa fa-whatsapp my-float"></i>
            </a>
        </div>

    </nav>
