<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Resume - Steve Doe</title>
    <style type="text/css">
        body,
        html {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 12pt;
            color: #434E5E;
        }

        .container {
            width: 100%;
            max-width: 950px;
            margin: 20px auto;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header-section {
            background: #434E5E;
            height: 200px;

        }

        .profile_image {
            width: 200px;
            height: auto;
            object-fit: cover;
        }

        .name,
        .role {
            color: #fff;
        }

        .email,
        .phone {
            color: #adb5bd;
            font-weight: 500;
            font-size: 18px;
        }

        .header_table {

            width: 750+px;
            border-collapse: collapse;
        }

        .link {
            color: #adb5bd;
            margin-bottom: 20px;
            margin-left: 80px;
        }

        .about {
            margin: 20px;
        }

        .work_experience {
            margin: 20px;
        }

        .skills,
        .education,
        .language,
        .interest {
            margin: 20px;
        }

        .tech-tags {
            padding: 0;
            margin: 0;
            list-style: none;
            white-space: nowrap;
        }

        .tech-tags li {
            display: inline-block;
            margin-right: 6px;
        }

        .tag {
            display: inline-block;
            background-color: #434E5E;
            color: #ffffff;
            font-size: 10pt;
            padding: 4px 8px;
            margin-right: 6px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .company {
            float: right;
            margin-top: -15px;
            font-weight: normal;
        }

        h2 {
            margin-bottom: 4px;
        }

        section {
            margin-bottom: 8px;
        }

        ul {
            list-style-type: none;
            margin-top: 2px;
            padding-left: 15px;
        }

        li {
            margin-bottom: 3px;
        }

        .achievement-list {
            list-style-type: disc;
        }

        .timeline {
            position: relative;
            margin-left: 20px;
            padding-left: 20px;
            border-left: 2px solid #434E5E;
        }

        .timeline-entry {
            margin-bottom: 25px;
            position: relative;
        }

        .timeline-entry::before {
            content: '';
            position: absolute;
            left: -29px;
            top: 4px;
            width: 12px;
            height: 12px;
            background-color: #434E5E;
            border-radius: 50%;
            border: 2px solid #fff;
            box-shadow: 0 0 0 2px #434E5E;
        }

        .info {
            padding-left: 10px
        }

        footer {
            text-align: center;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header-section">
            <table class="header_table">
                <tr>
                    <td>
                        <img src="{{ asset('assets/images2/profile.jpg') }}" alt="" class="profile_image">
                    </td>
                    <td class="info">
                        <h1 class="name">{{ $profile->name }}</h1>
                        <h3 class="role">Here is the Role</h3>
                        <p class="email">{{ $profile->email }}</p>
                        <p class="phone">8976543245</p>
                    </td>
                    <td>
                        <ul>
                            <li class="link">{{ $profile->linkedin }}</li>
                            <li class="link">{{ $profile->github }}</li>
                            <li class="link">portfolio.com</li>
                            <li class="link">twitter.com/stevedoe</li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>

        <!-- About -->
        <div class="about">
            <h2>Career Summary</h2>
            <hr>
            <p>
                Summarise your career here. Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus
                et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                eu. Summarise your career here. Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus
                et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                eu. Summarise your career here. Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus
                et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                eu.
            </p>
        </div>

        <!-- Main Content Columns -->
        <table width="100%" style="border-collapse: collapse;">
            <tr>
                <!-- Left Column -->
                <td style="width: 70%; vertical-align: top; ">
                    <section class="work_experience" style="">
                        <h2>Work Experience</h2>
                        <hr>
                        <div class="timeline">
                            <div class="timeline-entry">
                                <h3>Lead Developer <span class="company">Startup Hub</span></h3>
                                <div>2023 - Present</div>
                                <p>Leading backend development with Laravel and MySQL. Mentoring juniors and ensuring
                                    best practices.</p>
                                <h4>Achievements:</h4>
                                <ul class="achievement-list">
                                    <li>Optimized backend load time by 40%.</li>
                                    <li>Introduced CI/CD for staging environments.</li>
                                    <li>Built modular service architecture.</li>
                                </ul>
                                <h4>Technologies Used:</h4>
                                <ul class="tech-tags">
                                    <li><span class="tag">Laravel</span></li>
                                    <li><span class="tag">PHP</span></li>
                                    <li><span class="tag">MySQL</span></li>
                                    <li><span class="tag">Docker</span></li>
                                    <li><span class="tag">Git</span></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </td>

                <!-- Right Column -->
                <td style="width: 30%; vertical-align: top; padding-left: 2%;">
                    <section class="skills">
                        <h2>Skills</h2>
                        <hr>
                        <h4 style="margin-bottom: 10px;">Frontend</h4>
                        <ul>
                            @foreach ($skills as $item)
                                @if ($item->categories == 0)
                                    <li>{{ $item->skill_name }}</li>
                                @endif
                            @endforeach


                        </ul>
                        <h4 style="margin-bottom: 10px;">Backend</h4>
                        <ul>
                            @foreach ($skills as $item)
                                @if ($item->categories == 1)
                                    <li>{{ $item->skill_name }}</li>
                                @endif
                            @endforeach
                        </ul>
                        <h4 style="margin-bottom: 10px;">Dev Tools</h4>
                        <ul>
                            @foreach ($skills as $item)
                                @if ($item->categories == 2)
                                    <li>{{ $item->skill_name }}</li>
                                @endif
                            @endforeach
                        </ul>
                    </section>

                    <section class="education">
                        <h2>Education</h2>
                        <hr>
                        <ul>
                            @foreach ($educations as $education)
                                <li>
                                    <span style="font-weight: bold; ">{{ $education->degree }}</span><br>
                                    <span style="font-style: color: #adb5bd;">{{ $education->institution }}</span><br>
                                    <span style="color: gray;">{{ $education->end_year }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </section>

                    <section class="language">
                        <h2>Languages</h2>
                        <hr>
                        <ul>
                            <li>English (Native)</li>
                            <li>French (Professional)</li>
                        </ul>
                    </section>

                    <section class="interest">
                        <h2>Interests</h2>
                        <hr>
                        <ul>
                            <li>Climbing</li>
                            <li>Photography</li>
                            <li>Gaming</li>
                        </ul>
                    </section>
                </td>
            </tr>
        </table>

        <!-- Footer -->
        <footer>
            <div><a href="{{ route('pdfinbrowser') }}">View as PDF</a></div>
            <div><a href="{{ route('downloadpdf') }}">Download</a></div>
        </footer>
    </div>
</body>

</html>
