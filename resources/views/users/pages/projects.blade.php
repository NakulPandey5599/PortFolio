@extends('users.partials.master')
@section('main')
    <!-- Resume Section -->
    <section id="resume" class="resume section">

        <!-- Section Title -->
        <div class="container section-title">
            <h2>Projects</h2>
            <br>
            <p>Here are some of the projects I’ve worked on, showcasing a variety of skills including web development,
                application design, and creative problem-solving. Each project reflects my passion for building functional,
                user-friendly solutions.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-lg-12" data-aos="fade-right" data-aos-delay="200">
                    <div class="experience-section">
                        <div class="section-header">
                            <h2><i class="bi bi-briefcase"></i> Professional Journey</h2>
                            <p class="section-subtitle">Explore key projects that reflect my skills, creativity, and
                                professional development in tech.</p>
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
                                    <div class="card-links">
                                        <a href="{{route('project_details')}}" class="link-item">
                                            Learn More
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            @endsection
