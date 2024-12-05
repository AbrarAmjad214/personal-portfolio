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
                     <h2 class="title wow fadeInUp" data-wow-delay=".3s">Services</h2>
                     <div class="breadcrumb_navigation wow fadeInUp" data-wow-delay=".5s">
                        <span><a href="{{ ('/') }}">Home</a></span>
                        <i class="bx bx-chevron-right"></i>
                        <span class="current-item">Services</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- END: Breadcrumb Area -->

      <!-- start: Service Area -->
<section class="service-section">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="section-header text-center">
               <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">Our Expertise</h2>
               <p class="wow fadeInUp text-uppercase" data-wow-delay=".4s">Services We Offer</p>
            </div>
         </div>
      </div>
      <div class="row">
         <!-- HTML, CSS, and Bootstrap Development -->
         <div class="col-lg-6">
            <div class="service-item wow fadeInLeft" data-wow-delay=".3s">
               <div class="service-icon">
                  <i class="fab fa-html5"></i> <!-- HTML5 icon -->
               </div>
               <div class="service-content">
                  <h5 class="title"><button data-mfp-src="#service-wrapper" class="modal-popup">HTML/CSS & Bootstrap</button></h5>
                  <div class="desc">
                     <p>We specialize in crafting pixel-perfect websites using HTML, CSS, and Bootstrap. Our focus is on creating responsive and visually appealing layouts that adapt to all screen sizes.</p>
                  </div>
               </div>
            </div>
         </div>

         <!-- JavaScript Development -->
         <div class="col-lg-6">
            <div class="service-item wow fadeInRight" data-wow-delay=".3s">
               <div class="service-icon">
                  <i class="fab fa-js-square"></i> <!-- JavaScript icon -->
               </div>
               <div class="service-content">
                  <h5 class="title"><button data-mfp-src="#service-wrapper" class="modal-popup">JavaScript Development</button></h5>
                  <div class="desc">
                     <p>We bring websites to life with JavaScript, ensuring smooth interactivity, dynamic features, and a seamless user experience. From form validations to complex animations, we do it all.</p>
                  </div>
               </div>
            </div>
         </div>

         <!-- Laravel Development -->
         <div class="col-lg-6">
            <div class="service-item wow fadeInLeft" data-wow-delay=".4s">
               <div class="service-icon">
                  <i class="fab fa-laravel"></i> <!-- Laravel icon -->
               </div>
               <div class="service-content">
                  <h5 class="title"><button data-mfp-src="#service-wrapper" class="modal-popup">Laravel Development</button></h5>
                  <div class="desc">
                     <p>We develop powerful, secure, and scalable web applications using Laravel. Whether it's building custom CMS, e-commerce platforms, or complex business solutions, we have you covered.</p>
                  </div>
               </div>
            </div>
         </div>

         <!-- ReactJS Development -->
         <div class="col-lg-6">
            <div class="service-item wow fadeInRight" data-wow-delay=".4s">
               <div class="service-icon">
                  <i class="fab fa-react"></i> <!-- ReactJS icon -->
               </div>
               <div class="service-content">
                  <h5 class="title"><button data-mfp-src="#service-wrapper" class="modal-popup">ReactJS Development</button></h5>
                  <div class="desc">
                     <p>We build fast and interactive user interfaces using ReactJS. Whether it’s single-page applications or complex UIs, we create robust and scalable solutions for modern web applications.</p>
                  </div>
               </div>
            </div>
         </div>

         <!-- WordPress Development -->
         <div class="col-lg-6">
            <div class="service-item wow fadeInLeft" data-wow-delay=".5s">
               <div class="service-icon">
                  <i class="fab fa-wordpress"></i> <!-- WordPress icon -->
               </div>
               <div class="service-content">
                  <h5 class="title"><button data-mfp-src="#service-wrapper" class="modal-popup">WordPress Development</button></h5>
                  <div class="desc">
                     <p>We provide custom WordPress theme and plugin development services. From creating simple blogs to complex websites, we ensure your site is fast, secure, and user-friendly.</p>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
</section>
<!-- end: Service Area -->


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
                           <h6 class="subtitle">OUR SERVICES</h6>
                           <h2 class="title">UI/UX Design</h2>
                           <div class="desc">
                              <p>Our UI/UX design service focuses on creating delightful experiences for users. We conduct in-depth research to understand user needs, create wireframes, and design intuitive interfaces that boost user engagement.</p>

                              <p>Our team collaborates with you to ensure your vision is translated into designs that enhance usability, accessibility, and functionality across all digital touchpoints.</p>

                              <p>From research to testing, we follow a comprehensive approach to deliver designs that exceed expectations and help you achieve business goals.</p>
                           </div>
                           <h3 class="title">Service Process</h3>
                           <div class="desc">
                              <p>We follow a proven process that ensures we craft the perfect UI/UX solution for your business:</p>
                           </div>
                           <ul>
                              <li>Understand User Needs & Conduct Research</li>
                              <li>Create Wireframes and Prototypes</li>
                              <li>Design Intuitive, User-Centric Interfaces</li>
                              <li>Test & Optimize for Seamless User Experience</li>
                              <li>Deliver Designs that Align with Business Goals</li>
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
                                    <i class="flaticon-design"></i>
                                    Branding Design
                                 </button>
                              </li>
                              <li>
                                 <button>
                                    <i class="flaticon-3d-movie"></i>
                                    3D Animation
                                 </button>
                              </li>
                              <li>
                                 <button>
                                    <i class="flaticon-ux-design"></i>
                                    UI/UX Design
                                 </button>
                              </li>
                              <li>
                                 <button>
                                    <i class="flaticon-web-design"></i>
                                    Web Design
                                 </button>
                              </li>
                              <li>
                                 <button>
                                    <i class="flaticon-ui-design"></i>
                                    App Design
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
   </main>

@endsection