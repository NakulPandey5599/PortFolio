@extends('users.partials.master')
@section('main')
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container">
                <div class="row g-0 align-items-center">

                    <div class="col-lg-6 hero-content" data-aos="fade-right" data-aos-delay="100">
                        <div class="content-wrapper">
                            <h1 class="hero-title">{{ "$profile->name" }}<span class="typed"
                                    data-typed-items="Designer, Developer, Freelancer, Artist"></span></h1>
                            <p class="lead">{{ "$profile->tagline" }}</p>

                            <div class="hero-stats" data-aos="fade-up" data-aos-delay="200">
                                <div class="stat-item">
                                    <span class="purecounter" data-purecounter-start="0"
                                        data-purecounter-end="{{ $projectCount }}" data-purecounter-duration="2">0</span>
                                    <span class="stat-label">Projects Completed</span>
                                </div>
                                <div class="stat-item">
                                    <span class="purecounter" data-purecounter-start="0" data-purecounter-end="0"
                                        data-purecounter-duration="2">0</span>
                                    <span class="stat-label">Years Experience</span>
                                </div>
                                {{-- <div class="stat-item">
                                <span class="purecounter" data-purecounter-start="0" data-purecounter-end="98"
                                    data-purecounter-duration="2">0</span>
                                <span class="stat-label">Happy Clients</span>
                            </div> --}}
                            </div>

                            <div class="hero-actions" data-aos="fade-up" data-aos-delay="300">
                                <a href="{{ route('projects') }}" class="btn btn-primary">View My Work</a>
                                <a href="#contact" class="btn btn-outline">Get In Touch</a>
                            </div>

                            <div class="social-links" data-aos="fade-up" data-aos-delay="400">
                                {{-- <a href=><i class="bi bi-twitter-x"></i></a> --}}
                                <a href={{ "$profile->linkedin" }}><i class="bi bi-linkedin"></i></a>
                                <a href={{ "$profile->github" }}><i class="bi bi-github"></i></a>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 hero-image" data-aos="fade-left" data-aos-delay="200">
                        <div class="image-container">
                            <div class="floating-elements">
                                <div class="floating-card card-1" data-aos="zoom-in" data-aos-delay="300">
                                    <i class="bi bi-palette"></i>
                                    <span>UI/UX Design</span>
                                </div>
                                <div class="floating-card card-2" data-aos="zoom-in" data-aos-delay="400">
                                    <i class="bi bi-code-slash"></i>
                                    <span>Development</span>
                                </div>
                                <div class="floating-card card-3" data-aos="zoom-in" data-aos-delay="500">
                                    <i class="bi bi-lightning"></i>
                                    <span>Creative Ideas</span>
                                </div>
                            </div>
                            <img src="assets/img/profile/profile-square-1.webp" alt="Portfolio Hero"
                                class="img-fluid hero-main-image">
                            <div class="image-overlay"></div>
                        </div>
                    </div>

                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>About</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">

                    <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
                        <div class="profile-image-wrapper">
                            <div class="profile-image">
                                <img src="assets/img/profile/profile-square-1.webp" alt="Profile" class="img-fluid">
                            </div>
                            <div class="signature-section">
                                <img src="assets/img/misc/signature-1.webp" alt="Signature" class="signature">
                                <p class="quote">Building meaningful digital experiences through creative code.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
                        <div class="about-content">
                            <div class="intro">
                                <h2>Hi, I'm {{ "$profile->name" }} - a Creative Developer</h2>
                                <p>{{ "$profile->description" }}</p>
                            </div>

                            <div class="skills-grid">
                                <div class="skill-item" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="skill-icon">
                                        <i class="bi bi-palette"></i>
                                    </div>
                                    <h4>UI/UX Design</h4>
                                    <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar</p>
                                </div>
                                <div class="skill-item" data-aos="zoom-in" data-aos-delay="450">
                                    <div class="skill-icon">
                                        <i class="bi bi-code-slash"></i>
                                    </div>
                                    <h4>Frontend Dev</h4>
                                    <p>Sed porttitor lectus nibh. Cras ultricies ligula sed magna</p>
                                </div>
                                <div class="skill-item" data-aos="zoom-in" data-aos-delay="500">
                                    <div class="skill-icon">
                                        <i class="bi bi-camera"></i>
                                    </div>
                                    <h4>Photography</h4>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum</p>
                                </div>
                            </div>
                            {{--                         
                        <div class="journey-timeline" data-aos="fade-up" data-aos-delay="300">
                            <div class="timeline-item">
                                <div class="year">2019</div>
                                <div class="description">Graduated with B.A. in Digital Design from Creative University
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="year">2020</div>
                                <div class="description">Joined InnovateTech as Junior Frontend Developer</div>
                            </div>
                            <div class="timeline-item">
                                <div class="year">2023</div>
                                <div class="description">Launched freelance career specializing in creative web
                                    solutions</div>
                            </div>
                        </div> --}}

                            <div class="cta-section" data-aos="fade-up" data-aos-delay="400">
                                <div class="fun-fact">
                                    <span class="emoji">☕</span>
                                    <span class="text">Coffee-fueled developer based in India</span>
                                </div>
                                <div class="action-buttons">
                                    <a href="{{ route('projects') }} " class="btn btn-primary">View My Work</a>
                                    <a href="#" class="btn btn-outline">Download Resume</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Skills Section -->
        <section id="skills" class="skills section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">
                    <div class="col-lg-8">
                        <div class="skills-grid">
                            <div class="row g-4">
                                <div class="col-md-6" data-aos="flip-left" data-aos-delay="200">
                                    <div class="skill-card">
                                        <div class="skill-header">
                                            <i class="bi bi-code-slash"></i>
                                            <h3>Frontend Development</h3>
                                        </div>
                                        <div class="skills-animation">
                                            @foreach ($skills as $item)
                                                @if ($item->categories == 0)
                                                    <div class="skill-item">
                                                        <div class="skill-info">
                                                            <span class="skill-name">{{ $item->skill_name }}</span>
                                                            <span class="skill-percentage">{{ $item->level }}</span>
                                                        </div>
                                                        <div class="skill-bar progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div><!-- End Frontend Card -->
                                </div>

                                <div class="col-md-6" data-aos="flip-left" data-aos-delay="300">
                                    <div class="skill-card">
                                        <div class="skill-header">
                                            <i class="bi bi-server"></i>
                                            <h3>Backend Development</h3>
                                        </div>
                                        <div class="skills-animation">
                                            @foreach ($skills as $item)
                                                @if ($item->categories == 1)
                                                    <div class="skill-item">
                                                        <div class="skill-info">
                                                            <span class="skill-name">{{ $item->skill_name }}</span>
                                                            <span class="skill-percentage">{{ $item->level }}</span>
                                                        </div>
                                                        <div class="skill-bar progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div><!-- End Backend Card -->
                                </div>

                                <div class="col-md-6" data-aos="flip-left" data-aos-delay="400">
                                    <div class="skill-card">
                                        <div class="skill-header">
                                            <i class="bi bi-palette"></i>
                                            <h3>Design &amp; Tools</h3>
                                        </div>
                                        <div class="skills-animation">
                                            @foreach ($skills as $item)
                                                @if ($item->categories == 2)
                                                    <div class="skill-item">
                                                        <div class="skill-info">
                                                            <span class="skill-name">{{ $item->skill_name }}</span>
                                                            <span class="skill-percentage">{{ $item->level }}</span>
                                                        </div>
                                                        <div class="skill-bar progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach


                                        </div>
                                    </div><!-- End Design Card -->
                                </div>

                                <div class="col-md-6" data-aos="flip-left" data-aos-delay="500">
                                    <div class="skill-card">
                                        <div class="skill-header">
                                            <i class="bi bi-cloud"></i>
                                            <h3>Cloud &amp; DevOps</h3>
                                        </div>
                                        <div class="skills-animation">
                                            <div class="skill-item">
                                                <div class="skill-info">
                                                    <span class="skill-name">AWS</span>
                                                    <span class="skill-percentage">76%</span>
                                                </div>
                                                <div class="skill-bar progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="76"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <div class="skill-item">
                                                <div class="skill-info">
                                                    <span class="skill-name">Docker</span>
                                                    <span class="skill-percentage">73%</span>
                                                </div>
                                                <div class="skill-bar progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="73"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <div class="skill-item">
                                                <div class="skill-info">
                                                    <span class="skill-name">Git</span>
                                                    <span class="skill-percentage">90%</span>
                                                </div>
                                                <div class="skill-bar progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End DevOps Card -->
                                </div>
                            </div>
                        </div><!-- End Skills Grid -->
                    </div>

                    <div class="col-lg-4">
                        <div class="skills-summary" data-aos="fade-left" data-aos-delay="200">
                            <h3>Professional Expertise</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                            <div class="summary-stats">
                                <div class="stat-item" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="stat-circle">
                                        <i class="bi bi-trophy"></i>
                                    </div>
                                    <div class="stat-info">
                                        <span class="stat-number">5+</span>
                                        <span class="stat-label">Years Experience</span>
                                    </div>
                                </div>

                                <div class="stat-item" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="stat-circle">
                                        <i class="bi bi-diagram-3"></i>
                                    </div>
                                    <div class="stat-info">
                                        <span class="stat-number">50+</span>
                                        <span class="stat-label">Projects Completed</span>
                                    </div>
                                </div>

                                <div class="stat-item" data-aos="zoom-in" data-aos-delay="500">
                                    <div class="stat-circle">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="stat-info">
                                        <span class="stat-number">30+</span>
                                        <span class="stat-label">Happy Clients</span>
                                    </div>
                                </div>
                            </div>

                            <div class="skills-badges" data-aos="fade-up" data-aos-delay="600">
                                <h4>Certifications</h4>
                                <div class="badge-list">
                                    <div class="skill-badge">AWS Certified</div>
                                    <div class="skill-badge">Laravel Expert</div>
                                    <div class="skill-badge">Vue.js Developer</div>
                                    <div class="skill-badge">UI/UX Design</div>
                                </div>
                            </div>
                        </div><!-- End Skills Summary -->
                    </div>
                </div>

            </div>

        </section><!-- /Skills Section -->

        <!-- Resume Section -->
        <section id="resume" class="resume section">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>Resume</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">
                    {{-- <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="experience-section">
                            <div class="section-header"> --}}
                                {{-- <h2><i class="bi bi-briefcase"></i> Professional Journey</h2>
                                <p class="section-subtitle">Pellentesque habitant morbi tristique senectus et netus et
                                    malesuada fames ac turpis egestas vestibulum tortor quam.</p>
                            </div>
                            <div class="experience-cards">
                                @foreach ($project as $project)
                                <div class="experience-card" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="card-header">
                                        <div class="role-info">
                                            <h3>{{ $project->title }}</h3>

                                        </div>
                                        <span class="duration">2022 - Present</span>
                                    </div>
                                    <div class="card-body">
                                      <p>{{ Str::words($project->description, 20, '...') }}</p>


                                    </div>
                                </div>
                                @endforeach --}}

