@extends('frontend.layouts')

@section('content')

<main class="about">
    <h2>Adams Haya Enterprise</h2>

    <img src="{{ asset('assets/images/about-hero.png') }}" alt="">

    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/about-img.png') }}" alt="about image">
                </div>

                <div class="about-content col-lg-6">
                    <h2>Who we are</h2>
                    <p>Welcome to Adams Haya enterprise, a trusted leader in the truck industry, dedicated to delivering top-quality trucks and exceptional services to businesses and individuals alike. With a passion for innovation and a commitment to customer satisfaction, we’ve grown from a small startup to a renowned name in the trucking world.</p>
                    <a href="#" class="btn-more">Explore Our Services</a>
                </div>
            </div>
        </div>
    </section>


    {{-- MISSION SECTION START --}}
    <section class="mission">
        <div class="content">
            <h2>Our Mission</h2>
            <p>At Adams Haya Enterprise, we aim to provide reliable, high-performance trucks that meet the diverse needs of our clients. Whether you're looking for a robust commercial fleet, or a heavy-duty personal truck, we’ve got the perfect solution tailored just for you.</p>
            <a href="#" class="btn-more trasparent-bg">Explore Our Services</a>
        </div>
    </section>
    {{-- MISSION SECTION END --}}

    <section class="home-vid">
        <img src="{{ asset('assets/images/home-vid.png') }}" alt="" class="img-fluid">
    </section>
</main>

@endsection