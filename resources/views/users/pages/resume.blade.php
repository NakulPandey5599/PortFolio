<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pillar - Bootstrap Resume/CV Template for Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Resume Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="{{ 'assets/fontawesome/js/all.min.js' }}"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css_resume/pillar-1.css') }}">


</head>

<body>

    <article class="resume-wrapper text-center position-relative">
        <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
            <header class="resume-header pt-4 pt-md-0">
                <div class="row">
                    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
                        <img class="picture" src="{{ asset('assets/img/profile/about.jpg') }}" alt="">
                    </div><!--//col-->
                    <div class="col">
                        <div class="row p-4 justify-content-center justify-content-md-between">
                            <div class="primary-info col-auto">
                                <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">{{ $profile->name }}
                                </h1>
                                <div class="title mb-3">{{ $profile->role }}</div>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><a class="text-link" href="#"><i
                                                class="far fa-envelope fa-fw me-2"
                                                data-fa-transform="grow-3"></i>{{ $profile->email }}</a></li>
                                    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2"
                                                data-fa-transform="grow-6"></i>{{ $profile->phone }}</a></li>
                                </ul>
                            </div><!--//primary-info-->
                            <div class="secondary-info col-auto mt-2">
                                <ul class="resume-social list-unstyled">
                                    <li class="mb-3"><a class="text-link" href="{{ $profile->linkedin }}" target="_blank"><span
                                                class="fa-container text-center me-2"><i
                                                    class="fa-brands fa-linkedin-in fa-fw"></i></span>Linkedin</a>
                                    </li>
                                    <li class="mb-3"><a class="text-link" href="{{ $profile->github }}" target="_blank"><span
                                                class="fa-container text-center me-2"><i
                                                    class="fa-brands fa-github-alt fa-fw"></i></span>GitHub</a>
                                    </li>
                                    {{-- <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fa-brands fa-codepen fa-fw"></i></span>codepen.io/username/</a></li> --}}
                                    {{-- <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span>yourwebsite.com</a></li> --}}
                                </ul>
                            </div><!--//secondary-info-->
                        </div><!--//row-->

                    </div><!--//col-->
                </div><!--//row-->
            </header>
            <div class="resume-body p-5">
                <section class="resume-section summary-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Career Summary</h2>
                    <div class="resume-section-content">
                        <p class="mb-0">{{ $profile->description }} 
                        </p>
                    </div>
                </section><!--//summary-section-->
                <div class="row">
                    <div class="col-lg-9">
                        <section class="resume-section experience-section mb-5">
                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Project Work</h2>
                            <div class="resume-section-content">
                                <div class="resume-timeline position-relative">
                                    @foreach ($projects as $project)
                                        <article class="resume-timeline-item position-relative pb-5">
                                            <div class="resume-timeline-item-header mb-2">
                                                <div class="d-flex flex-column flex-md-row">
                                                    <h3 class="resume-position-title font-weight-bold mb-1">
                                                        {{ $project->title }}</h3>
                                                    {{-- <div class="resume-company-name ms-auto">Startup Hub</div> --}}
                                                </div><!--//row-->
                                                <div class="resume-position-time">{{ $project->date }}</div>
                                             </div><!--//resume-timeline-item-header-->
                                             <div class="resume-timeline-item-desc">
                                                <p>{{ $project->description }}</p>
                                                <h4 class="resume-timeline-item-desc-heading font-weight-bold">Key
                                                    Features:</h4>
                                                <ul>
                                                    @foreach ($project->key_features as $feature)
                                                        <li>{{ $feature }}</li>
                                                    @endforeach

                                                </ul>
                                                <h4 class="resume-timeline-item-desc-heading font-weight-bold">
                                                    Technologies used:</h4>
                                                <ul class="list-inline">
                                                    @foreach ($project->technologies_used as $tech)
                                                        <li class="list-inline-item"><span
                                                                class="badge bg-secondary badge-pill">{{ $tech }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            <ul class="list-inline">
                                                    <li class="list-inline-item"> <a class="text-link" href="{{ $project->live_link }}" target="_blank"><span
                                                class="fa-container text-center me-2"><i
                                                    class="fa-brands 	fa fa-globe fa-fw"></i></span>Live link</a>
                                                    </li>
                                                
                                                 <li class="list-inline-item"> <a class="text-link" href="{{ $project->github }}" target="_blank"><span
                                                class="fa-container text-center me-2"><i
                                                    class="fa-brands fa-github-alt fa-fw"></i></span>GitHub</a>
                                                 </li>  
                                                
                                            </ul>
                                            </div><!--//resume-timeline-item-desc-->

                                        </article><!--//resume-timeline-item-->
                                    @endforeach


                                </div><!--//resume-timeline-->






                            </div>
                        </section><!--//experience-section-->
                    </div>
                    <div class="col-lg-3">
                        <section class="resume-section skills-section mb-5">
                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp;
                                Tools</h2>
                            <div class="resume-section-content">
                                <div class="resume-skill-item">
                                    <h4 class="resume-skills-cat font-weight-bold">Frontend</h4>
                                    <ul class="list-unstyled mb-4">
                                        @foreach ($skills as $item)
                                            @if ($item->categories == 0)
                                                <li class="mb-2">
                                                    <div class="resume-skill-name">{{ $item->skill_name }}</div>
                                                    {{-- <div class="progress resume-progress">
											</div> --}}
                                                </li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </div><!--//resume-skill-item-->

                                <div class="resume-skill-item">
                                    <h4 class="resume-skills-cat font-weight-bold">Backend</h4>
                                    <ul class="list-unstyled">
                                        @foreach ($skills as $item)
                                            @if ($item->categories == 2)
                                                <li class="mb-2">
                                                    <div class="resume-skill-name">{{ $item->skill_name }}</div>

                                                </li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </div><!--//resume-skill-item-->

                                <div class="resume-skill-item">
                                    <h4 class="resume-skills-cat font-weight-bold">Others</h4>
                                    <ul class="list-inline">
                                        @foreach ($skills as $item)
                                            @if ($item->categories == 2)
                                                <li class="list-inline-item"><span
                                                        class="badge badge-light">{{ $item->skill_name }}</span></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div><!--//resume-skill-item-->
                            </div><!--resume-section-content-->
                        </section><!--//skills-section-->
                        <section class="resume-section education-section mb-5">
                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
                            <div class="resume-section-content">
                                <ul class="list-unstyled">
                                    @foreach ($educations as $education)
                                        <li class="mb-2">
                                            <div class="resume-degree font-weight-bold">{{ $education->degree }}</div>
                                            <div class="resume-degree-org">{{ $education->institution }}</div>
                                            <div class="resume-degree-time">{{ $education->end_year }}</div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </section><!--//education-section-->
                        <section class="resume-section reference-section mb-5">
                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Certification
                            </h2>
                            <div class="resume-section-content">
                                <ul class="list-unstyled resume-awards-list">
                                    @foreach ($certifications as $certification)
                                        <li class="mb-2 ps-4 position-relative">
                                            <div class="resume-award-name"> <span class="badge badge-light">{{ $certification->certification }} </span></div>

                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </section><!--//interests-section-->
                        <section class="resume-section language-section mb-5">
                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Language</h2>
                            <div class="resume-section-content">
                                <ul class="list-unstyled resume-lang-list">
                                    <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span>
                                        <small class="text-muted font-weight-normal"></small></li>
                                   
                                </ul>
                            </div>
                        </section><!--//language-section-->
                        
                    </div>
                </div><!--//row-->
            </div><!--//resume-body-->


        </div>
    </article>


    <footer class="footer text-center pt-2 pb-5">
        
       <div><a href="{{ route('pdfinbrowser') }}">View as PDF</a></div>
            <div><a href="{{ route('downloadpdf') }}">Download</a></div>
    </footer>



</body>

</html>
