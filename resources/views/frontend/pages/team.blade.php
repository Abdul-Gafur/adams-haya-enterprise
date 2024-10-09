@extends('frontend.layouts');

@section('content')

    <main class="team">
        <div class="container">
            <div class="breadcrump-title">
                <h2>The Team</h2>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <div class="team-img">
                                <img src="{{ asset('assets/images/team/team1.png') }}" alt="" class="img-fluid">
                            </div>

                            <div class="team-details">
                                <h2>Name</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, delectus ea!.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <div class="team-img">
                                <img src="{{ asset('assets/images/team/team2.png') }}" alt="" class="img-fluid">
                            </div>

                            <div class="team-details">
                                <h2>Name</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, delectus ea!.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <div class="team-img">
                                <img src="{{ asset('assets/images/team/team3.png') }}" alt="" class="img-fluid">
                            </div>

                            <div class="team-details">
                                <h2>Name</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, delectus ea!.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <div class="team-img">
                                <img src="{{ asset('assets/images/team/team4.png') }}" alt="" class="img-fluid">
                            </div>

                            <div class="team-details">
                                <h2>Name</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, delectus ea!.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <div class="team-img">
                                <img src="{{ asset('assets/images/team/team5.png') }}" alt="" class="img-fluid">
                            </div>

                            <div class="team-details">
                                <h2>Name</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, delectus ea!.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <div class="team-img">
                                <img src="{{ asset('assets/images/team/team6.png') }}" alt="" class="img-fluid">
                            </div>

                            <div class="team-details">
                                <h2>Name</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, delectus ea!.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @endsection