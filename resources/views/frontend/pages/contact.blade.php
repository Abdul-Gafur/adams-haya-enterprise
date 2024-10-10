@extends('frontend.layouts')

@section('content')
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="row justify-content-center w-100">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="contact-form-wrapper text-center">
                <h2>Send Us a Message</h2>
                <div class="contact-form">
                    <form action="">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        <textarea name="message" class="form-control" id="message" placeholder="Message"rows="5" required></textarea>
                        <input type="submit" value="Submit" class="subscribe-btn mt-3">
                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection