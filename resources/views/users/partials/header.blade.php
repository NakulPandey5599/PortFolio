<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="{{route('home')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <!-- Uncomment the line below if you also wish to use an text logo -->
        <!-- <h1 class="sitename">Style</h1>  -->
      </a>

      <nav id="navmenu" class="navmenu">

        <div class="profile-img">
          <img src="assets/img/profile/profile-square-1.webp" alt="" class="img-fluid rounded-circle">
        </div>

        <a href="{{route('home')}}" class="logo d-flex align-items-center justify-content-center active">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.webp" alt=""> -->
          <h1 class="sitename">Nakul Pandey</h1>
        </a>

        <div class="social-links text-center">
          {{-- <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> --}}
          <a href="{{$profile->github}}"target="_blank" class="google-plus"><i class="bi bi-github"></i></a>
          <a href="{{$profile->linkedin}}" target="_blank"class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

        <ul>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/resume">Resume</a></li>
          <li><a href="/projects">Projects</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>