{{-- 
                            </div>
                        </div>
                    </div> --}}



                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                        <div class="education-section">
                            <div class="section-header">
                                <h2><i class="bi bi-mortarboard"></i> Academic Excellence</h2>
                                <p class="section-subtitle">Lorem ipsum dolor sit amet consectetuer adipiscing elit aenean
                                    commodo ligula eget dolor aenean massa.</p>
                            </div>

                            <div class="education-timeline">
                                <div class="timeline-track"></div>
                                @foreach ($educations as $education)
                                    
                                <div class="education-item" data-aos="slide-up" data-aos-delay="300">
                                    <div class="timeline-marker"></div>
                                    <div class="education-content">
                                        <div class="degree-header">
                                            <h3>{{ $education->degree }}</h3>
                                            <span class="year">{{ $education->start_year }} -
                                                {{ $education->end_year }}</span>
                                        </div>
                                        <h4 class="institution">{{ $education->institution }}</h4>
                                        <h4 class="grade">{{ $education->grade }}</h4>
                                        <p>{{ $education->description }}</p>
                                    </div>
                                </div>
                                @endforeach


                                

                                {{-- <div class="education-item" data-aos="slide-up" data-aos-delay="400">
                                <div class="timeline-marker"></div>
                                <div class="education-content">
                                    <div class="degree-header">
                                        <h3>Bachelor of Information Technology</h3>
                                        <span class="year">2011 - 2015</span>
                                    </div>
                                    <h4 class="institution">Rhoncus Institute of Technology</h4>
                                    <p>Nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus vivamus
                                        elementum semper nisi aenean vulputate.</p>
                                </div>
                            </div>

                            <div class="education-item" data-aos="slide-up" data-aos-delay="500">
                                <div class="timeline-marker"></div>
                                <div class="education-content">
                                    <div class="degree-header">
                                        <h3>Certificate in Digital Innovation</h3>
                                        <span class="year">2020</span>
                                    </div>
                                    <h4 class="institution">Ligula Academy</h4>
                                    <p>Etiam sit amet orci eget eros faucibus tincidunt duis leo sed fringilla mauris
                                        sit amet nibh donec sodales sagittis magna.</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>

            </div>

        </section><!-- /Resume Section -->

        <!-- Services Section -->


        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>Portfolio</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
                        <li data-filter="*" class="filter-active">
                            <i class="bi bi-grid-3x3"></i> All Projects
                        </li>
                        <li data-filter=".filter-ui">
                            UI/UX
                        </li>
                        <li data-filter=".filter-development">
                            Development
                        </li>
                        <li data-filter=".filter-photography">
                            Photography
                        </li>
                        <li data-filter=".filter-marketing">
                            Marketing
                        </li>
                    </ul>

                    <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-ui">
                            <article class="portfolio-entry">
                                <figure class="entry-image">
                                    <img src="assets/img/portfolio/portfolio-1.webp" class="img-fluid" alt=""
                                        loading="lazy">
                                    <div class="entry-overlay">
                                        <div class="overlay-content">
                                            <div class="entry-meta">UI/UX Design</div>
                                            <h3 class="entry-title">Mobile Banking App</h3>
                                            <div class="entry-links">
                                                <a href="assets/img/portfolio/portfolio-1.webp" class="glightbox"
                                                    data-gallery="portfolio-gallery-ui"
                                                    data-glightbox="title: Mobile Banking App; description: Praesent commodo cursus magna, vel scelerisque nisl consectetur.">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>
                                                <a href="portfolio-details.html">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-development">
                            <article class="portfolio-entry">
                                <figure class="entry-image">
                                    <img src="assets/img/portfolio/portfolio-10.webp" class="img-fluid" alt=""
                                        loading="lazy">
                                    <div class="entry-overlay">
                                        <div class="overlay-content">
                                            <div class="entry-meta">Development</div>
                                            <h3 class="entry-title">E-Learning Platform</h3>
                                            <div class="entry-links">
                                                <a href="assets/img/portfolio/portfolio-10.webp" class="glightbox"
                                                    data-gallery="portfolio-gallery-development"
                                                    data-glightbox="title: E-Learning Platform; description: Nulla vitae elit libero, a pharetra augue mollis interdum.">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>
                                                <a href="portfolio-details.html">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-photography">
                            <article class="portfolio-entry">
                                <figure class="entry-image">
                                    <img src="assets/img/portfolio/portfolio-7.webp" class="img-fluid" alt=""
                                        loading="lazy">
                                    <div class="entry-overlay">
                                        <div class="overlay-content">
                                            <div class="entry-meta">Photography</div>
                                            <h3 class="entry-title">Urban Architecture</h3>
                                            <div class="entry-links">
                                                <a href="assets/img/portfolio/portfolio-7.webp" class="glightbox"
                                                    data-gallery="portfolio-gallery-photography"
                                                    data-glightbox="title: Urban Architecture; description: Sed ut perspiciatis unde omnis iste natus error sit voluptatem.">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>
                                                <a href="portfolio-details.html">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
                            <article class="portfolio-entry">
                                <figure class="entry-image">
                                    <img src="assets/img/portfolio/portfolio-4.webp" class="img-fluid" alt=""
                                        loading="lazy">
                                    <div class="entry-overlay">
                                        <div class="overlay-content">
                                            <div class="entry-meta">Marketing</div>
                                            <h3 class="entry-title">Social Media Campaign</h3>
                                            <div class="entry-links">
                                                <a href="assets/img/portfolio/portfolio-4.webp" class="glightbox"
                                                    data-gallery="portfolio-gallery-marketing"
                                                    data-glightbox="title: Social Media Campaign; description: Quis autem vel eum iure reprehenderit qui in ea voluptate.">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>
                                                <a href="portfolio-details.html">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-ui">
                            <article class="portfolio-entry">
                                <figure class="entry-image">
                                    <img src="assets/img/portfolio/portfolio-2.webp" class="img-fluid" alt=""
                                        loading="lazy">
                                    <div class="entry-overlay">
                                        <div class="overlay-content">
                                            <div class="entry-meta">UI/UX Design</div>
                                            <h3 class="entry-title">Smart Home Interface</h3>
                                            <div class="entry-links">
                                                <a href="assets/img/portfolio/portfolio-2.webp" class="glightbox"
                                                    data-gallery="portfolio-gallery-ui"
                                                    data-glightbox="title: Smart Home Interface; description: At vero eos et accusamus et iusto odio dignissimos ducimus.">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>
                                                <a href="portfolio-details.html">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-development">
                            <article class="portfolio-entry">
                                <figure class="entry-image">
                                    <img src="assets/img/portfolio/portfolio-11.webp" class="img-fluid" alt=""
                                        loading="lazy">
                                    <div class="entry-overlay">
                                        <div class="overlay-content">
                                            <div class="entry-meta">Development</div>
                                            <h3 class="entry-title">Cloud Management System</h3>
                                            <div class="entry-links">
                                                <a href="assets/img/portfolio/portfolio-11.webp" class="glightbox"
                                                    data-gallery="portfolio-gallery-development"
                                                    data-glightbox="title: Cloud Management System; description: Temporibus autem quibusdam et aut officiis debitis.">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>
                                                <a href="portfolio-details.html">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-photography">
                            <article class="portfolio-entry">
                                <figure class="entry-image">
                                    <img src="assets/img/portfolio/portfolio-8.webp" class="img-fluid" alt=""
                                        loading="lazy">
                                    <div class="entry-overlay">
                                        <div class="overlay-content">
                                            <div class="entry-meta">Photography</div>
                                            <h3 class="entry-title">Nature Collection</h3>
                                            <div class="entry-links">
                                                <a href="assets/img/portfolio/portfolio-8.webp" class="glightbox"
                                                    data-gallery="portfolio-gallery-photography"
                                                    data-glightbox="title: Nature Collection; description: Integer posuere erat a ante venenatis dapibus posuere velit aliquet.">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>
                                                <a href="portfolio-details.html">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
                            <article class="portfolio-entry">
                                <figure class="entry-image">
                                    <img src="assets/img/portfolio/portfolio-5.webp" class="img-fluid" alt=""
                                        loading="lazy">
                                    <div class="entry-overlay">
                                        <div class="overlay-content">
                                            <div class="entry-meta">Marketing</div>
                                            <h3 class="entry-title">Brand Strategy</h3>
                                            <div class="entry-links">
                                                <a href="assets/img/portfolio/portfolio-5.webp" class="glightbox"
                                                    data-gallery="portfolio-gallery-marketing"
                                                    data-glightbox="title: Brand Strategy; description: Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>
                                                <a href="portfolio-details.html">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->


        <!-- Faq Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section light-background">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>Contact</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4 g-lg-5">
                    <div class="col-lg-5">
                        <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                            <h3>Contact Info</h3>
                            <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum
                                primis.</p>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="content">
                                    <h4>Our Location</h4>
                                    <p>A108 Adam Street</p>
                                    <p>New York, NY 535022</p>
                                </div>
                            </div>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="content">
                                    <h4>Phone Number</h4>
                                    <p>+1 5589 55488 55</p>
                                    <p>+1 6678 254445 41</p>
                                </div>
                            </div>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4>Email Address</h4>
                                    <p>info@example.com</p>
                                    <p>contact@example.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                            <h3>Get In Touch</h3>
                            <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum
                                primis.</p>

                            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Your Name" required="">
                                    </div>

                                    <div class="col-md-6 ">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Your Email" required="">
                                    </div>

                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject"
                                            required="">
                                    </div>

                                    <div class="col-12">
                                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                    </div>

                                    <div class="col-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>

                                        <button type="submit" class="btn">Send Message</button>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>
@endsection
