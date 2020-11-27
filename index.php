<!DOCTYPE html>
<html lang="en">
<?php include('assets/save.php') ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tomas Martinčić</title>
  <meta content="Tomas Martinčić's web portfolio about a student, electrician, developer and enthusiast. Labin & Istra <3" name="descriptison">
  <meta content="Tomas Martinčić, portfolio, Labin, developer" name="keywords">
  <meta name="robots" content="index, follow">

  <!-- Google Fonts --> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume - v2.1.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav class="nav-menu">
      <ul>
        <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#hobby"><i class="bx bx-book-content"></i> <span>Hobby</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Tomas Martinčić</h1>
      <p>I'm <span class="typed" data-typed-items="Developer, Student, Hobbist"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>Web and Mobile Computing student at RIT Croatia, currently working part-time at Lloyds Design as Junior Backend developer. I'm working in person and remotely from Zagreb while studying. I'm interested in server programming, robotics, and penetration testing/cybersecurity. We'll just have to see where my future takes me. </p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Backend developer &amp; Student.</h3>
            
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> July 2000</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> martincic.dev</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> 098 408 217</li>
                  <li><i class="icofont-rounded-right"></i> <strong>City:</strong> Istria, Labin/Zagreb</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 
                    <?php
                      $lastYear = date("Y") - 2000;
                      $lastYearDate = date($lastYear);
                      echo $lastYearDate;
                    ?> 
                  </li>
                  <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Electrotechnician</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> martincic.tomas@gmail.com</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Not Available</li>
                </ul>
              </div>
            </div>
            <p>
            Currently, I'm working with Laravel (PHP framework) and build commercial CMS's, studying Web and Mobile computing at university, playing with my Raspberry Pi web server/IoT controller. Up to today, I have been successful in creating a Web server, <a href="https://github.com/Martincic/php-monitoring">web monitoring system</a> which I work on whenever I'm free. Currently, I have lightswitch in my room that can be controlled from the other side of the world, buzzer notifies me whenever some visits the website, different kind of alert for the failed light password, storing all requests to the website, geolocating visitors, reading temperature and soon to add to IoT panel, 99.9% uptime with ddns_update_script a friend wrote, and more coming soon.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
          <p>I love combining all the skills together in a single useful entity. Electronics which I've studied for a long time go very well with programming I'm currently studying. This is a skill set I'm currently pursuing, technical and practical.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Laravel <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Raspberry Pi <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Linux <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Relational Databases <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Java<i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
          <p>Tools and skills I'm working with or familiar with: PHP, Java, Python, Laravel, MySQL, Linux, Github, Gitlab, phpmyadmin, Raspberry pi, Insomnia, XAMPP, composer, JSON, JavaScript, RESTful API, OOP,...</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Tomas Martinčić</h4>
              <p><em>Curious and ambitious student eager to learn and use new skills wherever he can. A big glass of beer is a place where I can deflate my head after a hard-working day.</em></p>
              <ul>
                <li>Labin/Zagreb, Croatia</li>
                <li>(+385) 098 408 217</li>
                <li>martincic.tomas@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bachelor of Web &amp; Mobile computing</h4>
              <h5>2019 - Present</h5>
              <p><em>Rochester Institute of Technology, Zagreb, Croatia</em></p>
              <p>Web and Mobile computing degree preparing us to become general-purpose software engineers and excel in any field we are interested in the future.
              </p>
                <li>Peer mentor</li>
            </div>
            <div class="resume-item">
              <h4>Electrotechnician</h4>
              <h5>2015 - 2019</h5>
              <p><em>Srednja Škola Mate Blažina, Labin, Croatia</em></p>
              <p>My final thesis was solar-powered charging systems, covering collecting solar power, converting it to electrical current, safely storing electrical energy, and connecting basic consumer electronics.</p>
                <li>Faculty programming classes</li>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Junior backend developer</h4>
              <h5>July 2020 - Present</h5>
              <p><em><a href="https://lloyds-design.com/">Lloyds Design</a>, Labin, Croatia </em></p>
              <ul>
                <li>Building Content Management System (CMS) for a given application</li>
                <li>using the LAMP stack and Laravel (PHP) framework </li>
                <li>Designing relational SQL databases is a crucial component of valid CMS.</li>
                <li>We also design and provide RESTful APIs in collaboration with the front-end team.</li>
              </ul>
            </div>
            
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->
    
    <!-- ======= Hobby Section ======= -->
    <section id="hobby" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Hobby</h2>
          <p>Preview and progress of the current project. Setup is Raspberry pi 3B+ using Raspbian GNU/LINUX 10 (buster) which is powering server, buzzers, lamps, switches, and reacting to pretty much anything. I'm never bored since it's always making some kind of noises and outputting information on the monitor. It's a pretty active environment since I'm always testing something, but this is a "base" setup.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Monitor</li>
              <li data-filter=".filter-web">Setup</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" loading="lazy" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Setup 1</h4>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Setup 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg"  loading="lazy" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Monitor 1</h4>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="Monitor 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg"  loading="lazy" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Setup 2</h4>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="Setup 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" loading="lazy" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Monitor 2</h4>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Monitor 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" loading="lazy" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Setup 3</h4>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Setup 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Tomas Martinčić</h3>
     
      <div class="copyright">
        &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
