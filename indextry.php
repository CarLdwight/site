<?php 
include 'dbcon.php';
session_start();
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gp Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="https://unpkg.com/esri-leaflet@2.5.0/dist/esri-leaflet.js"></script>
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.css">
  <script src="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

 <style>
    #map { height: 300px; width:500px; }
      body{
        background-color: white;
      }
      .info{
        width:100%;
      }
  </style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="height: 60px;">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <img src="assets/img/BSU.png" height="40" style="margin-left: -5%;">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">MPA<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>Site</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#site1">Add New Site</a></li>
              <li><a href="#site2">Edit Site Information</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Infographics</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="search-container">
        <form action="/action_page.php">
          <input type="text" class="form-control" placeholder="Search.." name="search">
        </form>
      </div>

      <a href="login2.php" class="get-started-btn scrollto" title="view as admin"><i class="fa-solid fa-user-tie"></i></a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Marine Protected Areas<span>.</span></h1>
          <h2>In Barangay Papaya, Nasugbu, Batangas</h2>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Site Section ======= -->
    <section id="site1" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Barangay Papaya</h2>
          <p>Add New Site</p>
        </div>

        <div class="row">
          <div class="image col-lg-6" data-aos="fade-right">

                 <div id="map" class="img-fluid" ></div>
  
          </div>
        <div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-left" data-aos-delay="100">
            <div style="text-align: right;">
                <button class="btn"  data-toggle="modal" data-target="#myModal1" title="Edit Info" style=" background-color: #4CAF50; border-color: #4CAF50; color: white; border-radius: 5px;"> Add New Site </button>
            </div>
          
            <form action="location_query.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="info">
                 <label class="labels" style=" font-size: 11px; margin-left:50px;">Latitude</label>
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-map-marked-alt fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="lat" value="14.07325895738352" id="latitude" class="form-control" placeholder="latitude" readonly/>
                    </div>
                  </div>

                  <label class="labels" style=" font-size: 11px; margin-left:50px;">Longitude</label>
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-map-marked-alt fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="long" value="120.6353384256363" id="longitude" class="form-control" placeholder="longitude" readonly/>
                    </div>
                  </div>
        
                  <div class="form-group">  
                    <input id="address" type="hidden" name="address" readonly="" required="" />
                  </div> 
              </div>
            </div>
          </div>
        


              <div class="row gx-3 mb-3">
                  <div class="col-md-12">
                      <label class="small mb-1" for="coordinates">Coordinates</label>
                      <input class="form-control" type="text" value=""  name="latitude" name="lat" required>
                  </div>
                  <div class="col-md-10">
                      <label class="small mb-1" for="locationname">Location Name</label>
                      <input class="form-control"  type="text" value="" name="name" required>
                  </div>
                  <div class="col-md-2">
                      <label class="small mb-1" for="coordinates">Year</label>
                      <input class="form-control" type="text" value=""  name="email" required>
                  </div>
              </div>

              <div class="row gx-3 mb-3">
                <hr>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section id="site2" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Barangay Papaya</h2>
          <p>Edit Site Information</p>
        </div>

        <div class="row">
          <div class="image col-lg-6" data-aos="fade-right">
            <iframe style="border:0; width: 100%; height: 300px;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15473.090002418241!2d120.60271736132553!3d14.17881129115335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd8de4c6589c69%3A0x7cb8e9afc34ed85a!2sPapaya%2C%20Nasugbu%2C%20Batangas!5e0!3m2!1sen!2sph!4v1680135279868!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-left" data-aos-delay="100">
            <div style="text-align: right;">
                <button class="btn"  data-toggle="modal" data-target="#myModal2" title="Edit Info" style=" background-color: #4CAF50; border-color: #4CAF50; color: white; border-radius: 5px;"> Edit Site Information </button>
            </div>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group mt-3">
                  <label>Enter Coordinates</label>
                  <input type="text" name="coordinates" class="form-control" id="coordinates" placeholder="Coordinates" required>
                </div>
                <div class="form-group mt-3">
                  <label>Enter Location Name</label>
                  <input type="text" name="location" class="form-control" id="location" placeholder="Location">
                </div>
              </div>
            </form>
    
          </div>
        </div>

        <div class="row" style="margin-top: 20px;">
        <div style="margin-block: 5px;">
          <label for="cars">YEAR:</label>
            <select name="year" id="year">
              <option value="">2023</option>
              <option value="">2022</option>
              <option value="">2021</option>
              <option value="">2020</option>
              <option value="">2019</option>
              <option value="">2018</option>
              <option value="">2017</option>
            </select>
        </div>
          <div class="image col-lg-6" data-aos="fade-right">
            <table class="table table-bordered table-hover" style="background-color: #fff !important; border: 2px solid black !important;">
              <thead style="background-color: #007f80 !important; color: #fff;">
                <tr>
                  <th>Substrate</th>
                  <th>Percenr Cover</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Coral</th>
                  <td>50%</td>
                </tr>
                <tr>
                  <th>Moroalgae</th>
                  <td>2%</td>
                </tr>
                <tr>
                  <th>Rock</th>
                  <td>27%</td>
                </tr>
                <tr>
                  <th>Sand/Rubble</th>
                  <td>20%</td>
                </tr>

              </tbody>
            </table>
          </div>
          <div class="image col-lg-6" data-aos="fade-left">
            <table class="table table-bordered table-hover" style="background-color: #fff !important; border: 2px solid black !important;">
              <thead style="background-color: #007f80 !important; color: #fff;">
                <tr>
                  <th>Substrate</th>
                  <th>Percenr Cover</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Number of coral genere</th>
                  <td>18</td>
                </tr>
                <tr>
                  <th>Dominant coral genera</th>
                  <td>Porites sp. (4.57%)</td>
                </tr>
                <tr>
                  <th></th>
                  <td>Millepora (4.57%)</td>
                </tr>
                <tr>
                  <th></th>
                  <td>Galaxea (4.57%)</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>

      </div>
    </section>
    <!-- End Site Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Infographics</h2>
          <p>Check our Infographics</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section --> 

    <div id="myModal1" class="modal" class="Modal is-hidden is-visuallyHidden">
      <form id="delete" action="query.php" method="post">
          <div class="row" style="justify-content: center; margin-top: 2%;">
              <div class="col-xl-8">
                  <div class="card mb-4">
                  <div class="card-header"><h5> Add New Site </h5><div type="button" class="close" data-dismiss="modal" aria-label="Close" style="float: right; margin-top: -43px; font-size:20px;">&times;</div></div>
                      <div class="card-body">
                          <div class="row gx-3 mb-3">
                              <div class="col-md-5">
                                  <label class="small mb-1" for="coordinates">Coordinates</label>
                                  <input class="form-control" type="text" value=""  name="latitude" name="lat" required>
                              </div>
                              <div class="col-md-5">
                                  <label class="small mb-1" for="locationname">Location Name</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-2">
                                  <label class="small mb-1" for="coordinates">Year</label>
                                  <input class="form-control" type="text" value=""  name="email" required>
                              </div>
                          </div>
                          <hr>
                          <div class="row gx-3 mb-3">
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>

                          </div>
                          <div class="col-md-12" style="text-align: center; margin-top: 15px;">
                                    <button type="submit" class="btn btn-primary" name="update" style="background-color: #4CAF50; border-color: #4CAF50; width: 200px;">Save</button>
                          </div>
                      </div>                     
                  </div>                        
              </div>
          </div>
      </form>
    </div>

     <div id="myModal2" class="modal" class="Modal is-hidden is-visuallyHidden">
      <form id="delete" action="query.php" method="post">
          <div class="row" style="justify-content: center; margin-top: 2%;">
              <div class="col-xl-8">
                  <div class="card mb-4">
                  <div class="card-header"><h5> Edit Site Information </h5><div type="button" class="close" data-dismiss="modal" aria-label="Close" style="float: right; margin-top: -43px; font-size:20px;">&times;</div></div>
                      <div class="card-body">
                          <div class="row gx-3 mb-3">
                              <div class="col-md-5">
                                  <label class="small mb-1" for="coordinates">Coordinates</label>
                                  <input class="form-control" type="text" value=""  name="latitude" name="lat" required>
                              </div>
                              <div class="col-md-5">
                                  <label class="small mb-1" for="locationname">Location Name</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-2">
                                  <label class="small mb-1" for="coordinates">Year</label>
                                  <input class="form-control" type="text" value=""  name="email" required>
                              </div>
                          </div>
                          <hr>
                          <div class="row gx-3 mb-3">
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>
                              <div class="col-md-8">
                                  <label class="small mb-1" for="coordinates">Substrate</label>
                                  <input class="form-control" type="text" value="" name="email" required>
                              </div>
                              <div class="col-md-4">
                                  <label class="small mb-1" for="locationname">Percent Cover</label>
                                  <input class="form-control"  type="text" value="" name="name" required>
                              </div>

                          </div>
                          <div class="col-md-12" style="text-align: center; margin-top: 15px;">
                                    <button type="submit" class="btn btn-primary" name="update" style="background-color: #4CAF50; border-color: #4CAF50; width: 200px;">Save</button>
                          </div>
                      </div>                     
                  </div>                        
              </div>
          </div>
      </form>
    </div>

  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script>
        var rememberLat = document.getElementById('latitude').value;
