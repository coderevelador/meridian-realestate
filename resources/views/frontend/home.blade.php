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

</head>

<body>

    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
        <div class="title-box-d">
            <h3 class="title-d">Search Property</h3>
        </div>
        <span class="close-box-collapse right-boxed ion-ios-close"></span>
        <div class="box-collapse-wrap form">
            <form class="form-a">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="form-group">
                            <label for="Type">Keyword</label>
                            <input type="text" class="form-control form-control-lg form-control-a"
                                placeholder="Keyword">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="Type">Type</label>
                            <select class="form-control form-control-lg form-control-a" id="Type">
                                <option>All Type</option>
                                <option>For Rent</option>
                                <option>For Sale</option>
                                <option>Open House</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="city">City</label>
                            <select class="form-control form-control-lg form-control-a" id="city">
                                <option>All City</option>
                                <option>Alabama</option>
                                <option>Arizona</option>
                                <option>California</option>
                                <option>Colorado</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="bedrooms">Bedrooms</label>
                            <select class="form-control form-control-lg form-control-a" id="bedrooms">
                                <option>Any</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="garages">Garages</label>
                            <select class="form-control form-control-lg form-control-a" id="garages">
                                <option>Any</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="bathrooms">Bathrooms</label>
                            <select class="form-control form-control-lg form-control-a" id="bathrooms">
                                <option>Any</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="price">Min Price</label>
                            <select class="form-control form-control-lg form-control-a" id="price">
                                <option>Unlimite</option>
                                <option>$50,000</option>
                                <option>$100,000</option>
                                <option>$150,000</option>
                                <option>$200,000</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-b">Search Property</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--/ Form Search End /-->

    <!--/ Nav Star /-->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href=""><img src="{{asset('image/logo-meridian.png')}}" alt="" width="70px"></a>
            <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none"
                data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                <span class="fa fa-search" aria-hidden="true"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="property-grid.html">Property</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog-grid.html">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="property-single.html">Property Single</a>
                            <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                            <a class="dropdown-item" href="agents-grid.html">Agents Grid</a>
                            <a class="dropdown-item" href="agent-single.html">Agent Single</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block"
                data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                <span class="fa fa-search" aria-hidden="true"></span>
            </button>
        </div>
    </nav>
    <!--/ Nav End /-->

    <!--/ Carousel Star /-->
    <div class="intro intro-carousel">
        <div id="carousel" class="owl-carousel owl-theme">
            <div class="carousel-item-a intro-item bg-image"
                style="background-image:url({{ asset('/image/frontend/slide-1.jpg') }})">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top">Doral, Florida
                                            <br> 78345
                                        </p>
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">204 </span> Mount
                                            <br> Olive Road Two
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item-a intro-item bg-image"
                style="background-image: url(/image/frontend/slide-2.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top">Doral, Florida
                                            <br> 78345
                                        </p>
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">204 </span> Rino
                                            <br> Venda Road Five
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item-a intro-item bg-image"
                style="background-image: url(/image/frontend/slide-3.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top">Doral, Florida
                                            <br> 78345
                                        </p>
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">204 </span> Alira
                                            <br> Roan Road One
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Carousel end /-->

    <!--/ Services Star /-->
    <section class="section-services section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Our Services</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-gamepad"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Lifestyle</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien
                                massa,
                                convallis a pellentesque
                                nec, egestas non nisi.
                            </p>
                        </div>
                        <div class="card-footer-c">
                            <a href="#" class="link-c link-icon">Read more
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-usd"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Loans</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit.
                                Mauris blandit
                                aliquet elit, eget tincidunt
                                nibh pulvinar a.
                            </p>
                        </div>
                        <div class="card-footer-c">
                            <a href="#" class="link-c link-icon">Read more
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-home"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Sell</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien
                                massa,
                                convallis a pellentesque
                                nec, egestas non nisi.
                            </p>
                        </div>
                        <div class="card-footer-c">
                            <a href="#" class="link-c link-icon">Read more
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Services End /-->

    <!--/ Property Star /-->
    <section class="section-property section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Latest Properties</h2>
                        </div>
                        <div class="title-link">
                            <a href="property-grid.html">All Property
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="property-carousel" class="owl-carousel owl-theme">
                <div class="carousel-item-b">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="{{ asset('image/frontend/property-6.jpg') }}" alt=""
                                class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="property-single.html">206 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">rent | $ 12.000</span>
                                    </div>
                                    <a href="#" class="link-a">Click here to view
                                        <span class="ion-ios-arrow-forward"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-b">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="{{ asset('image/frontend/property-3.jpg') }}" alt=""
                                class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="property-single.html">157 West
                                            <br /> Central Park</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">rent | $ 12.000</span>
                                    </div>
                                    <a href="property-single.html" class="link-a">Click here to view
                                        <span class="ion-ios-arrow-forward"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-b">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="{{ asset('image/frontend/property-7.jpg') }}" alt=""
                                class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="property-single.html">245 Azabu
                                            <br /> Nishi Park let</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">rent | $ 12.000</span>
                                    </div>
                                    <a href="property-single.html" class="link-a">Click here to view
                                        <span class="ion-ios-arrow-forward"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-b">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="{{ asset('image/frontend/property-10.jpg') }}" alt=""
                                class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="property-single.html">204 Montal
                                            <br /> South Bela Two</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">rent | $ 12.000</span>
                                    </div>
                                    <a href="property-single.html" class="link-a">Click here to view
                                        <span class="ion-ios-arrow-forward"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Property End /-->



    <!--/ Testimonials Star /-->
    <section class="section-testimonials section-t8 nav-arrow-a">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Testimonials</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div id="testimonial-carousel" class="owl-carousel owl-arrow">
                <div class="carousel-item-a">
                    <div class="testimonials-box">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="testimonial-img">
                                    <img src="{{ asset('image/frontend/testimonial-1.jpg') }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="testimonial-ico">
                                    <span class="ion-ios-quote"></span>
                                </div>
                                <div class="testimonials-content">
                                    <p class="testimonial-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea
                                        nam praesentium
                                        debitis hic ber quibusdam
                                        voluptatibus officia expedita corpori.
                                    </p>
                                </div>
                                <div class="testimonial-author-box">
                                    <img src="{{ asset('image/frontend/mini-testimonial-1.jpg') }}" alt=""
                                        class="testimonial-avatar">
                                    <h5 class="testimonial-author">Albert & Erika</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-a">
                    <div class="testimonials-box">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="testimonial-img">
                                    <img src="{{ asset('image/frontend/testimonial-2.jpg') }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="testimonial-ico">
                                    <span class="ion-ios-quote"></span>
                                </div>
                                <div class="testimonials-content">
                                    <p class="testimonial-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea
                                        nam praesentium
                                        debitis hic ber quibusdam
                                        voluptatibus officia expedita corpori.
                                    </p>
                                </div>
                                <div class="testimonial-author-box">
                                    <img src="{{ asset('image/frontend/mini-testimonial-2.jpg') }}" alt=""
                                        class="testimonial-avatar">
                                    <h5 class="testimonial-author">Pablo & Emma</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Testimonials End /-->

    <!--/ footer Star /-->
    <section class="section-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="widget-a">
                        <div class="w-header-a">
                            <img src="{{ asset('image/logo-meridian.png') }}" alt="" width="80px">
                            <h3 class="w-title-a text-brand">Meridian Homes Real Estate</h3>
                        </div>
                        <div class="w-body-a">
                            <p class="w-text-a color-text-a">

                            </p>
                        </div>
                        <div class="w-footer-a">
                            <ul class="list-unstyled">
                                <li class="color-a">
                                    <span class="color-text-a">Phone:</span> <a href="tel:+91 9847804032">+91
                                        9847804032</a>
                                </li>
                                <li class="color-a">
                                    <span class="color-text-a">Email:</span><a
                                        href="mailto:support@meridianhomes.co.in"> support@meridianhomes.co.in</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-sm-12 col-md-4 section-md-t3">
                    <div class="widget-a">
                        <div class="w-header-a">
                            <h3 class="w-title-a text-brand">The Company</h3>
                        </div>
                        <div class="w-body-a">
                            <div class="w-body-a">
                                <ul class="list-unstyled">
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Site Map</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Legal</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Agent Admin</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Careers</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Affiliate</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-sm-12 col-md-6 section-md-t3">
                    <div class="widget-a">
                        <div class="w-header-a">
                            <h3 class="w-title-a text-brand">Our Services</h3>
                        </div>
                        <div class="w-body-a">
                            <ul class="list-unstyled">
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a
                                        href="https://www.meridianhomes.co.in/construction-services/"
                                        target="_blank">Construction</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a
                                        href="https://www.meridianhomes.co.in/architectural-design-services/"
                                        target="_blank">Architectural Designing and Planning</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a
                                        href="https://www.meridianhomes.co.in/interior-designing-services/"
                                        target="_blank">Interior Designing Services</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a
                                        href="https://www.meridianhomes.co.in/3d-architectural-rendering-services/"
                                        target="_blank">3d Rendering and 360 degree Views</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#" target="_blank">Structural
                                        Designing Services</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a
                                        href="https://www.meridianhomes.co.in/portfolio/" target="_blank">Our
                                        Portfolio</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="nav-footer">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.meridianhomes.co.in/about-meridian/" target="_blank">About Us</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" target="_blank">Property</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.meridianhomes.co.in/blog/" target="_blank">Blog</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.meridianhomes.co.in/contact-us/" target="_blank">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="socials-a">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyright-footer">
                        <p class="copyright color-text-a">
                            Copyright &copy; 2022
                            <span class="color-a"><b><a href="https://www.meridianhomes.co.in/"
                                        target="_blank">Meridian
                                        Homes</a></b></span> All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ Footer End /-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('lib/popper/popper.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.min.j') }}s"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/scrollreveal/scrollreveal.min.js') }}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{ asset('contactform/contactform.js') }}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>