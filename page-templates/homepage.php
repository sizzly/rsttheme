<?php
/**
 * Template Name: Home Page  
 *

 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>RST Consulting</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="/wp-content/themes/rsttheme/assets/img/favicon.png" rel="icon">
  <link href="/wp-content/themes/rsttheme/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/wp-content/themes/rsttheme/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/wp-content/themes/rsttheme/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/wp-content/themes/rsttheme/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/wp-content/themes/rsttheme/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/wp-content/themes/rsttheme/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/wp-content/themes/rsttheme/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="starter-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="/themes/rst/img/logo.png" alt=""> -->
        <h1 class="sitename">RST Consulting</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/services">Services</a></li>
          <li><a href="/blog">Blog</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="https://portal.robtacey.com" target="_blank">Portal</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <!-- <img src="/wp-content/themes/rsttheme/assets/img/hero-bg.jpg" alt="" data-aos="fade-in"> -->

      <div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="container position-relative">

          <div class="carousel-item active">
            <div class="carousel-container">
              <h2>Cyber threats don’t just target big companies anymore</h2>
              <p>Small businesses are increasingly hit by phishing, ransomware, and data breaches—often without the time, staff, or expertise to manage security properly.</p>
              <a href="#about" class="btn-get-started">Read More</a>
            </div>
          </div><!-- End Carousel Item -->

          <div class="carousel-item">
            <div class="carousel-container">
              <h2>Security advice that works in your best interest.</h2>
              <p>I provide independent cybersecurity consulting—no products to sell, no vendor agendas—just clear, honest guidance focused on protecting your business.</p>
              <a href="#about" class="btn-get-started">Read More</a>
            </div>
          </div><!-- End Carousel Item -->

          <div class="carousel-item">
            <div class="carousel-container">
              <h2>Make confident security decisions—without the sales pressure.</h2>
              <p>You’ll know where your real risks are, what actually needs fixing, and how to protect your business in a practical, affordable way.</p>
              <a href="#about" class="btn-get-started">Read More</a>
            </div>
          </div><!-- End Carousel Item -->

          <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          </a>

          <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          </a>

          <ol class="carousel-indicators"></ol>

        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Practical Security Processes</h3>
              </a>
              <p>Simple, repeatable security processes your team can follow.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Ongoing Security Monitoring</h3>
              </a>
              <p>Continuous visibility into risks without a full‑time security team.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Backup & Recovery Assurance</h3>
              </a>
              <p>Confidence that your data can be restored when it matters.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-red position-relative">
              <div class="icon">
                <i class="bi bi-bounding-box-circles"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Independent Security Consulting</h3>
              </a>
              <p>Vendor‑neutral, fiduciary guidance focused on your best interests.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->
        </div>

      </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
            <img src="/wp-content/themes/rsttheme/assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Enterprise‑Level Security. Small‑Business Focus.</h3>
            <p class="fst-italic">
              RST Consulting was created for small businesses that know IT security matters—but don’t have the budget or need for enterprise‑scale services.
            </p>
            <p>
              We’ve seen both sides. After years working with large enterprise organizations and small growing teams, one thing became clear: most security offerings are built for companies with dedicated IT departments and deep pockets. Small businesses are left choosing between unaffordable solutions or doing nothing at all.
            </p>
            <p>
              RST Consulting bridges that gap. We bring enterprise‑level security experience and apply it with a practical, small‑business mindset—focusing on what actually reduces risk without unnecessary complexity or cost.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>Proven security practices adapted for small teams</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Clear, practical guidance—not fear‑driven upselling</span></li>
              <li><i class="bi bi-check2-all"></i> <span>A partner who understands your business constraints</span></li>
            </ul>
            <p>
              Security shouldn’t be out of reach just because your business isn’t an enterprise.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Features</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <img src="/wp-content/themes/rsttheme/assets/img/feature-1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            <h3>Security That Fits Your Business</h3>
            <p class="fst-italic">
              You don’t need big‑company systems to stay secure. We help you focus on the protections that actually make sense for your business, your size, and your budget—nothing more, nothing less.
            </p>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="/wp-content/themes/rsttheme/assets/img/feature-2.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
            <h3>Plain‑English Advice</h3>
            <p>
              No jargon. No scare tactics. We explain security in clear, straightforward language so you always understand what’s going on and why it matters.
            </p>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
            <img src="/wp-content/themes/rsttheme/assets/img/feature-3b.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7" data-aos="fade-up">
            <h3>Focused on What Really Matters</h3>
            <p>Instead of overwhelming you with tools and checklists, we help you prioritize the risks most likely to affect your business—saving you time and reducing unnecessary costs.</p>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
            <img src="/wp-content/themes/rsttheme/assets/img/feature-4a.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
            <h3>Experience You Can Trust</h3>
            <p>
              RST Consulting is built on real experience working with both large enterprises and small businesses. We bring proven security knowledge and apply it thoughtfully for small teams.
            </p>
          </div>
        </div><!-- Features Item -->

      </div>

    </section><!-- /Features Section -->

  </main>
 
  <footer id="footer" class="footer dark-background">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join the Newsletter</h4>
            <p>The newsletter is low volume and provides updates to help secure your business.</p>
            <script type="text/javascript" src="https://go.robtacey.com/form/generate.js?id=1"></script>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">RST Consulting</span>
          </a>
          <div class="footer-contact pt-3">
            <p class="mt-3"><strong>Phone:</strong> <span>+1 (548) 377-2012</span></p>
            <p><strong>Email:</strong> <span>rob@robtacey.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="/">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="/about">About</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="/services">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="/terms">Terms of Service</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="/privacy">Privacy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="/services-consulting">Consulting</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="/services-assessment">Assessments</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="/services-monitoring">Monitoring</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="/services-disaster-recovery">Disaster Recovery</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Social Media</h4>
          <div class="social-links d-flex">
            <a href="https://bsky.app/profile/robtacey.bsky.social"><i class="bi bi-bluesky"></i></a>
            <a href="https://www.linkedin.com/in/rob-tacey/"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">RST Consulting</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/wp-content/themes/rsttheme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/wp-content/themes/rsttheme/assets/vendor/php-email-form/validate.js"></script>
  <script src="/wp-content/themes/rsttheme/assets/vendor/aos/aos.js"></script>
  <script src="/wp-content/themes/rsttheme/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/wp-content/themes/rsttheme/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/wp-content/themes/rsttheme/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/wp-content/themes/rsttheme/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/wp-content/themes/rsttheme/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="/wp-content/themes/rsttheme/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="/wp-content/themes/rsttheme/assets/js/main.js"></script>

</body>

</html>