var rememberLong = document.getElementById('longitude').value;
var add =document.getElementById('address').value;

if( !rememberLat || !rememberLong ) {
 rememberLat = 14.07325895738352;
 rememberLong = 120.6353384256363;
}

var map = L.map('map').setView([14.07325895738352,120.6353384256363],13);
L.tileLayer( 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: '&copy; <a  https://www.google.com/maps/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

 // Google Map Layer
    const googleUrl='http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}';
    const googleMap= '&copy; <a https://www.google.com/maps/copyright">OpenStreetMap</a> contributors\'';
    googleStreets = L.tileLayer(googleUrl,{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3'],
       attribution: '&copy; <a href="http://www.google.com/maps/copyright">GoogleMap</a>'
     });
     googleStreets.addTo(map);

     
     // Satelite Layer
    googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
       maxZoom: 20,
       subdomains:['mt0','mt1','mt2','mt3'],
       attribution: '&copy; <a href="http://www.google.com/maps/copyright">GoogleMap</a>'
     });
    googleSat.addTo(map);


    const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';

    const tileLayer = L.tileLayer(tileUrl,{
     maxZoom: 20 ,
     attribution:'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors\''
    });
    tileLayer.addTo(map);


    /*===================================================
                          LAYER CONTROL               
    ===================================================*/

    var baseLayers = {
      "OpenStreetMap": tileLayer ,
      "Satellite":googleSat, 
       "Google Map":googleStreets , 
      
    };

    L.control.layers(baseLayers).addTo(map);



  var searchControl = L.esri.Geocoding.geosearch({
    position: 'topright',
    placeholder: 'Enter an address or place e.g. 1 York St',
    useMapBounds: false,
    providers: [L.esri.Geocoding.arcgisOnlineProvider({
      
      nearby: {
        lat: 14.07325895738352,
        lng: 120.6353384256363
      }
    })]
  }).addTo(map);

  var results = L.layerGroup().addTo(map);

  searchControl.on('results', function (data) {
    results.clearLayers();
    for (var i = data.results.length - 1; i >= 0; i--) {
      results.addLayer(L.marker(data.results[i].latlng));
    }
  });


var gcs = L.esri.Geocoding.geocodeService();
map.on('click', (e)=>{
gcs.reverse().latlng(e.latlng).run((err, res)=>{
if(err) return;
//alert(res.address.Match_addr);
document.getElementById('address').value = res.address.Match_addr;
//L.marker(res.latlng).bindPopup(res.address.Match_addr).openPopup();
});
});

var myIcon = L.icon({
iconUrl: 'https://clipground.com/images/clipart-map-pin-2.png',
iconSize: [20, 29],

});


var marker = L.marker([rememberLat, rememberLong],{
draggable: true,
icon: myIcon
}).addTo(map);

marker.on('dragend', function (e) {
  updateLatLng(marker.getLatLng().lat, marker.getLatLng().lng);
});

map.on('click', function (e) {
marker.setLatLng(e.latlng);
  updateLatLng(marker.getLatLng().lat, marker.getLatLng().lng);
});

function updateLatLng(lat,lng,reverse) {
if(reverse) {
  marker.setLatLng([lat,lng]);
  map.panTo([lat,lng]);
} else {
  document.getElementById('latitude').value = marker.getLatLng().lat;
  document.getElementById('longitude').value = marker.getLatLng().lng;
map.panTo([lat,lng]);
}
}
      </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>