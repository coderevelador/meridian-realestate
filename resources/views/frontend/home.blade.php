@extends('layouts.app')
@section('contents')
    <!--/ Carousel Star /-->
    <div class="intro intro-carousel">
        <div id="carousel" class="owl-carousel owl-theme">
            <div class="carousel-item-a intro-item bg-image"
                style="background-image:url({{ asset('/image/frontend/Meridian-Homes-Property-sales-in-Pala.jpg') }})">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body"><br>
                                        <h1 class="intro-title mb-4 ">
                                            Own your dream <span class="color-b">Home </span>
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="{{ route('all-properties') }}"><span class="price-a">View
                                                    All</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item-a intro-item bg-image"
                style="background-image: url(/image/frontend/Properties-listing.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <br>
                                        <h1 class="intro-title mb-4">
                                            <br> സ്വന്തമാക്കൂ<br> നിങ്ങളുടെ <span class="color-b">സ്വപ്ന ഭവനം </span>
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="{{ route('all-properties') }}"><span class="price-a">View All</span></a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item-a intro-item bg-image"
                style="background-image: url(/image/frontend/Realestate-listing.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <br>
                                        <h1 class="intro-title mb-4">
                                            List Your <span class="color-b">Properties </span>
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="tel:+91 9847804032"><span class="price-a">Contact Us</span></a>
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
                            <a href="{{ route('all-properties') }}">All Property
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div id="property-carousel" class="owl-carousel owl-theme">
                @foreach ($properties as $property)
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="image/properties/{{ $property->image }}" alt="" width="auto"
                                    height="300px">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a
                                                href="{{ route('property-single', $property->id) }}">{{ $property->name }}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">{{ $property->statues->name }} | ₹
                                                {{ $property->price }}</span>
                                        </div>
                                        <a href="{{ route('property-single', $property->id) }}" class="link-a">Click here to
                                            view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>
                                                    {{ $property->area }} sq.ft
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>{{ $property->bedroom }}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>{{ $property->bathroom }}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Types</h4>
                                                <span>{{ $property->types->name }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--/ Property End /-->


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
                                <span class="fa fa-home"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Construction</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c" style="text-align: justify">
                                Meridian Home Construction is one of the top construction companies in Pala, Kottayam,
                                Kerala. Our goal is to provide high-quality buildings to meet our clients’ construction
                                demands in Kottayam.
                            </p>
                        </div>
                        <div class="card-footer-c">
                            <a href="https://www.meridianhomes.co.in/construction-services/" class="link-c link-icon">Read
                                more
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-object-group"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Architectural Designing and Planning</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c" style="text-align: justify">
                                Based on the client's requirements and needs Meridian Homes architectural designers create
                                ideal architecture. Various architectural styles are used based on the client's interests
                                and needs.
                            </p>
                        </div>
                        <div class="card-footer-c">
                            <a href="https://www.meridianhomes.co.in/architectural-design-services/"
                                class="link-c link-icon">Read more
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-video-camera"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">3D Designing</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c" style="text-align: justify">
                                We offer the best 3D modelling and design services in Kerala. At Meridian Homes, you can
                                create stunning 360-degree views of your home ideas.
                            </p>
                        </div>
                        <div class="card-footer-c">
                            <a href="https://www.meridianhomes.co.in/3d-architectural-rendering-services/"
                                class="link-c link-icon">Read more
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Services End /-->




    <!--/ Testimonials Star /-->
    <section class="section-testimonials section-t8 nav-arrow-a">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">3d Visualization</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div id="testimonial-carousel" class="owl-carousel owl-arrow">
                <div class="carousel-item-a">
                    <div class="testimonials-box">
                        <div class="row">
                            <div class="embed-responsive embed-responsive-16by9">

                                <iframe width="1156" height="650" src="https://www.youtube.com/embed/9nn43XbOGu4"
                                    title="4bhk Luxury Home in Pala | 2612 sq. ft | Meridian Homes" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--/ Testimonials End /-->
@endsection
