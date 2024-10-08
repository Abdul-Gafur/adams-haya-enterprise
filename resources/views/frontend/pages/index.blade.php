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

  @endsection