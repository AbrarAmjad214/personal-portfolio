<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
   <meta charset="utf-8" />
   <meta http-equiv="x-ua-compatible" content="ie=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />

   <!-- SEO Meta Tags -->
   <title>rabrar - Personal Portfolio</title>
   <meta name="description" content="rabrar's Personal Portfolio - Showcasing professional web design, UX/UI, development, and branding projects." />
   <meta name="keywords" content="rabrar, portfolio, web designer, UX/UI, branding, front-end development, HTML, CSS, JavaScript, WordPress, Laravel, responsive design" />
   <meta name="author" content="rabrar" />
   <meta name="robots" content="index, follow" />
   <meta name="theme-color" content="#0d6efd" />

   <!-- Open Graph / Social Media -->
   <meta property="og:title" content="rabrar - Personal Portfolio" />
   <meta property="og:description" content="Explore rabrar's portfolio of creative web design, UX/UI, branding, and development projects." />
   <meta property="og:image" content="{{ asset('assets/img/portfolio-preview.jpg') }}" />
   <meta property="og:url" content="https://yourwebsite.com" />
   <meta property="og:type" content="website" />
   <meta property="og:locale" content="en_US" />

   <!-- Twitter Card -->
   <meta name="twitter:card" content="summary_large_image" />
   <meta name="twitter:title" content="rabrar - Personal Portfolio" />
   <meta name="twitter:description" content="Professional portfolio showcasing innovative web design, branding, and development projects." />
   <meta name="twitter:image" content="{{ asset('assets/img/portfolio-preview.jpg') }}" />

   <!-- Canonical URL -->
   <link rel="canonical" href="https://yourwebsite.com" />

   <!-- Favicon and Icons -->
   <link rel="apple-touch-icon" href="{{ asset('assets/img/favicon.png') }}" />
   <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />

   <!-- Stylesheets -->
   <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/flaticon_gerold.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/backToTop.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/odometer-theme-default.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/main-2.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/main-3.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/responsive-2.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/responsive-3.css') }}" />
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
   <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>

<body class="light-mode">
   <!-- Preloader Area Start -->
   <div class="preloader">
      <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
         <path id="preloaderSvg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
      </svg>

      <div class="preloader-heading">
         <div class="load-text">
            <span>L</span>
            <span>o</span>
            <span>a</span>
            <span>d</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>
         </div>
      </div>
   </div>
   <!-- Preloader Area End -->

   <!-- start: Back To Top -->
   <div class="progress-wrap" id="scrollUp">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- end: Back To Top -->

   <!-- HEADER START -->
   <header class="tj-header-area header-absolute">
      <div class="container">
         <div class="row">
            <div class="col-12 d-flex flex-wrap align-items-center">
               <div class="logo-box">
                  <a href="{{ ('/') }}">
                     <img src="assets/img/logo/logo-dark.png" alt="" />
                  </a>
               </div>
               <div class="header-info-list d-none d-md-inline-block">
               <ul class="ul-reset">
                  <li><a href="mailto:ranabobi30@gmail.com">ranabobi30@gmail.com</a></li>
               </ul>

               </div>
               <div class="header-menu" id="headerMenu">
                  <nav>
                     <ul>
                        <li class="current-menu-ancestor">
                           <a class="current-menu-item" href="{{ ('/') }}">Home</a>
                        </li>
                        <li><a href="{{ ('about-us') }}">About Us</a></li>
                        <li><a href="{{ ('services') }}">Services</a></li>
                        <li><a href="{{ ('portfolio') }}">Portfolios</a></li>
                        <li><a href="{{ ('contact') }}">Contact</a></li>
                     </ul>
                  </nav>
               </div>
               <div class="mobile-menu d-lg-none"></div>
               <div class="header-button">
                  <a href="#" class="btn tj-btn-primary">Hire me!</a>
               </div>
               <div class="menu-bar d-lg-none">
                  <button>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </header>
   <header class="tj-header-area header-2 header-sticky sticky-out">
      <div class="container">
         <div class="row">
            <div class="col-12 d-flex flex-wrap align-items-center">
               <div class="logo-box">
                  <a href="{{ ('/') }}">
                     <img src="assets/img/logo/logo-dark.png" alt="" />
                  </a>
               </div>
               <div class="header-info-list d-none d-md-inline-block">
               <ul class="ul-reset">
                  <li><a href="mailto:ranabobi30@gmail.com">ranabobi30@gmail.com</a></li>
               </ul>
               </div>
               <div class="header-menu">
                  <nav>
                     <ul>
                        <li class="has-dropdown current-menu-ancestor">
                           <a href="{{ ('/') }}">Home</a>
                        </li>
                        <li><a href="{{ ('about-us') }}">About Us</a></li>
                        <li><a href="{{ ('services') }}">Services</a></li>
                        <li><a href="{{ ('portfolio') }}">Portfolios</a></li>
                        <li><a href="{{ ('contact') }}">Contact</a></li>
                     </ul>
                  </nav>
               </div>
               <div class="mobile-menu d-lg-none"></div>
               <div class="header-button">
                  <a href="#" class="btn tj-btn-primary">Hire me!</a>
               </div>
               <div class="menu-bar d-lg-none">
                  <button>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- HEADER END -->
    @yield('content')

    <!-- FOOTER AREA START -->
   <footer class="tj-footer-area">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <div class="footer-logo-box">
                  <a href="#"><img src="assets/img/logo/logo-dark.png" alt="" /></a>
               </div>
               <div class="footer-menu">
                  <nav>
                     <ul>
                        <li><a href="{{ ('about-us') }}">About Us</a></li>
                        <li><a href="{{ ('services') }}">Services</a></li>
                        <li><a href="{{ ('portfolio') }}">Portfolios</a></li>
                        <li><a href="{{ ('contact') }}">Contact</a></li>
                     </ul>
                  </nav>
               </div>
               <div class="copy-text">
                  <p>&copy; 2024 All rights reserved by <a href="https://rabrar.com/" target="_blank">rabrar</a></p>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- FOOTER AREA END -->

   <!-- JS here -->
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>

   <script src="assets/js/gsap.min.js"></script>
   <script src="assets/js/gsap-scroll-to-plugin.min.js"></script>
   <script src="assets/js/gsap-scroll-trigger.min.js"></script>
   <script src="assets/js/gsap-split-text.min.js"></script>
   <script src="assets/js/lenis.min.js"></script>

   <script src="assets/js/nice-select.min.js"></script>
   <script src="assets/js/backToTop.js"></script>
   <script src="assets/js/appear.min.js"></script>
   <script src="assets/js/wow.min.js"></script>
   <script src="assets/js/lightcase.js"></script>
   <script src="assets/js/owl.carousel.min.js"></script>
   <script src="assets/js/swiper.min.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/isotope.pkgd.min.js"></script>
   <script src="assets/js/odometer.min.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/validate.min.js"></script>
   <script src="assets/js/meanmenu.js"></script>
   <script src="assets/js/main.js"></script>
</body>

</html>