
@extends('main')
@section('content')

   <main class="site-content" id="content">
      <!-- HERO SECTION START -->
      <section class="hero-section d-flex align-items-center" id="intro">
         <div class="intro_text">
            <svg viewBox="0 0 1320 300">
               <text x="50%" Y="50%" text-anchor="middle">HI</text>
            </svg>
         </div>
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <div class="hero-content-box">
                     <span class="hero-sub-title"></span>
                     <h1 class="hero-title"> I am a Full-Stack Developer</h1>

                     <div class="hero-image-box d-md-none text-center">
                        <img src="assets/img/hero/profile.webp" alt="Front-End Developer" />
                     </div>

                     <p class="lead">
                        I am a passionate web developer with 2 years of experience in building modern and responsive websites using HTML, CSS, JavaScript, and popular frameworks like Bootstrap, Laravel, and WordPress. Let's create seamless user experiences!
                     </p>
                     <div class="button-box d-flex flex-wrap align-items-center">
                        <a href="assets\img\abrar-cv.pdf" class="btn tj-btn-secondary">Download CV <i class="fa-solid fa-download"></i>
                        </a>
                        <ul class="ul-reset social-icons">
                           <li>
                              <a href="https://twitter.com/yourusername" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                           </li>
                           <li>
                              <a href="https://github.com/yourusername" target="_blank"><i class="fa-brands fa-github"></i></a>
                           </li>
                           <li>
                              <a href="https://www.linkedin.com/in/abrar-amjad-87450a288/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 d-none d-md-block">
                  <div class="hero-image-box text-center">
                     <img src="assets/img/hero/profile.webp" alt="Front-End Developer" />
                  </div>
               </div>
            </div>
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
         </div>
      </section>
      <!-- HERO SECTION END -->


      <!-- SERVICES SECTION START -->
      <section class="services-section" id="services-section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-header text-center">
                     <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Quality Services</h2>
                     <p class="wow fadeInUp" data-wow-delay=".4s">
                        With expertise in modern web technologies, I provide services that focus on delivering functional, visually appealing, and responsive websites to help your business thrive.
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="services-widget position-relative">
                     <!-- Service 1: Full Stack Web Development -->
                     <div class="service-item current d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay=".5s">
                        <div class="left-box d-flex flex-wrap align-items-center">
                           <span class="number">01</span>
                           <h3 class="service-title">Full Stack Web Development</h3>
                        </div>
                        <div class="right-box">
                           <p>
                              I build robust and scalable web applications using modern technologies like Laravel and React.js. From front-end design to back-end development, I deliver end-to-end solutions.
                           </p>
                        </div>
                        <i class="bx bx-code"></i>
                        <button data-mfp-src="#service-wrapper" class="service-link modal-popup"></button>
                     </div>
                     <!-- Service 2: WordPress Development -->
                     <div class="service-item d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay=".6s">
                        <div class="left-box d-flex flex-wrap align-items-center">
                           <span class="number">02</span>
                           <h3 class="service-title">WordPress Development</h3>
                        </div>
                        <div class="right-box">
                           <p>
                              I create custom WordPress websites tailored to your needs. Whether it’s a blog, portfolio, or e-commerce store, I ensure your site is easy to manage and visually stunning.
                           </p>
                        </div>
                        <i class="bx bx-wordpress"></i>
                        <button data-mfp-src="#service-wrapper" class="service-link modal-popup"></button>
                     </div>
                     <!-- Service 3: Responsive Web Design -->
                     <div class="service-item d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay=".7s">
                        <div class="left-box d-flex flex-wrap align-items-center">
                           <span class="number">03</span>
                           <h3 class="service-title">Responsive Web Design</h3>
                        </div>
                        <div class="right-box">
                           <p>
                              I design responsive and user-friendly websites that look stunning on all devices. I leverage HTML, CSS, and Bootstrap to create layouts optimized for both mobile and desktop.
                           </p>
                        </div>
                        <i class="bx bx-devices"></i>
                        <button data-mfp-src="#service-wrapper" class="service-link modal-popup"></button>
                     </div>
                     <!-- Service 4: API Integration -->
                     <div class="service-item d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay=".8s">
                        <div class="left-box d-flex flex-wrap align-items-center">
                           <span class="number">04</span>
                           <h3 class="service-title">API Integration</h3>
                        </div>
                        <div class="right-box">
                           <p>
                              I integrate third-party APIs to enhance your website's functionality. From payment systems to social media APIs, I ensure seamless connectivity to improve user experience.
                           </p>
                        </div>
                        <i class="bx bx-link"></i>
                        <button data-mfp-src="#service-wrapper" class="service-link modal-popup"></button>
                     </div>
                     <!-- Service 5: Website Maintenance -->
                     <div class="service-item d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay=".9s">
                        <div class="left-box d-flex flex-wrap align-items-center">
                           <span class="number">05</span>
                           <h3 class="service-title">Website Maintenance</h3>
                        </div>
                        <div class="right-box">
                           <p>
                              I provide ongoing support and maintenance to ensure your website runs smoothly. From fixing bugs to updating content, I take care of everything to keep your site up-to-date.
                           </p>
                        </div>
                        <i class="bx bx-wrench"></i>
                        <button data-mfp-src="#service-wrapper" class="service-link modal-popup"></button>
                     </div>
                     <div class="active-bg wow fadeInUp" data-wow-delay=".5s"></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- SERVICES SECTION END -->

      <!-- start: Service Popup -->
      <div id="service-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide" data-lenis-prevent>
         <div class="popup_modal_img">
            <img src="./assets/img/services/modal-img.jpg" alt="Service Image" />
         </div>
         <div class="popup_modal_content">
            <div class="service_details">
               <div class="row">
                  <div class="col-lg-7 col-xl-8">
                     <div class="service_details_content">
                        <div class="service_info">
                           <h6 class="subtitle">SERVICES</h6>
                           <h2 class="title">Full Stack Web Development</h2>
                           <div class="desc">
                              <p>
                                 I specialize in creating dynamic, responsive, and feature-rich websites using modern technologies like Laravel and React.js. From concept to deployment, I ensure every project is crafted with precision and care.
                              </p>
                              <p>
                                 My websites are optimized for performance, scalability, and an exceptional user experience across all devices and browsers.
                              </p>
                              <p>
                                 Whether it's an e-commerce platform, business site, or a custom web application, I deliver solutions that align perfectly with your business goals.
                              </p>
                           </div>

                           <h3 class="title">Our Process</h3>
                           <div class="desc">
                              <p>
                                 My approach combines technical expertise with creative problem-solving to deliver outstanding results:
                              </p>
                           </div>
                           <ul>
                              <li>Client Consultation and Requirements Gathering</li>
                              <li>Wireframing and UI/UX Prototyping</li>
                              <li>Full Stack Development (Frontend and Backend)</li>
                              <li>Thorough Testing for Quality Assurance</li>
                              <li>Deployment and Post-Launch Support</li>
                              <li>Continuous Maintenance and Updates</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5 col-xl-4">
                     <div class="tj_main_sidebar">
                        <div class="sidebar_widget services_list">
                           <div class="widget_title">
                              <h3 class="title">All Services</h3>
                           </div>
                           <ul>
                              <li class="active">
                                 <button>
                                    <i class="bx bx-code"></i>
                                    Full Stack Development
                                 </button>
                              </li>
                              <li>
                                 <button>
                                    <i class="bx bx-wordpress"></i>
                                    WordPress Development
                                 </button>
                              </li>
                              <li>
                                 <button>
                                    <i class="bx bx-devices"></i>
                                    Responsive Web Design
                                 </button>
                              </li>
                              <li>
                                 <button>
                                    <i class="bx bx-link"></i>
                                    API Integration
                                 </button>
                              </li>
                              <li>
                                 <button>
                                    <i class="bx bx-wrench"></i>
                                    Website Maintenance
                                 </button>
                              </li>
                           </ul>
                        </div>

                        <div class="sidebar_widget contact_form">
                           <div class="widget_title">
                              <h3 class="title">Get in Touch</h3>
                           </div>

                           <form action="index.html">
                              <div class="form_group">
                                 <input type="text" name="name" id="name" placeholder="Name" autocomplete="off" />
                              </div>
                              <div class="form_group">
                                 <input type="email" name="semail" id="semail" placeholder="Email" autocomplete="off" />
                              </div>
                              <div class="form_group">
                                 <textarea name="smessage" id="smessage" placeholder="Your message" autocomplete="off"></textarea>
                              </div>
                              <div class="form_btn">
                                 <button class="btn tj-btn-primary" type="submit">Send Message</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end: Service Popup -->

      <!-- PORTFOLIO SECTION START -->
      <section class="portfolio-section" id="works-section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-header text-center">
                     <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Recent Works</h2>
                     <p class="wow fadeInUp" data-wow-delay=".4s">
                        Bringing your vision to life through a perfect blend of HTML, CSS, Bootstrap, JavaScript, Laravel, and WordPress.
                     </p>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-12">
                  <div class="portfolio-filter text-center wow fadeInUp" data-wow-delay=".5s">
                     <div class="button-group filter-button-group">
                        <button data-filter="*" class="active">Laravel</button>
                        <button data-filter=".uxui">WordPress</button>
                        <!-- <button data-filter=".branding">Branding</button>
                        <button data-filter=".mobile-app">Apps</button> -->
                        <div class="active-bg"></div>
                     </div>
                  </div>

                  <div class="portfolio-box wow fadeInUp" data-wow-delay=".6s">
                     <div class="portfolio-sizer"></div>
                     <div class="gutter-sizer"></div>

                     <!-- Branding Project -->
                     <div class="portfolio-item branding">
                        <div class="image-box">
                           <img src="assets\img\portfolio\littile_caruser.JPG" alt="Branding Project" />
                        </div>
                        <div class="content-box">
                           <h3 class="portfolio-title">Little Cruisers</h3>
                           <p>Little Cruisers is a professional website dedicated to providing comprehensive information about cruising experiences in Canada. The website is designed with a clean and user-friendly interface, featuring responsive design for seamless browsing across devices. Developed using HTML, CSS, JavaScript, and powered by PHP for backend functionality, the site ensures smooth navigation and dynamic content delivery. Its visually appealing layout incorporates modern web development practices to deliver an engaging user experience.</p>
                           <i class="bx bx-arrow-to-top"></i>
                           <button data-mfp-src="#Little-portfolio-wrapper" class="portfolio-link modal-popup"></button>
                        </div>
                     </div>

                     <!-- UX/UI Project -->
                     <div class="portfolio-item uxui">
                        <div class="image-box">
                           <img src="assets\img\portfolio\bellaluxurylimos.JPG" alt="UX/UI Design Project" />
                        </div>
                        <div class="content-box">
                           <h3 class="portfolio-title">Bella Luxury Limos</h3>
                           <p>Bella Luxury Limos is a premium website showcasing top-tier luxury limousine services. The site is elegantly designed with a responsive layout, ensuring a seamless experience on all devices. Built using HTML, CSS, and JavaScript for the front end, and powered by PHP for backend functionalities, it offers dynamic content and smooth navigation. The modern and sophisticated design reflects the brand's commitment to quality and luxury, making it a standout example of professional web development.</p>
                           <i class="bx bx-arrow-to-top"></i>
                           <button data-mfp-src="#bella-portfolio-wrapper" class="portfolio-link modal-popup"></button>
                        </div>
                     </div>

                     <!-- Mobile App Project -->
                     <div class="portfolio-item mobile-app">
                        <div class="image-box">
                           <img src="assets/img/portfolio/johnhall.jpg" alt="Mobile App Project" />
                        </div>
                        <div class="content-box">
                           <h3 class="portfolio-title">John Hall</h3>
                           <p>The John Hall website is a professional real estate platform designed to provide comprehensive property listings and services. It features a modern, responsive design, ensuring compatibility across all devices for an optimal user experience. Developed using HTML, CSS, JavaScript, and backed by PHP, the website offers dynamic functionality and seamless navigation. Its clean layout and intuitive interface make it an excellent example of effective web development tailored for the real estate industry.</p>
                           <i class="bx bx-arrow-to-top"></i>
                           <button data-mfp-src="#John-portfolio-wrapper" class="portfolio-link modal-popup"></button>
                        </div>
                     </div>

                     <!-- Branding Project -->
                     <div class="portfolio-item branding">
                        <div class="image-box">
                           <img src="assets/img/portfolio/jobrecycling.jpg" alt="Branding Project" />
                        </div>
                        <div class="content-box">
                           <h3 class="portfolio-title">Job Recycling</h3>
                           <p>Job Recycling is a specialized website focused on recycling solutions and services in the UK. The site is built with a clean, responsive design, ensuring an excellent user experience across all devices. Developed using HTML, CSS, JavaScript, and powered by PHP, it provides dynamic functionality and easy navigation. The modern layout, combined with user-friendly features, effectively highlights the brand’s commitment to sustainability and recycling innovation.</p>
                           <i class="bx bx-arrow-to-top"></i>
                           <button data-mfp-src="#job-recycling-portfolio-wrapper" class="portfolio-link modal-popup"></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- PORTFOLIO SECTION END -->

      <!-- start: Portfolio Popup - Little Cruisers -->
