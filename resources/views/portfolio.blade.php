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
                     <h2 class="title wow fadeInUp" data-wow-delay=".3s">Portfolio</h2>
                     <div class="breadcrumb_navigation wow fadeInUp" data-wow-delay=".5s">
                        <span><a href="{{ ('/') }}">Home</a></span>
                           <i class="bx bx-chevron-right"></i>
                        <span class="current-item">Portfolio</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- END: Breadcrumb Area -->

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
                        <button data-filter="*" class="active">All</button>
                        <button data-filter=".uxui">UX/UI</button>
                        <button data-filter=".branding">Branding</button>
                        <button data-filter=".mobile-app">Apps</button>
                        <div class="active-bg"></div>
                     </div>
                  </div>

                  <div class="portfolio-box wow fadeInUp" data-wow-delay=".6s">
                     <div class="portfolio-sizer"></div>
                     <div class="gutter-sizer"></div>

                     <!-- Branding Project -->
                     <div class="portfolio-item branding">
                        <div class="image-box">
                           <img src="assets/img/portfolio/2.jpg" alt="Branding Project" />
                        </div>
                        <div class="content-box">
                           <h3 class="portfolio-title">Deloitte Branding</h3>
                           <p>Created a professional and innovative branding strategy for Deloitte, focusing on precision and trust for their global audience.</p>
                           <p>Technologies Used: HTML, CSS, Bootstrap, JavaScript</p>
                           <i class="bx bx-arrow-to-top"></i>
                           <button data-mfp-src="#portfolio-wrapper" class="portfolio-link modal-popup"></button>
                        </div>
                     </div>

                     <!-- UX/UI Project -->
                     <div class="portfolio-item uxui">
                        <div class="image-box">
                           <img src="assets/img/portfolio/1.jpg" alt="UX/UI Design Project" />
                        </div>
                        <div class="content-box">
                           <h3 class="portfolio-title">New Age Web Design</h3>
                           <p>Designed a user-friendly and responsive website for New Age, optimizing UX/UI for easy navigation and customer satisfaction.</p>
                           <p>Technologies Used: HTML, CSS, Bootstrap, JavaScript, WordPress</p>
                           <i class="bx bx-arrow-to-top"></i>
                           <button data-mfp-src="#portfolio-wrapper" class="portfolio-link modal-popup"></button>
                        </div>
                     </div>

                     <!-- Mobile App Project -->
                     <div class="portfolio-item mobile-app">
                        <div class="image-box">
                           <img src="assets/img/portfolio/3.jpg" alt="Mobile App Project" />
                        </div>
                        <div class="content-box">
                           <h3 class="portfolio-title">Sebastian App</h3>
                           <p>Developed a highly interactive mobile app for Sebastian to streamline services and enhance user engagement.</p>
                           <p>Technologies Used: HTML, CSS, JavaScript, Laravel, WordPress</p>
                           <i class="bx bx-arrow-to-top"></i>
                           <button data-mfp-src="#portfolio-wrapper" class="portfolio-link modal-popup"></button>
                        </div>
                     </div>

                     <!-- Branding Project -->
                     <div class="portfolio-item branding">
                        <div class="image-box">
                           <img src="assets/img/portfolio/4.jpg" alt="Branding Project" />
                        </div>
                        <div class="content-box">
                           <h3 class="portfolio-title">Mochnix Logo Design</h3>
                           <p>Created a fresh and dynamic logo for Mochnix, representing their tech-forward vision and innovative approach.</p>
                           <p>Technologies Used: HTML, CSS, Bootstrap</p>
                           <i class="bx bx-arrow-to-top"></i>
                           <button data-mfp-src="#portfolio-wrapper" class="portfolio-link modal-popup"></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- PORTFOLIO SECTION END -->

      <!-- start: Portfolio Popup -->
      <div id="portfolio-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide" data-lenis-prevent>
         <div class="popup_modal_img">
            <img src="./assets/img/portfolio/modal-img.jpg" alt="Portfolio Image" />
         </div>
         <div class="popup_modal_content">
            <div class="portfolio_info">
               <div class="portfolio_info_text">
                  <h2 class="title">Creative Web Studio</h2>
                  <div class="desc">
                     <p>
                        This project showcases my expertise in crafting modern, responsive, and performance-focused websites that stand out in the digital landscape.
                     </p>
                  </div>
                  <a href="#" class="btn tj-btn-primary">Live Preview <i class="fal fa-arrow-right"></i></a>
               </div>
               <div class="portfolio_info_items">
                  <div class="info_item">
                     <div class="key">Category</div>
                     <div class="value">Full Stack Development</div>
                  </div>
                  <div class="info_item">
                     <div class="key">Client</div>
                     <div class="value">Creative Co.</div>
                  </div>
                  <div class="info_item">
                     <div class="key">Start Date</div>
                     <div class="value">October 10, 2023</div>
                  </div>
                  <div class="info_item">
                     <div class="key">Technologies Used</div>
                     <div class="value">React.js, Laravel, Bootstrap</div>
                  </div>
               </div>
            </div>
            <div class="portfolio_gallery owl-carousel">
               <div class="gallery_item">
                  <img src="./assets/img/portfolio-gallery/p-gallery-1.jpg" alt="Gallery Image 1" />
               </div>
               <div class="gallery_item">
                  <img src="./assets/img/portfolio-gallery/p-gallery-2.jpg" alt="Gallery Image 2" />
               </div>
               <div class="gallery_item">
                  <img src="./assets/img/portfolio-gallery/p-gallery-3.jpg" alt="Gallery Image 3" />
               </div>
               <div class="gallery_item">
                  <img src="./assets/img/portfolio-gallery/p-gallery-4.jpg" alt="Gallery Image 4" />
               </div>
            </div>
            <div class="portfolio_description">
               <h2 class="title">Project Description</h2>
               <div class="desc">
                  <p>
                     The project involved building a fully responsive website with custom features to enhance user experience. Designed for scalability and efficiency, this solution offers seamless navigation and modern aesthetics.
                  </p>

                  <p>
                     Emphasis was placed on creating a clean and intuitive interface while ensuring optimal performance across all platforms and devices.
                  </p>
               </div>
            </div>
            <div class="portfolio_story_approach">
               <div class="portfolio_story">
                  <div class="story_title">
                     <h4 class="title">The Story</h4>
                  </div>
                  <div class="story_content">
                     <p>
                        This project began as a challenge to create a dynamic and engaging online presence for the client. By understanding their vision and audience, we crafted a unique solution that aligns with their goals and reflects their brand identity.
                     </p>
                  </div>
               </div>
               <div class="portfolio_approach">
                  <div class="approach_title">
                     <h4 class="title">Our Approach</h4>
                  </div>
                  <div class="approach_content">
                     <p>
                        We adopted a systematic approach focusing on user-centric design, robust backend functionality, and high performance. The process involved detailed planning, agile development, and rigorous testing to ensure the final product met and exceeded client expectations.
                     </p>
                  </div>
               </div>
            </div>
            <div class="portfolio_navigation">
               <div class="navigation_item prev-project">
                  <a href="#" class="project">
                     <i class="fal fa-arrow-left"></i>
                     <div class="nav_project">
                        <div class="label">Previous Project</div>
                        <h3 class="title">Digital Solutions</h3>
                     </div>
                  </a>
               </div>
               <div class="navigation_item next-project">
                  <a href="#" class="project">
                     <div class="nav_project">
                        <div class="label">Next Project</div>
                        <h3 class="title">Tech Pro</h3>
                     </div>
                     <i class="fal fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <!-- end: Portfolio Popup -->
   </main>

@endsection