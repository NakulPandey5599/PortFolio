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
            color: #333;
        }

        .container {
            width: 95%;
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header-section {
            background: #434E5E
        }

        .profile_image {
            width: 200px;
            height: auto;
        }

        .name {
            color: #fff;
        }

        .role {
            color: #fff;
        }

        .email {
            color: #adb5bd;
            font-weight: 500;
            font-size: 18px;
        }

        .phone {
            color: #adb5bd;
            font-weight: 500;
            font-size: 18px;
        }

        .header_table {
            width: 100%;
        }

        .link {

            margin-bottom: 20px;
            margin-left: 80px;
        }

        .about {
            margin-left: 20px;
            margin-right: 20px;

        }

        .work_experience {
            margin-right: 35%;

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
            margin-top: -24px;
            /* Optional: vertically align with job title */
            font-weight: normal;

        }

        .main-sections {
    width: 100%;
    overflow: hidden;
    margin: 20px;
}

.left-column {
    float: left;
    width: 62%;
    padding-right: 3%;
}

.right-column {
    float: left;
    width: 35%;
}


    </style>
</head>
{{-- changing start from here on ward --}}

<body>
    <div class="container">
        <div class="header-section">
            <table class="header_table">
                <tr>
                    <td>
                        <img src="{{ public_path('assets/images2/profile.jpg') }}" alt="" class="profile_image">
                    </td>
                    <td>
                        <h1 class="name">The Name</h1>
                        <h3 class="role">Here is the Role</h3>
                        <p class="email">
                            xyz@gmail.com
                        </p>
                        <p class="phone">8976543245</p>
                    </td>
                    <td>
                        <ul>
                            <li class="link">linkedin.com/in/stevedoe</li>
                            <li class="link">linkedin.com/in/stevedoe</li>
                            <li class="link">linkedin.com/in/stevedoe</li>
                            <li class="link">linkedin.com/in/stevedoe</li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
        
        <div class="about">
            <h2>Career Summary</h2>
            <hr>
            <div>
                <p>Summarise your career here
                    You can make a PDF version of your resume using our free Sketch template
                    Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus et
                    magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                    pellentesque eu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                    montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                    quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,
                    vulputate eget. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
            </div>
        </div>
        <div>
            
                <tr>
                    <td>
                        <div class="main-sections">
                            <div class="left-column">
                                <section class="work_experience">
                                    <h2>Work Experience
                                    </h2>
                                    <hr>
                                    <div>
                                        <div class="">
                                            <article class="">

                                                <div class="">
                                                    <div class="">
                                                        <h3 class="">Lead Developer
                                                        </h3>
                                                        <h5 class="company">Startup Hub</h5>
                                                    </div>
                                                    <div>2023 - Present</div>
                                                </div>
                                                <div class="">
                                                    <p>Role description goes here ipsum dolor sit amet, consectetuer
                                                        adipiscing
                                                        elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                                        natoque
                                                        penatibus et magnis dis parturient montes, nascetur ridiculus
                                                        mus. Donec
                                                        quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                                        Donec
                                                        pede justo, fringilla vel.</p>
                                                    <h4>Achievements:
                                                    </h4>
                                                    <p>Praesentium voluptatum deleniti atque corrupti quos dolores et
                                                        quas
                                                        molestias excepturi sint occaecati cupiditate non provident.</p>
                                                    <ul>
                                                        <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing
                                                            elit.</li>
                                                        <li>At vero eos et accusamus et iusto odio dignissimos.</li>
                                                        <li>Blanditiis praesentium voluptatum deleniti atque corrupti.
                                                        </li>
                                                        <li>Maecenas tempus tellus eget.</li>
                                                    </ul>
                                                    <h4 class="">Technologies
                                                        used:</h4>
                                                    <ul class="tech-tags">
                                                        <li><span class="tag">Angular</span></li>
                                                        <li><span class="tag">Python</span></li>
                                                        <li><span class="tag">jQuery</span></li>
                                                        <li><span class="tag">Webpack</span></li>
                                                        <li><span class="tag">HTML/SASS</span></li>
                                                        <li><span class="tag">PostgresSQL</span></li>
                                                    </ul>
                                                </div>

                                            </article>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td>

                        <div class="right-column">
                            <section>
                                <h2>Skills
                                    Tools</h2>
                                <div>
                                    <div>
                                        <h4>Frontend</h4>
                                        <ul>
                                            <li>
                                                <div>Angular</div>
                                                <div>

                                            </li>
                                            <li>
                                                <div>React</div>
                                                <div>

                                            </li>
                                            <li>
                                                <div>JavaScript</div>
                                                <div>

                                            </li>

                                            <li>
                                                <div>Node.js</div>
                                                <div>

                                            </li>
                                            <li>
                                                <div>HTML/CSS/SASS/LESS</div>
                                                <div>

                                            </li>
                                        </ul>
                                    </div><!--//resume-skill-item-->

                                    <div>
                                        <h4>Backend</h4>
                                        <ul>
                                            <li">
                                                <div>Python/Django</div>
                                                <div>

                                                    </li>
                                                    <li>
                                                        <div>Ruby/Rails</div>
                                                        <div>

                                                    </li>
                                                    <li>
                                                        <div>PHP</div>
                                                        <div>

                                                    </li>
                                                    <li>
                                                        <div>WordPress/Shopify</div>
                                                        <div>

                                                    </li>
                                        </ul>
                                    </div><!--//resume-skill-item-->

                                    <div>
                                        <h4>Others</h4>
                                        <ul">
                                            <li><span>DevOps</span>
                                            </li>
                                            <li><span>Code
                                                    Review</span></li>
                                            <li><span>Git</span></li>
                                            <li><span>Unit
                                                    Testing</span></li>
                                            <li><span>Wireframing</span></li>
                                            <li><span>Sketch</span>
                                            </li>
                                            <li><span>Balsamiq</span>
                                            </li>
                                            <li><span>WordPress</span>
                                            </li>
                                            <li><span>Shopify</span>
                                            </li>
                                            </ul>
                                    </div><!--//resume-skill-item-->
                                </div><!--resume-section-content-->
                            </section><!--//skills-section-->
                            <section>
                                <h2>Education</h2>
                                <div>
                                    <ul>
                                        <li>
                                            <div>MSc in Computer Science</div>
                                            <div>University College London</div>
                                            <div>2013 - 2014</div>
                                        </li>
                                        <li>
                                            <div>BSc Maths and Physics</div>
                                            <div>Imperial College London</div>
                                            <div>2010 - 2013</div>
                                        </li>
                                    </ul>
                                </div>
                            </section><!--//education-section-->
                            <section>
                                <h2>Awards</h2>
                                <div>
                                    <ul>
                                        <li>
                                            <i>
                                            </i>
                                            <div>Award Name Lorem</div>
                                            <div>Award desc goes here, ultricies nec,
                                                pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                                                Donec
                                                pede justo.</div>
                                        </li>
                                        <li>
                                            <i></i>
                                            <div>Award Name Ipsum</div>
                                            <div>Award desc goes here, ultricies nec,
                                                pellentesque.</div>
                                        </li>
                                    </ul>
                                </div>
                            </section><!--//interests-section-->
                            <section>
                                <h2>Language</h2>
                                <div>
                                    <ul>
                                        <li><span>English</span>
                                            <small>(Native)</small>
                                        </li>
                                        <li><span>French</span> <small>(Professional)</small></li>
                                        <li><span>Spanish</span> <small>(Professional)</small></li>
                                    </ul>
                                </div>
                            </section>
                            <section>
                                <h2>Interests</h2>
                                <div>
                                    <ul>
                                        <li>Climbing</li>
                                        <li>Snowboarding</li>
                                        <li>Cooking</li>
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    </div>
</body>

</html>
{{-- 


code --}}


 <div class="right-column">
                            <section>
                                <h2>Skills
                                    Tools</h2>
                                <div>
                                    <div>
                                        <h4>Frontend</h4>
                                        <ul>
                                            <li>
                                                <div>Angular</div>
                                                <div>

                                            </li>
                                            <li>
                                                <div>React</div>
                                                <div>

                                            </li>
                                            <li>
                                                <div>JavaScript</div>
                                                <div>

                                            </li>

                                            <li>
                                                <div>Node.js</div>
                                                <div>

                                            </li>
                                            <li>
                                                <div>HTML/CSS/SASS/LESS</div>
                                                <div>

                                            </li>
                                        </ul>
                                    </div><!--//resume-skill-item-->

                                    <div>
                                        <h4>Backend</h4>
                                        <ul>
                                            <li">
                                                <div>Python/Django</div>
                                                <div>

                                                    </li>
                                                    <li>
                                                        <div>Ruby/Rails</div>
                                                        <div>

                                                    </li>
                                                    <li>
                                                        <div>PHP</div>
                                                        <div>

                                                    </li>
                                                    <li>
                                                        <div>WordPress/Shopify</div>
                                                        <div>

                                                    </li>
                                        </ul>
                                    </div><!--//resume-skill-item-->

                                    <div>
                                        <h4>Others</h4>
                                        <ul">
                                            <li><span>DevOps</span>
                                            </li>
                                            <li><span>Code
                                                    Review</span></li>
                                            <li><span>Git</span></li>
                                            <li><span>Unit
                                                    Testing</span></li>
                                            <li><span>Wireframing</span></li>
                                            <li><span>Sketch</span>
                                            </li>
                                            <li><span>Balsamiq</span>
                                            </li>
                                            <li><span>WordPress</span>
                                            </li>
                                            <li><span>Shopify</span>
                                            </li>
                                            </ul>
                                    </div><!--//resume-skill-item-->
                                </div><!--resume-section-content-->
                            </section><!--//skills-section-->
                            <section>
                                <h2>Education</h2>
                                <div>
                                    <ul>
                                        <li>
                                            <div>MSc in Computer Science</div>
                                            <div>University College London</div>
                                            <div>2013 - 2014</div>
                                        </li>
                                        <li>
                                            <div>BSc Maths and Physics</div>
                                            <div>Imperial College London</div>
                                            <div>2010 - 2013</div>
                                        </li>
                                    </ul>
                                </div>
                            </section><!--//education-section-->
                            <section>
                                <h2>Awards</h2>
                                <div>
                                    <ul>
                                        <li>
                                            <i>
                                            </i>
                                            <div>Award Name Lorem</div>
                                            <div>Award desc goes here, ultricies nec,
                                                pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                                                Donec
                                                pede justo.</div>
                                        </li>
                                        <li>
                                            <i></i>
                                            <div>Award Name Ipsum</div>
                                            <div>Award desc goes here, ultricies nec,
                                                pellentesque.</div>
                                        </li>
                                    </ul>
                                </div>
                            </section><!--//interests-section-->
                            <section>
                                <h2>Language</h2>
                                <div>
                                    <ul>
                                        <li><span>English</span>
                                            <small>(Native)</small>
                                        </li>
                                        <li><span>French</span> <small>(Professional)</small></li>
                                        <li><span>Spanish</span> <small>(Professional)</small></li>
                                    </ul>
                                </div>
                            </section>
                            <section>
                                <h2>Interests</h2>
                                <div>
                                    <ul>
                                        <li>Climbing</li>
                                        <li>Snowboarding</li>
                                        <li>Cooking</li>
                                    </ul>
                                </div>
                            </section>
                        </div>










                        {{-- code --}}










                        
            <tr>
                <td>
                    <div class="main-sections">
                        <div class="left-column">
                            <section class="work_experience">
                                <h2>Work Experience
                                </h2>
                                <hr>
                                <div>
                                    <div class="">
                                        <article class="">

                                            <div class="">
                                                <div class="">
                                                    <h3 class="">Lead Developer
                                                    </h3>
                                                    <h5 class="company">Startup Hub</h5>
                                                </div>
                                                <div>2023 - Present</div>
                                            </div>
                                            <div class="">
                                                <p>Role description goes here ipsum dolor sit amet, consectetuer
                                                    adipiscing
                                                    elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                                    natoque
                                                    penatibus et magnis dis parturient montes, nascetur ridiculus
                                                    mus. Donec
                                                    quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                                    Donec
                                                    pede justo, fringilla vel.</p>
                                                <h4>Achievements:
                                                </h4>
                                                <p>Praesentium voluptatum deleniti atque corrupti quos dolores et
                                                    quas
                                                    molestias excepturi sint occaecati cupiditate non provident.</p>
                                                <ul>
                                                    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing
                                                        elit.</li>
                                                    <li>At vero eos et accusamus et iusto odio dignissimos.</li>
                                                    <li>Blanditiis praesentium voluptatum deleniti atque corrupti.
                                                    </li>
                                                    <li>Maecenas tempus tellus eget.</li>
                                                </ul>
                                                <h4 class="">Technologies
                                                    used:</h4>
                                                <ul class="tech-tags">
                                                    <li><span class="tag">Angular</span></li>
                                                    <li><span class="tag">Python</span></li>
                                                    <li><span class="tag">jQuery</span></li>
                                                    <li><span class="tag">Webpack</span></li>
                                                    <li><span class="tag">HTML/SASS</span></li>
                                                    <li><span class="tag">PostgresSQL</span></li>
                                                </ul>
                                            </div>

                                        </article>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                </td>
            </tr>
            <tr>
                <td>

    <style type="text/css">
        body, html {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 11pt;
            color: #333;
        }

        .container {
            width: 95%;
            max-width: 800px;
            margin: 10px auto;
        }

        .header-section {
            background: #434E5E;
            padding: 10px;
        }

        .profile_image {
            width: 100px;
            height: auto;
        }

        .name, .role {
            color: #fff;
            margin: 0;
        }

        .email, .phone {
            color: #adb5bd;
            font-size: 10pt;
            margin: 2px 0;
        }

        .header_table {
            width: 100%;
        }

        .link {
            color: #adb5bd;
            font-size: 9pt;
            margin-bottom: 4px;
        }

        .about {
            margin: 10px 0;
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
            background-color: #434E5E;
            color: #fff;
            font-size: 9pt;
            padding: 3px 6px;
            border-radius: 4px;
        }

        .company {
            float: right;
            font-weight: normal;
        }

        h2 {
            margin-bottom: 4px;
        }

        section {
            margin-bottom: 8px;
        }

        ul {
            margin-top: 2px;
            padding-left: 15px;
        }

        li {
            margin-bottom: 3px;
        }
    </style>