<div id="Little-portfolio-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide" data-lenis-prevent>
   <div class="popup_modal_img">
      <img src="./assets/img/portfolio/little-cruisers.jpg" alt="Portfolio Image" />
   </div>
   <div class="popup_modal_content">
      <div class="portfolio_info">
         <div class="portfolio_info_text">
            <h2 class="title">Little Cruisers</h2>
            <div class="desc">
               <p>A clean and responsive website showcasing cruising experiences across Canada, developed with modern web technologies.</p>
            </div>
            <a href="https://littlecruisers.ca/" class="btn tj-btn-primary" target="_blank">Live Preview <i class="fal fa-arrow-right"></i></a>
         </div>
         <div class="portfolio_info_items">
            <div class="info_item">
               <div class="key">Category</div>
               <div class="value">Web Development</div>
            </div>
            <div class="info_item">
               <div class="key">Technologies Used</div>
               <div class="value">HTML, CSS, JavaScript, PHP</div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end: Portfolio Popup -->

<!-- start: Portfolio Popup - Bella Luxury Limos -->
<div id="bella-portfolio-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide" data-lenis-prevent>
   <div class="popup_modal_img">
      <img src="./assets/img/portfolio/bella-luxury-limos.jpg" alt="Portfolio Image" />
   </div>
   <div class="popup_modal_content">
      <div class="portfolio_info">
         <div class="portfolio_info_text">
            <h2 class="title">Bella Luxury Limos</h2>
            <div class="desc">
               <p>A sophisticated website reflecting luxury and professionalism in limousine services, ensuring a seamless user experience.</p>
            </div>
            <a href="https://bellaluxurylimos.com/" class="btn tj-btn-primary" target="_blank">Live Preview <i class="fal fa-arrow-right"></i></a>
         </div>
         <div class="portfolio_info_items">
            <div class="info_item">
               <div class="key">Category</div>
               <div class="value">Web Development</div>
            </div>
            <div class="info_item">
               <div class="key">Technologies Used</div>
               <div class="value">HTML, CSS, JavaScript, PHP</div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end: Portfolio Popup -->

