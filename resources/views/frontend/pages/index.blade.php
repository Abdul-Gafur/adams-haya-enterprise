@extends('frontend.layouts')

@section('content')
    {{-- HERO SECTION START --}}
    <section id="hero" class="hero section dark-background">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active">
                <img src="{{ asset('assets/images/hero-img.png') }}" alt="">
                <div class="carousel-container">
                    <h2>Timely sand deliveries for construction projects of any size<br></h2>
                    <p>Explore our range of powerful and reliable trucks designed to meet your needs</p>
                    <a href="#featured-services" class="btn-get-started">Explore Our Construction Solutions</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="{{ asset('assets/images/hero-img.png') }}" alt="">
                <div class="carousel-container">
                    <h2>Timely sand deliveries for construction projects of any size<br></h2>
                    <p>Explore our range of powerful and reliable trucks designed to meet your needs</p>
                    <a href="#featured-services" class="btn-get-started">Explore Our Construction Solutions</a>
                </div>
            </div><!-- End Carousel Item -->

            <ol class="carousel-indicators">
                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-arrow-left-circle" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-arrow-right-circle" aria-hidden="true"></span>
                </a>
            </ol>

        </div>

    </section>

    {{-- HERO SECTION ENDS --}}

    {{-- HOMEPAGE VIDEO SECTION STARTS --}}
    <section class="home-vid">
        <img src="{{ asset('assets/images/home-vid.png') }}" alt="" class="img-fluid">
    </section>

    {{-- HOMEPAGE VIDEO SECTION ENDS --}}

    {{-- PARNERS SECTION START --}}
    <section class="partners">
        <div class="container">
            <div class="section-title">
                <h2>Partners</h2>
            </div>


            <div class="row justify-content-center">
                <div class="partner-item col-lg-4 d-flex justify-content-center">
                    <a href="https://namibra.io" target="_blank"><img src="{{ asset('assets/images/partners/namibra.png') }}" alt="" class="img-fluid"></a>
                </div>
                <div class="partner-item col-lg-4 d-flex justify-content-center">
                    <a href="#" target="_blank">
                        <img src="{{ asset('assets/images/partners/star-oil.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="partner-item col-lg-4 d-flex justify-content-center">
                    <a href="#" target="_blank"><img src="{{ asset('assets/images/partners/moe.png') }}"
                            alt="" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </section>
    {{-- PARNERS SECTION ENDS --}}

    <section class="trucks">
        <div class="container">
            <div class="section-title">
                <h2>Featured Trucks</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 py-4">
                    <div class="truck d-flex">
                        <div class="truck-details">
                            <h2>Tipper Truck</h2>
                            <p>Tipper trucks are designed to meet the demands of construction projects. They are
                                efficient, reliable and easy to operate.</p>
                        </div>
                        <img src="{{ asset('assets/images/trucks/tipper.png') }}" alt="" class="img-fluid truck-img">
                    </div>
                </div>
                <div class="col-lg-6 py-4">
                    <div class="truck d-flex">
                        <div class="truck-details">
                            <h2>Tankers</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim harum veritatis dolore ex, provident necessitatibus assumenda quia eveniet, voluptas mollitia repellat alias inventore nostrum nulla aliquid molestiae consequatur consectetur amet.</p>
                        </div>
                        <img src="{{ asset('assets/images/trucks/tanker.png') }}" alt="" class="img-fluid truck-img">
                    </div>
                    </div>
                <div class="col-lg-6 py-4">
                    <div class="truck d-flex">
                        <div class="truck-details">
                            <h2>Wheeler Dump Truck</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit autem ut cum porro dolores sequi ex nulla odit, perspiciatis sint earum incidunt deleniti sed veritatis laudantium nisi! Perspiciatis, assumenda earum!</p>
                        </div>
                        <img src="{{ asset('assets/images/trucks/wheeler.png') }}" alt="" class="img-fluid truck-img">
                    </div>
                </div>
                <div class="col-lg-6 py-4">
                    <div class="truck d-flex">
                        <div class="truck-details">
                            <h2>Tipper Truck</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore quis soluta provident. Repudiandae, reiciendis? Nostrum facilis deleniti iusto id ab omnis vitae illo inventore, magni, possimus vero reprehenderit minus ipsa!</p>
                        </div>
                        <img src="{{ asset('assets/images/trucks/tipper.png') }}" alt="" class="img-fluid truck-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
