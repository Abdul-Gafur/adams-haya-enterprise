<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="{{ asset('assets/images/logo.png') }}" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active" id="home">Home</a></li>
          <li><a href="{{ route('frontend.about') }}" id="about">About Us</a></li>
          <li><a href="" id="team">Our Team</a></li>
          <li><a href="" id="services">Services</a></li>
          <li><a href="" id="trucks">Trucks</a></li>
          <li><a href="" id="reviews">Reviews</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-contact" href="#contact">Contact </a>

    </div>
  </header>