<!-- start: Portfolio Popup - John Hall -->
<div id="John-portfolio-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide" data-lenis-prevent>
   <div class="popup_modal_img">
      <img src="./assets/img/portfolio/john-hall.jpg" alt="Portfolio Image" />
   </div>
   <div class="popup_modal_content">
      <div class="portfolio_info">
         <div class="portfolio_info_text">
            <h2 class="title">John Hall</h2>
            <div class="desc">
               <p>A professional real estate platform offering comprehensive property listings and seamless navigation for all users.</p>
            </div>
            <a href="https://johnhall.bmgroupinc.com/" class="btn tj-btn-primary" target="_blank">Live Preview <i class="fal fa-arrow-right"></i></a>
         </div>
         <div class="portfolio_info_items">
            <div class="info_item">
               <div class="key">Category</div>
               <div class="value">Real Estate Platform</div>
            </div>
            <div class="info_item">
               <div class="key">Technologies Used</div>
               <div class="value">HTML, CSS, JavaScript, PHP</div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end: Portfolio Popup -->

<!-- start: Portfolio Popup - Job Recycling -->
<div id="job-recycling-portfolio-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide" data-lenis-prevent>
   <div class="popup_modal_img">
      <img src="./assets/img/portfolio/job-recycling.jpg" alt="Portfolio Image" />
   </div>
   <div class="popup_modal_content">
      <div class="portfolio_info">
         <div class="portfolio_info_text">
            <h2 class="title">Job Recycling</h2>
            <div class="desc">
               <p>An innovative platform dedicated to recycling solutions, designed with sustainability and usability in mind.</p>
            </div>
            <a href="https://jobrecycling.co.uk/" class="btn tj-btn-primary" target="_blank">Live Preview <i class="fal fa-arrow-right"></i></a>
         </div>
         <div class="portfolio_info_items">
            <div class="info_item">
               <div class="key">Category</div>
               <div class="value">Environmental Solutions</div>
            </div>
            <div class="info_item">
               <div class="key">Technologies Used</div>
               <div class="value">HTML, CSS, JavaScript, PHP</div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end: Portfolio Popup -->

