@extends('users.partials.master')
@section('main')
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
                            <h2>Hi, {{ "$profile->name" }} a Creative Developer</h2>
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

                        <div class="journey-timeline" data-aos="fade-up" data-aos-delay="300">
                            @foreach ($educations as $education)
                                <div class="timeline-item">
                                    <div class="year">{{ $education->end_year }}</div>
                                    <div class="description">{{ $education->degree }}</div>
                                </div>
                            @endforeach
                        </div>


                        <div class="cta-section" data-aos="fade-up" data-aos-delay="400">
                            <div class="fun-fact">
                                <span class="emoji">☕</span>
                                <span class="text">Coffee-fueled designer based in Portland</span>
                            </div>
                            <div class="action-buttons">
                                <a href="{{ route('projects') }}" class="btn btn-primary">View My Work</a>
                                <a href="{{ route('downloadpdf') }}" class="btn btn-outline">Download Resume</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->
@endsection
