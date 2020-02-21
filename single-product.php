<?php
session_start();
$id=intval($_GET['id']);
$cat=$_GET['cat'];

?>
  <!doctype html>
  <html class="no-js" lang="zxx">

  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Category</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- <link rel="manifest" href="site.webmanifest"> -->
      <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
      <!-- Place favicon.ico in the root directory -->
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- animate CSS -->
      <link rel="stylesheet" href="css/animate.css">
      <!-- owl carousel CSS -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <!-- flaticon CSS -->
      <link rel="stylesheet" href="css/flaticon.css">
      <link rel="stylesheet" href="css/themify-icons.css">
      <!-- font awesome CSS -->
      <link rel="stylesheet" href="css/magnific-popup.css">
      <!-- swiper CSS -->
      <link rel="stylesheet" href="css/slick.css">
      <!-- style CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- style CSS -->
      <link rel="stylesheet" href="css/styl.css">
      </head>


  <body>
      <!--[if lte IE 9]>
              <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
          <![endif]-->

      <!-- header-start -->
      <header>
          <div class="header-area ">
              <div class="header-top_area d-none d-lg-block">
                  <div class="container">
                      <div class="row">
                          <div class="col-xl-5 col-md-5 ">
                              <div class="header_left">
                                  <p>Welcome to flower service</p>
                              </div>
                          </div>
                          <div class="col-xl-7 col-md-7">
                              <div class="header_right d-flex">
                                  <div class="short_contact_list">
                                      <ul>
                                          <li><a href="#"> <i class="fa fa-envelope"></i> info@docmed.com</a></li>
                                          <li><a href="#"> <i class="fa fa-phone"></i> 1601-609 6780</a></li>
                                      </ul>
                                  </div>
                                  <div class="social_media_links">
                                      <a href="#">
                                          <i class="fa fa-linkedin"></i>
                                      </a>
                                      <a href="#">
                                          <i class="fa fa-facebook"></i>
                                      </a>
                                      <a href="#">
                                          <i class="fa fa-google-plus"></i>
                                      </a>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
              <div id="sticky-header" class="main-header-area">
                  <div class="container">
                      <div class="header_bottom_border">
                          <div class="row align-items-center">
                              <div class="col-xl-3 col-lg-2">
                                  <div class="logo">
                                      <a href="index.html">
                                          <img src="img/log1.png" alt="">
                                      </a>
                                  </div>
                              </div>
                              <div class="col-xl-6 col-lg-7">
                                  <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.html">Home</a></li>
                                            <li><a href="#">Flower <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="Category.php">Cut Flower</a></li>
                                                        <li><a href="garden.php">Garden Flower</a></li>
                                                        <li><a href="occasional.php">Occasional Flower</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Business Lines<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="farm.html">Flower Farm</a></li>
                                                        <li><a href="about.html">Flower Shop Center</a></li>
                                                </ul>
                                            </li>
                                            <li><a  href="services.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                  <div class="Appointment">
                                      <div class="book_btn d-none d-lg-block">
                                          <a href="login.html">Sign In</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="mobile_menu d-block d-lg-none"></div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </header>
      <!-- header-end -->

      <!-- bradcam_area  -->

      <section class="breadcrumb_part single_product_breadcrumb" style=" background-image:url('img/banner/back1.png')";>
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="breadcrumb_iner">
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--/ bradcam_area  -->


        <!--================Single Product Area =================-->
        <div class="product_image_area">
          <div class="container">
            <div class="row justify-content-center">
              <?php
             include 'connect.php';

              $nr1_query ="SELECT * FROM $cat WHERE `id`=$id " ;
            $res = mysqli_query($conn, $nr1_query);
            while ($row = mysqli_fetch_assoc($res)){
                        ?>
              <div class="col-lg-12">
                <div class="slider_active owl-carousel" style=" margin-top: 100px; ">
                  <div class="single_case">
                      <img src="img/flower/<?php echo $row['photo'];?>" alt=""  width="460" height="548">
                  </div>

                </div>
              </div>
              <div class="col-lg-8">
                <div class="single_product_text text-center">
                  <h3><?php echo $row['flower_name'];?>r</h3>
                  <p >
                    <?php echo $row['description'];?>
                  </p>
                  <div class="card_area">
                      <div class="product_count_area">
                          <p>Quantity</p>
                          <div class="product_count d-inline-block">
                              <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                              <input class="product_count_item input-number" type="text" value="1" min="0" max="10">
                              <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                          </div>
                          <p>$5</p>
                      </div>
                    <div class="add_to_cart">
                        <a href="cart.html" class="boxed-btn3-line">add to cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php
         }
         ?>
            </div>
          </div>
        </div>
        <!--================End Single Product Area =================-->
      <!-- Information_area  -->
      <div class="Information_area overlay" style="background-image:url('img/banner/bradcam1.png')";>
          <div class="container">
              <div class="row justify-content-center align-items-center">
                  <div class="col-xl-8">
                      <div class="info_text text-center">
                          <h3>For Any Information Call Us</h3>
                          <p>Esteem spirit temper too say adieus who direct esteem.</p>
                          <a class="boxed-btn3" href="#">+10 673 763 6786</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- /Information_area  end -->

      <!-- footer start -->
      <footer class="footer">
          <div class="footer_top">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-3 col-md-6 col-lg-3">
                          <div class="footer_widget">
                              <div class="footer_logo">
                                  <a href="#">
                                      <img src="img/log1.png" alt="">
                                  </a>
                              </div>
                              <p>
                                  <a href="#">conbusi@support.com</a> <br>
                                  +10 873 672 6782 <br>
                                  600/D, Green road, NewYork
                              </p>
                              <div class="socail_links">
                                  <ul>
                                      <li>
                                          <a href="#">
                                              <i class="ti-facebook"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="#">
                                              <i class="ti-twitter-alt"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="#">
                                              <i class="fa fa-instagram"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>

                          </div>
                      </div>
                      <div class="col-xl-2 col-md-6 col-lg-3">
                          <div class="footer_widget">
                              <h3 class="footer_title">
                                  Services
                              </h3>
                              <ul>
                                  <li><a href="#">Marketing & SEO</a></li>
                                  <li><a href="#"> Startup</a></li>
                                  <li><a href="#">Finance solution</a></li>
                                  <li><a href="#">Food</a></li>
                                  <li><a href="#">Travel</a></li>
                              </ul>

                          </div>
                      </div>
                      <div class="col-xl-2 col-md-6 col-lg-2">
                          <div class="footer_widget">
                              <h3 class="footer_title">
                                  Useful Links
                              </h3>
                              <ul>
                                  <li><a href="#">About</a></li>
                                  <li><a href="#">Blog</a></li>
                                  <li><a href="#"> Contact</a></li>
                                  <li><a href="#">Appointment</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-xl-4 col-md-6 col-lg-4">
                          <div class="footer_widget">
                              <h3 class="footer_title">
                                  Subscribe
                              </h3>
                              <form action="#" class="newsletter_form">
                                  <input type="text" placeholder="Enter your mail">
                                  <button type="submit">Subscribe</button>
                              </form>
                              <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                                  luckily.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="copy-right_text">
              <div class="container">
                  <div class="footer_border"></div>
                  <div class="row">
                      <div class="col-xl-12">
                          <p class="copy_right text-center">
                              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </footer>
      <!--/ footer end  -->

      <!-- link that opens popup -->


      <!-- JS here -->
      <script src="js/vendor/modernizr-3.5.0.min.js"></script>
      <script src="js/vendor/jquery-1.12.4.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/isotope.pkgd.min.js"></script>
      <script src="js/ajax-form.js"></script>
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <script src="js/imagesloaded.pkgd.min.js"></script>
      <script src="js/scrollIt.js"></script>
      <script src="js/jquery.scrollUp.min.js"></script>
      <script src="js/wow.min.js"></script>
      <script src="js/nice-select.min.js"></script>
      <script src="js/jquery.slicknav.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/plugins.js"></script>
      <script src="js/gijgo.min.js"></script>
      <script src="js/slick.min.js"></script>
      <!--contact js-->
      <script src="js/contact.js"></script>
      <script src="js/jquery.ajaxchimp.min.js"></script>
      <script src="js/jquery.form.js"></script>
      <script src="js/jquery.validate.min.js"></script>
      <script src="js/mail-script.js"></script>

      <script src="js/main.js"></script>
  </body>

  </html>