<!-- start: Portfolio Popup - Qarni Travel -->
<div id="portfolio-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide" data-lenis-prevent>
   <div class="popup_modal_img">
      <img src="./assets/img/portfolio/qarni-travel.jpg" alt="Portfolio Image" />
   </div>
   <div class="popup_modal_content">
      <div class="portfolio_info">
         <div class="portfolio_info_text">
            <h2 class="title">Qarni Travel</h2>
            <div class="desc">
               <p>A travel booking and planning platform designed with modern aesthetics and exceptional usability.</p>
            </div>
            <a href="https://qarnitravel.com/" class="btn tj-btn-primary" target="_blank">Live Preview <i class="fal fa-arrow-right"></i></a>
         </div>
         <div class="portfolio_info_items">
            <div class="info_item">
               <div class="key">Category</div>
               <div class="value">Travel Platform</div>
            </div>
            <div class="info_item">
               <div class="key">Technologies Used</div>
               <div class="value">HTML, CSS, JavaScript, PHP</div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end: Portfolio Popup -->


      <!-- RESUME SECTION START -->
      <section class="resume-section" id="resume-section">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="section-header wow fadeInUp" data-wow-delay=".3s">
                     <h2 class="section-title"><i class="bx bxs-like"></i>My Experience</h2>
                  </div>
                  <div class="resume-widget">
                     <div class="resume-item wow fadeInLeft" data-wow-delay=".4s">
                        <div class="time">2023 - Present</div>
                        <h3 class="resume-title">Full-Stack Web Developer</h3>
                        <div class="institute">BMGROUP, Lahore</div>
                        <p>As a Full-stack web developer, I design and develop user-friendly websites using HTML, CSS, and JavaScript. I collaborate with designers and back-end developers to implement UI features and ensure cross-browser compatibility and website performance optimization.</p>
                     </div>
                     <div class="resume-item wow fadeInLeft" data-wow-delay=".5s">
                        <div class="time">2023 - 2024</div>
                        <h3 class="resume-title">Full-stack Web Developer</h3>
                        <div class="institute">MAXFLAP TECHNOLOGIES, Lahore</div>
                        <p>Designed and developed responsive websites, ensuring cross-browser compatibility and performance optimization. Collaborated with design and back-end teams for UI implementation and conducted code reviews to adhere to best practices.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="section-header wow fadeInUp" data-wow-delay=".4s">
                     <h2 class="section-title"><i class="bx bxs-graduation"></i> My Education</h2>
                  </div>
                  <div class="resume-widget">
                     <div class="resume-item wow fadeInRight" data-wow-delay=".5s">
                        <div class="time">2021 - 2023</div>
                        <h3 class="resume-title">ADP (Computer Science)</h3>
                        <div class="institute">University of Central Punjab</div>
                     </div>
                     <div class="resume-item wow fadeInRight" data-wow-delay=".6s">
                        <div class="time">2023 - Present</div>
                        <h3 class="resume-title">BS (Computer Science)</h3>
                        <div class="institute">University NCBA&E</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- RESUME SECTION END -->

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

      <!-- TESTIMONIAL SECTION START -->
      <section class="testimonial-section" id="testimonials-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-5">
                  <div class="section-header">
                     <h2 class="section-title wow fadeInLeft" data-wow-delay=".3s">My Client's Stories</h2>
                     <p class="wow fadeInLeft" data-wow-delay=".4s">Empowering people on a new digital journey with my
                        super services</p>
                  </div>
               </div>
               <div class="col-lg-7 col-xl-6 offset-xl-1">
                  <div class="testimonials-widget wow fadeInRight" data-wow-delay=".5s">
                     <div class="owl-carousel testimonial-carousel">
                        <!-- TESTIMONIAL ITEM 1 -->
                        <div class="testimonial-item">
                           <div class="top-area d-flex flex-wrap justify-content-between">
                              <div class="logo-box">
                                 <img src="assets/img/testimonials/logo/1.png" alt="Client Logo 1" />
                              </div>
                              <div class="image-box">
                                 <img src="assets/img/testimonials/user/1.jpg" alt="Client 1" />
                              </div>
                           </div>
                           <div class="icon-box">
                              <!-- SVG Icons here -->
                           </div>
                           <p class="quote">“Taylor is a professional Designer; he really helped my business by providing
                              value to my business."</p>
                           <h4 class="name">Brandon Fraser</h4>
                           <span class="designation">Senior Software Dev, Cosmic Sport</span>
                        </div>

                        <!-- TESTIMONIAL ITEM 2 -->
                        <div class="testimonial-item">
                           <div class="top-area d-flex flex-wrap justify-content-between">
                              <div class="logo-box">
                                 <img src="assets/img/testimonials/logo/2.png" alt="Client Logo 2" />
                              </div>
                              <div class="image-box">
                                 <img src="assets/img/testimonials/user/2.jpg" alt="Client 2" />
                              </div>
                           </div>
                           <div class="icon-box">
                              <!-- SVG Icons here -->
                           </div>
                           <p class="quote">“Taylor is a professional Designer; he really helped my business by providing
                              value to my business."</p>
                           <h4 class="name">Tim Bailey</h4>
                           <span class="designation">SEO Specialist, Theme Junction</span>
                        </div>

                        <!-- TESTIMONIAL ITEM 3 -->
                        <div class="testimonial-item">
                           <div class="top-area d-flex flex-wrap justify-content-between">
                              <div class="logo-box">
                                 <img src="assets/img/testimonials/logo/1.png" alt="Client Logo 1" />
                              </div>
                              <div class="image-box">
                                 <img src="assets/img/testimonials/user/1.jpg" alt="Client 1" />
                              </div>
                           </div>
                           <div class="icon-box">
                              <!-- SVG Icons here -->
                           </div>
                           <p class="quote">“Taylor is a professional Designer; he really helped my business by providing
                              value to my business."</p>
                           <h4 class="name">Brandon Fraser</h4>
                           <span class="designation">Senior Software Dev, Cosmic Sport</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- TESTIMONIAL SECTION END -->


      <!-- CONTACT SECTION START -->
      <section class="contact-section" id="contact-section">
         <div class="container">
            <div class="row">
               <!-- Contact Form Section -->
               <div class="col-lg-6 col-md-7 order-2 order-md-1">
                  <div class="contact-form-box wow fadeInLeft" data-wow-delay=".3s">
                     <div class="section-header">
                        <h2 class="section-title">Let’s work together!</h2>
                        <p>I design and code beautifully simple things and I love what I do. Just simple like that!</p>
                     </div>

                     <!-- Form Section -->
                     <div class="tj-contact-form">
                        <form id="contact-form">
                           <div class="row gx-3">
                              <div class="col-sm-6">
                                 <div class="form_group">
                                    <input type="text" name="conName" id="conName" placeholder="First name" required />
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form_group">
                                    <input type="text" name="conLName" id="conLName" placeholder="Last name" required />
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form_group">
                                    <input type="email" name="conEmail" id="conEmail" placeholder="Email address" required />
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form_group">
                                    <input type="tel" name="conPhone" id="conPhone" placeholder="Phone number" required />
                                 </div>
                              </div>
                              <div class="col-12">
                                 <div class="form_group">
                                    <select name="conService" id="conService" class="tj-nice-select" required>
                                       <option value="" selected disabled>Choose Service</option>
                                       <option value="branding">Job Recycling</option>
                                       <option value="web">Web Design</option>
                                       <option value="uxui">UI/UX Design</option>
                                       <option value="app">App Design</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-12">
                                 <div class="form_group">
                                    <textarea name="conMessage" id="conMessage" placeholder="Message" required></textarea>
                                 </div>
                              </div>
                              <div class="col-12">
                                 <div class="form_btn">
                                    <button type="submit" class="btn tj-btn-primary">Send Message</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>

               <!-- Contact Info Section -->
               <div class="col-lg-5 offset-lg-1 col-md-5 d-flex flex-wrap align-items-center order-1 order-md-2">
                  <div class="contact-info-list">
                     <ul class="ul-reset">
                        <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight" data-wow-delay=".4s">
                           <div class="icon-box">
                              <i class="bx bx-phone-call"></i>
                           </div>
                           <div class="text-box">
                              <p>Phone</p>
                              <a href="tel:+92349104139">+92 324 9104139</a>
                           </div>
                        </li>
                        <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight" data-wow-delay=".5s">
                           <div class="icon-box">
                              <i class="bx bx-mail-send"></i>
                           </div>
                           <div class="text-box">
                              <p>Email</p>
                              <a href="mailto:ranabobi30@gmail.com">ranabobi30@gmail.com</a>
                           </div>
                        </li>
                        <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight" data-wow-delay=".6s">
                           <div class="icon-box">
                              <i class="bx bx-map"></i>
                           </div>
                           <div class="text-box">
                              <p>Address</p>
                              <a href="#">Gulberg 3 Lahore pakistan</a>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- CONTACT SECTION END -->

      <!-- BEGIN: Contact Form Success Modal Message -->
      <div class="modal contact_modal" id="message_sent" tabindex="-1">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <span class="modal-title"><strong>Message Sent Successfully</strong></span>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fas fa-times"></i></button>
               </div>
               <div class="modal-body">
                  <p>Thank you for contacting us. We will get back to you shortly.<br />Have a great day!</p>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- END: Contact Form Success Modal Message -->

      <!-- BEGIN: Contact Form Fail Modal Message -->
      <div class="modal contact_modal failed" id="message_fail" tabindex="-1">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <span class="modal-title"><strong>Error</strong></span>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fas fa-times"></i></button>
               </div>
               <div class="modal-body">
                  <p>Oops! Something went wrong, please try again.</p>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- END: Contact Form Fail Modal Message End -->
   </main>

@endsection