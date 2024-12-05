@extends('main')
@section('content')

<main class="site-content" id="content">
      <!-- START: Breadcrumb Area -->
      <section class="breadcrumb_area" data-bg-image="./assets/img/breadcrumb/breadcrumb-bg.jpg"
         data-bg-color="#140C1C">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="breadcrumb_content d-flex flex-column align-items-center">
                     <h2 class="title wow fadeInUp" data-wow-delay=".3s">About Us</h2>
                     <div class="breadcrumb_navigation wow fadeInUp" data-wow-delay=".5s">
                        <span><a href="{{ ('/') }}">Home</a></span>
                        <i class="bx bx-chevron-right"></i>
                        <span class="current-item">About Us</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- END: Breadcrumb Area -->

      <!-- start: Works Area -->
      <section class="works-section style-2" id="resume-section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-header text-center">
                     <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Resume</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="works-wrapper">
                     <!-- Education Section -->
                     <div class="works-content-item">
                        <h3 class="title wow fadeInLeft" data-wow-delay=".3s">Education</h3>
                        <div class="works-inner wow fadeInUp" data-wow-delay=".4s">
                           <div class="works-item">
                              <div class="works-icon">
                                 <i class="fas fa-graduation-cap"></i> <!-- Replaced graduation cap icon -->
                              </div>
                              <div class="works-content">
                                 <span class="number">2023 - CONTINUE BSCS Final Year </span>
                                 <h5 class="title">Bachelor of Computer Science</h5>
                                 <span class="sub-title">NCBA</span>
                              </div>
                           </div>
                           <div class="works-item">
                              <div class="works-icon">
                                 <i class="fas fa-graduation-cap"></i> <!-- Replaced graduation cap icon -->
                              </div>
                              <div class="works-content">
                                 <span class="number">2021 - 2023</span>
                                 <h5 class="title">BACHELOR</h5>
                                 <span class="sub-title">ADP CS ( Associate degree program in computer science) from
                                 ucp( University Of Central Punjab)</span>
                              </div>
                           </div>
                           <div class="works-item">
                              <div class="works-icon">
                                 <i class="fas fa-graduation-cap"></i> <!-- Replaced graduation cap icon -->
                              </div>
                              <div class="works-content">
                                 <span class="number">2021</span>
                                 <h5 class="title">INTERMEDIATE</h5>
                                 <span class="sub-title">FA from superior collage</span>
                              </div>
                           </div>
                           <div class="works-item">
                              <div class="works-icon">
                                 <i class="fas fa-graduation-cap"></i> <!-- Replaced graduation cap icon -->
                              </div>
                              <div class="works-content">
                                 <span class="number">2018</span>
                                 <h5 class="title">BISE Lahore </h5>
                                 <span class="sub-title">Matric</span>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Work Experience Section -->
                     <div class="works-content-item">
                        <h3 class="title wow fadeInRight" data-wow-delay=".3s">Work Experience</h3>
                        <div class="works-inner wow fadeInUp" data-wow-delay=".4s">
                           <div class="works-item">
                              <div class="works-icon">
                                 <i class="bx bx-briefcase"></i> <!-- Replaced suitcase icon -->
                              </div>
                              <div class="works-content">
                                 <span class="number">2023 - CONTINUE At BMGROUP,LAHORE</span>
                                 <h5 class="title">Laravel Developer</h5>
                                 <span class="sub-title">& WordPress</span>
                              </div>
                           </div>
                           <div class="works-item">
                              <div class="works-icon">
                                 <i class="bx bx-briefcase"></i> <!-- Replaced suitcase icon -->
                              </div>
                              <div class="works-content">
                                 <span class="number">2021 - 2023</span>
                                 <h5 class="title">Front-End Developer</h5>
                                 <span class="sub-title">MAXFLAPTECHNOLOGIES,LAHORE (2023-2024)</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end: Works Area -->

      <!-- SKILLS SECTION START -->
      <section class="skills-section" id="skills-section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-header text-center">
                     <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Skills</h2>
                     <p class="wow fadeInUp" data-wow-delay=".4s">
                        I specialize in building dynamic and responsive websites and web applications that provide high user satisfaction.
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="skills-widget d-flex flex-wrap justify-content-center align-items-center">
                     <!-- HTML Skill -->
                     <div class="skill-item wow fadeInUp" data-wow-delay=".3s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/skills-1.svg" alt="HTML Icon" />
                           </div>
                           <div class="number">92%</div>
                        </div>
                        <p>HTML</p>
                     </div>
                     <!-- CSS3 Skill -->
                     <div class="skill-item wow fadeInUp" data-wow-delay=".4s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/skills-2.svg" alt="CSS3 Icon" />
                           </div>
                           <div class="number">80%</div>
                        </div>
                        <p>CSS</p>
                     </div>
                     <!-- Webflow Skill -->
                     <div class="skill-item wow fadeInUp" data-wow-delay=".6s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/webflow-1.svg" alt="Webflow Icon" />
                           </div>
                           <div class="number">99%</div>
                        </div>
                        <p>Bootstrap</p>
                     </div>
                     <div class="skill-item wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/wp.svg" alt="">
                           </div>
                           <div class="number">99%</div>
                        </div>
                        <p>WordPess</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-9 mt-5">
                  <div class="skills-widget d-flex flex-wrap justify-content-center align-items-center">
                  <div class="skill-item wow fadeInUp" data-wow-delay=".7s">
                        
                        </div>
                  <!-- Framer Skill -->
                     <div class="skill-item wow fadeInUp" data-wow-delay=".8s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/framer-1.svg" alt="Framer Icon" />
                           </div>
                           <div class="number">93%</div>
                        </div>
                        <p>Laravel</p>
                     </div>
                     <!-- Javascript Skill -->
                     <div class="skill-item wow fadeInUp" data-wow-delay=".5s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/skills-3.svg" alt="Javascript Icon" />
                           </div>
                           <div class="number">85%</div>
                        </div>
                        <p>Javascript</p>
                     </div>
                     <!-- ReactJS Skill -->
                     <div class="skill-item wow fadeInUp" data-wow-delay=".7s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/react.svg" alt="ReactJS Icon" />
                           </div>
                           <div class="number">89%</div>
                        </div>
                        <p>ReactJS</p>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- SKILLS SECTION END -->

      <div class="funfact-area">
         <div class="row">
            <div class="col-6 col-lg-3">
               <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                  <div class="number"><span class="odometer" data-count="2">0</span></div>
                  <div class="text">Years of <br />Experience</div>
               </div>
            </div>
            <div class="col-6 col-lg-3">
               <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                  <div class="number"><span class="odometer" data-count="15">0</span>+</div>
                  <div class="text">Projects <br />Completed</div>
               </div>
            </div>
            <div class="col-6 col-lg-3">
               <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                  <div class="number"><span class="odometer" data-count="10">0</span>+</div>
                  <div class="text">Satisfied <br />Clients</div>
               </div>
            </div>
            <div class="col-6 col-lg-3">
               <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                  <div class="number"><span class="odometer" data-count="6">0</span></div>
                  <div class="text">Technologies <br />Mastered</div>
               </div>
            </div>
         </div>
      </div>

      <!-- start: Text Area -->
      <section class="text-section">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
                     <div class="heading-left">
                        <p class="wow fadeInUp" data-wow-delay=".3s">Ready to bring your ideas to life?</p>
                        <h2 id="anim" class="section-title wow fadeInUp" data-wow-delay=".4s">Let’s Collaborate!</h2>
                     </div>
                     <div class="chat-mail wow fadeInRight" data-wow-delay=".5s">
                        <a class="link" href="mailto:ranabobi30@gmail.com">
                           ranabobi30@gmail.com <i class="fa-light fa-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end: Text Area -->



@endsection