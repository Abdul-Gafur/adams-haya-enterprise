@extends('frontend.layouts')

@section('content')
    <main id="services">
        <div class="breadcrump-title">
            <h2>What We Do</h2>
        </div>

        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="service" style="background-image: url({{ asset('assets/images/service1.png') }})">
                            <div class="service-details">
                                <h2>Deliver Oil to Filling Stations</h2>
                                <p>Welcome to Adams Haya enterprise, a trusted leader in the truck industry, dedicated to
                                    delivering top-quality trucks and exceptional services to businesses and individuals
                                    alike. With a passion for innovation and a commitment to customer satisfaction, we’ve
                                    grown from a small startup to a renowned name in the trucking world.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="service" style="background-image: url({{ asset('assets/images/service2.png') }})">
                            <div class="service-details">
                                <h2>Deliver Oil to Filling Stations</h2>
                                <p>Welcome to Adams Haya enterprise, a trusted leader in the truck industry, dedicated to
                                    delivering top-quality trucks and exceptional services to businesses and individuals
                                    alike. With a passion for innovation and a commitment to customer satisfaction, we’ve
                                    grown from a small startup to a renowned name in the trucking world.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="why-choose-us">
            <div class="container">
                <div class="row align-items-center">
                    <div class="content col-lg-4">
                        <h2>Why Work With Us?</h2>
                        <p>We provide these qualities that makes us the benchmarks for our logistics</p>
                    </div>

                    <div class="features col-lg-8">
                        <div class="feature">
                            <img src="{{ asset('assets/images/reliable.png') }}" alt="" class="img-fluid">
                            <p class="pt-4">Reliable</p>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('assets/images/efficient.png') }}" alt="" class="img-fluid">
                            <p class="pt-4">Efficient</p>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('assets/images/safe.png') }}" alt="" class="img-fluid">
                            <p class="pt-4">Safely Oriented</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/images/divided-truck.png') }}" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6">
                        <div class="content">
                            <h2>Connecting Industries with Seamless Logistics</h2>
                            <p>Our logistics services connect industries by providing the fuel and materials that power progress. We specialize in delivering vital resources, from petrol stations to construction sites, with unmatched efficiency. With a modern fleet and expert team, we ensure a smooth, hassle-free process every time. Let us bridge the gap between your business needs and timely deliveries.</p>
                            <a href="#" class="btn-more mx-0">Contact Us Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
