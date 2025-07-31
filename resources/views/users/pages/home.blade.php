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
                                    <span class="purecounter" data-purecounter-start="0" data-purecounter-end="{{$certificationCount}}"
                                        data-purecounter-duration="2"></span>
                                    <span class="stat-label">Certification</span>
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
                                <a href={{ "$profile->linkedin" }} target="_blank"><i class="bi bi-linkedin"></i></a>
                                <a href={{ "$profile->github" }} target="_blank"><i class="bi bi-github"></i></a>

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
                            <img src={{asset("assets/img/profile/about.jpg")}} alt="Portfolio Hero"
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
                <p>I’m a developer who believes in writing clean code, building meaningful products, and always staying
                    curious.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">

                    <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
                        <div class="profile-image-wrapper">
                            <div class="profile-image">
                                <img src={{asset("assets/img/profile/about.jpg")}} alt="Profile" class="img-fluid">
                            </div>
                            <div class="signature-section">
                                {{-- <img src="assets/img/misc/signature-1.webp" alt="Signature" class="signature"> --}}
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
                                        <i class="bi bi-code-slash"></i>
                                    </div>
                                    <h4>Frontend Dev</h4>
                                    <p>I craft visually appealing, responsive interfaces with a focus on usability and
                                        performance.</p>
                                </div>
                                <div class="skill-item" data-aos="zoom-in" data-aos-delay="450">
                                    <div class="skill-icon">
                                        <i class="bi bi-server"></i>
                                    </div>
                                    <h4>Backend Dev</h4>
                                    <p>I build secure, scalable systems that power dynamic web experiences behind the
                                        scenes.</p>
                                </div>
                                <div class="skill-item" data-aos="zoom-in" data-aos-delay="500">
                                    <div class="skill-icon">
                                        <i class="bi bi-tools"></i>
                                    </div>
                                    <h4>Dev Tools</h4>
                                    <p>I rely on modern development tools to write clean code, debug efficiently, and
                                        collaborate seamlessly.</p>
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
                                    <a href="{{ route('downloadpdf') }}" class="btn btn-outline">Download Resume</a>
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
                                            <i class="bi bi-cloud"></i>
                                            <h3>Tools &amp; DevOps</h3>
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
                                    {{-- <div class="skill-card">
                                        <div class="skill-header">
                                            <i class="bi bi-cloud"></i>
                                            <h3>Cloud &amp; DevOps</h3>
                                        </div>
                                        <div class="skills-animation">
                                            <div class="skill-item">
                                                <div class="skill-info">
                                                    <span class="skill-name">AWS</span>
                                                    <span class="skill-percentage"></span>
                                                </div>
                                                <div class="skill-bar progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="76"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <div class="skill-item">
                                                <div class="skill-info">
                                                    <span class="skill-name">Docker</span>
                                                    <span class="skill-percentage"></span>
                                                </div>

                                            </div>

                                            <div class="skill-item">
                                                <div class="skill-info">
                                                    <span class="skill-name"></span>
                                                    <span class="skill-percentage"></span>
                                                </div>
                                                <div class="skill-bar progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End DevOps Card --> --}}
                                </div>
                            </div>
                        </div><!-- End Skills Grid -->
                    </div>

                    <div class="col-lg-4">
                        <div class="skills-summary" data-aos="fade-left" data-aos-delay="200">
                            <h3>Professional Expertise</h3>
                            <p>I’m a full-stack web developer with a strong focus on building scalable, secure, and
                                user-focused web applications. I thrive in fast-paced, agile environments where I can take
                                ownership of features end-to-end — from database design to clean, intuitive UIs. With
                                practical experience in Laravel, React, and the MERN stack, I bring both speed and
                                flexibility to development. I’m always looking for smart ways to solve real problems, move
                                fast without breaking things, and contribute meaningfully to product growth.</p>

                            <div class="summary-stats">
                                <div class="stat-item" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="stat-circle">
                                        <i class="bi bi-trophy"></i>
                                    </div>
                                    <div class="stat-info">
                                        <span class="stat-number">{{$certificationCount}}</span>
                                        <span class="stat-label">Certification</span>
                                    </div>
                                </div>

                                <div class="stat-item" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="stat-circle">
                                        <i class="bi bi-diagram-3"></i>
                                    </div>
                                    <div class="stat-info">
                                        <span class="stat-number">{{ $projectCount }}</span>
                                        <span class="stat-label">Projects Completed</span>
                                    </div>
                                </div>

                                {{-- <div class="stat-item" data-aos="zoom-in" data-aos-delay="500">
                                    <div class="stat-circle">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="stat-info">
                                        <span class="stat-number"></span>
                                        <span class="stat-label">Happy Clients</span>
                                    </div>
                                </div> --}}
                            </div>

                            <div class="skills-badges" data-aos="fade-up" data-aos-delay="600">
                                <h4>Certifications</h4>
                                @foreach ($certifications as $certification)
                                    <div class="badge-list">
                                    <div class="skill-badge">{{$certification->certification}}</div>
                                    
                                @endforeach
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
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="experience-section">
                            <div class="section-header">
                                <h2><i class="bi bi-briefcase"></i> Projects</h2>
                                <p class="section-subtitle">This section contains real code, real effort, and occasional
                                    miracles.</p>
                            </div>
                            <div class="experience-cards">
                                @foreach ($project as $project)
                                    <div class="experience-card" data-aos="zoom-in" data-aos-delay="300">
                                        <div class="card-header">
                                            <div class="role-info">
                                                <h3>{{ $project->title }}</h3>

                                            </div>
                                            <span class="duration">{{ $project->date }}</span>
                                        </div>
                                        <div class="card-body">
                                            <p>{{ Str::words($project->description, 20, '...') }}</p>
                                        </div>
                                        <div class="card-links">
                                            <a href="{{ route('project_details', $project->id) }}" class="link-item">
                                                Learn More
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>



                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                        <div class="education-section">
                            <div class="section-header">
                                <h2><i class="bi bi-mortarboard"></i> Academic Excellence</h2>
                                <p class="section-subtitle">Grades weren’t everything, but I collected a few good ones
                                    anyway.</p>
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

        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact section light-background">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>Contact</h2>
                <p>Inbox open. Energy high. Let’s build something that breaks the internet (in a good way).</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4 g-lg-5">
                    <div class="col-lg-5">
                        <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                            <h3>Contact Info</h3>
                            <p>Let’s connect! I’m just a message away.</p>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="content">
                                    <h4>Our Location</h4>
                                    <p>{{ $profile->location }}</p>

                                </div>
                            </div>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="content">
                                    <h4>Phone Number</h4>
                                    <p>
                                        {{ $profile->phone }}
                                    </p>

                                </div>
                            </div>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4>Email Address</h4>
                                    <p>{{ $profile->email }}</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                            <h3>Get In Touch</h3>
                            <p></p>

                            <form action="{{ route('contact_us') }}" method="POST">

                                @csrf
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
                                        @if (session('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session('success') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif

                                        @if (session('error'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ session('error') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif


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
