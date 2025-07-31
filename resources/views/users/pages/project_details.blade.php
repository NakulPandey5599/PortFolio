@extends('users.partials.master')
@section('main')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title light-background">

            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Project Details</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li class="current">Project Details</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Portfolio Details Section -->
        <section id="portfolio-details" class="portfolio-details section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="portfolio-details-media">
                            <div class="main-image">
                                <div class="portfolio-details-slider swiper init-swiper" data-aos="zoom-in">
                                    <script>
    document.addEventListener("DOMContentLoaded", function () {
        new Swiper(".portfolio-details-slider", {
            loop: true,
            speed: 1000,
            autoplay: {
                delay: 6000,
            },
            effect: "creative",
            creativeEffect: {
                prev: {
                    shadow: true,
                    translate: [0, 0, -400],
                },
                next: {
                    translate: ["100%", 0, 0],
                },
            },
            slidesPerView: 1,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    });
 src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js">
</script>

                                    @foreach ($project->images as $image)
                                    
                                    @endforeach
                                       <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                
                                                <img src="{{ asset('storage/' . $image) }} "alt="Portfolio Image"
                                                    class="img-fluid">
                                                
                                            </div>

                                        </div> 
                                    
                                        
  
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                </div>
                            </div>
                            
                           
                                <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
                                    <div class="row g-2 mt-3">
                                        @foreach ($project->images as $image)
                                        <div class="col-3">
                                             
                                            <img src="{{ asset('storage/' . $image) }}" alt="Gallery Image"
                                                class="img-fluid glightbox">
                                                
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            

                            <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
                                @foreach ($project->technologies_used as $tech)
                                    <span>{{ $tech }}</span>
                                @endforeach


                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="portfolio-details-content">
                            <div class="project-meta">
                                <div class="badge-wrapper">
                                    <span class=""></span>
                                </div>
                                <div class="date-client">
                                    <div class="meta-item">
                                        <i class=""></i>
                                        <span></span>
                                    </div>
                                    <div class="meta-item">
                                        <i class=""></i>
                                        <span></span>
                                    </div>
                                </div>
                            </div>

                            <h2 class="project-title">{{ $project->title }}</h2>

                            {{-- <div class="project-website">
                        <i class="bi bi-link-45deg"></i>
                        <a href="#" target="_blank">{{ $project->live_link }}</a>
                    </div> --}}

                            <div class="project-overview">
                                <p class="lead">{{ $project->description }} </p>

                                <div class="accordion project-accordion" id="portfolio-details-projectAccordion">
                                    <div class="accordion-item" data-aos="fade-up">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#portfolio-details-collapse-1" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <i class="bi bi-clipboard-data me-2"></i> Project Overview
                                            </button>
                                        </h2>
                                        <div id="portfolio-details-collapse-1" class="accordion-collapse collapse show"
                                            data-bs-parent="#portfolio-details-projectAccordion">
                                            <div class="accordion-body">
                                                <p>{{ $project->project_overview }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-2"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                <i class="bi bi-exclamation-diamond me-2"></i> The Challenge
                                            </button>
                                        </h2>
                                        <div id="portfolio-details-collapse-2" class="accordion-collapse collapse"
                                            data-bs-parent="#portfolio-details-projectAccordion">
                                            <div class="accordion-body">
                                                <p>{{ $project->challenges }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-3"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <i class="bi bi-award me-2"></i> The Solution
                                            </button>
                                        </h2>
                                        <div id="portfolio-details-collapse-3" class="accordion-collapse collapse"
                                            data-bs-parent="#portfolio-details-projectAccordion">
                                            <div class="accordion-body">
                                                <p>{{ $project->solution }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="project-features" data-aos="fade-up" data-aos-delay="300">
                                <h3><i class="bi bi-stars"></i> Key Features</h3>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <ul class="feature-list">
                                            @foreach ($project->key_features as $feature)
                                                <li><i class="bi bi-check2-circle"></i> {{ $feature }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400">
                                <a href="{{ $project->live_link }}" target="_blank" class="btn-view-project">Live
                                    Link</a>
                                <a href="{{ $project->github }}" target="_blank" class="btn-view-project">GitHub
                                    Repository</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Portfolio Details Section -->

    </main>
@endsection
