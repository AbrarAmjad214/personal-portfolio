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
                     <h2 class="title wow fadeInUp" data-wow-delay=".3s">Contact</h2>
                     <div class="breadcrumb_navigation wow fadeInUp" data-wow-delay=".5s">
                        <span><a href="{{ ('/') }}">Home</a></span>
                        <i class="bx bx-chevron-right"></i>
                        <span class="current-item">Contact</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- END: Breadcrumb Area -->

      <!-- CONTACT SECTION START -->
         <section class="contact-section" id="contact-section">
            <div class="container">
                <div class="row">
                    <!-- Contact Form Section -->
                    <div class="col-lg-6 col-md-7 order-2 order-md-1">
                        <div class="contact-form-box wow fadeInLeft" data-wow-delay=".3s">
                            <div class="section-header">
                                <h2 class="section-title">Let’s work together!</h2>
                                <p>I design and code beautifully simple things, and I love what I do. Just simple like that!</p>
                            </div>
        
                            <!-- Form Section -->
                            <div class="tj-contact-form">
                                <form id="contact-form" action="{{ route('contact.store') }}" method="POST" novalidate="novalidate">
                                    @csrf
                                    <div class="row gx-3">
                                        <!-- First Name -->
                                        <div class="col-sm-6">
                                            <div class="form_group">
                                                <input type="text" name="name" id="conName" placeholder="Your Name" required aria-required="true">
                                            </div>
                                        </div>
                                        <!-- Email -->
                                        <div class="col-sm-6">
                                            <div class="form_group">
                                                <input type="email" name="email" id="conEmail" placeholder="Email Address" required aria-required="true">
                                            </div>
                                        </div>
                                        <!-- Phone -->
                                        <div class="col-sm-6">
                                            <div class="form_group">
                                                <input type="tel" name="phone" id="conPhone" placeholder="Phone Number" required aria-required="true">
                                            </div>
                                        </div>
                                        <!-- Subject -->
                                        <div class="col-sm-6">
                                            <div class="form_group">
                                                <input type="text" name="subject" id="conSubject" placeholder="Subject" required aria-required="true">
                                            </div>
                                        </div>
                                        <!-- Message -->
                                        <div class="col-12">
                                            <div class="form_group">
                                                <textarea name="message" id="conMessage" placeholder="Your Message" required aria-required="true"></textarea>
                                            </div>
                                        </div>
                                        <!-- Submit Button -->
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
                                <!-- Phone -->
                                <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight" data-wow-delay=".4s">
                                    <div class="icon-box">
                                        <i class="bx bx-phone-call"></i>
                                    </div>
                                    <div class="text-box">
                                        <p>Phone</p>
                                        <a href="tel:+923249104139">+92 324 9104139</a>
                                    </div>
                                </li>
                                <!-- Email -->
                                <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight" data-wow-delay=".5s">
                                    <div class="icon-box">
                                        <i class="bx bx-mail-send"></i>
                                    </div>
                                    <div class="text-box">
                                        <p>Email</p>
                                        <a href="mailto:ranabobi30@gmail.com">ranabobi30@gmail.com</a>
                                    </div>
                                </li>
                                <!-- Address -->
                                <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight" data-wow-delay=".6s">
                                    <div class="icon-box">
                                        <i class="bx bx-map"></i>
                                    </div>
                                    <div class="text-box">
                                        <p>Address</p>
                                        <a href="#">Gulberg 3, Lahore, Pakistan</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      <!-- CONTACT SECTION END -->
</main>

@endsection