<?php
session_start();
///$id=intval($_GET['id']);
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

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.4.1.js"></script>
      <!-- <link rel="stylesheet" href="css/responsive.css"> --
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <script>
   $(document).ready(function() {
   var catCount = 9;
   $("#more").click(function() {
   catCount = catCount + 3;
   $("#flower").load("load_flower.php", {
     catNewCount: catCount
   });
 });
 });
    </script>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
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
                                        <p>Welcome to Get ur Flower service</p>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-md-7">
                                    <div class="header_right d-flex">
                                            <div class="short_contact_list">
                                                    <ul>
                                                        <li><a href="#"> <i class="fa fa-envelope"></i> danenerygy@gmail.com</a></li>
                                                        <li><a href="#"> <i class="fa fa-phone"></i> +251-911000000</a></li>
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
                                                    <li><a  href="index.html">Home</a></li>
                                                    <li><a  class="active" href="#">Flower <i class="ti-angle-down"></i></a>
                                                        <ul class="submenu">
                                                          <li><a href="Category.php">Cut Flower</a></li>
                                                          <li><a href="garden.php">Garden Flower</a></li>
                                                          <li><a href="occasional.php">Occasional Flower</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Business Lines<i class="ti-angle-down"></i></a>
                                                        <ul class="submenu">
                                                                <li><a href="farm.html">Flower Farm</a></li>
                                                                <li><a href="#">Flower Shop Center</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a  href="services.html">Services</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                        <div class="Appointment">
                                            <div class="book_btn d-none d-lg-block">
                                                <a  href="login.html">Sign In</a>
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
    <div class="bradcam_area bradcam_bg_1" style="background-image:url('img/banner/back1.png')";>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Different type of Flower</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- case_study_area  -->

    <div class="case_study_area case_page">

        <div class="container">
            <div class="row">
                    <div class="col-xl-12">
                        <div class="portfolio-menu text-center">
                          <?php
                          include 'connect.php';
                          $nr1_query ="SELECT * FROM `cut_flower` " ;
                        $res = mysqli_query($conn, $nr1_query);
                      //  while ($row = mysqli_fetch_assoc($res)){
                                        ?>
                            <button class="active" data-filter="*"> All <?php while ($rows = mysqli_fetch_assoc($res)){ ?>
                                <button data-filter=".cat<?php echo $rows['id'];?>"><?php echo $rows['flower_type'];?></button>   <?php
                                            }
                                    ?>
                            </button>
                            <button data-filter=".cat5">Best Seller</button>
                        </div>
                    </div>
                </div>

            <div class="row grid"  id="flower">
              <?php

              $nr1_query ="SELECT * FROM `flower_list` LIMIT 9 " ;
            $res = mysqli_query($conn, $nr1_query);
            while ($row = mysqli_fetch_assoc($res)){
                        ?>
              <div class="col-xl-4 grid-item cat<?php echo $row['cat_id'];?>">
                  <div class="single_case animated wobble duration-4000s">
                      <div class="case_thumb">
                        <a href="single-product.php?id=<?php echo $row['id'];?>&cat=flower_list">
                          <img src="img/product/<?php echo $row['photo'];?>" alt="" width="362" height="240">
                        </a>
                          </div>
                      <div class="case_heading">
                          <span><?php echo $row['price'];?></span>
                        <h3><a href="single-product.php?id=<?php echo $row['id'];?>&cat=flower_list"><?php echo $row['flower_name'];?></a></h3>
                      </div>
                      <p class="buttons text-center">
                        <a href="single-product.php?id=<?php echo $row['id'];?>&cat=flower_list" class ="genric-btn info-border radius">View Detail </a>
                      </p>
                  </div>
              </div>
              <?php
         }
         ?>
            </div>
            <div class="row">
                <div class="col-xl-12" >
                    <div   class="more_close_btn text-center" >
                        <button id="more"  class="boxed-btn3-line">More Cases</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /case_study_area  -->


                <!-- Information_area  -->
                        <div class="Information_area overlay" style="background-image:url('img/banner/bradcam1.png')";>
                            <div class="container">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-xl-8">
                                        <div class="info_text text-center"data-aos="fade-down-right" data-aos-duration="2000">
                                            <h3>For Any Information Call Us</h3>
                                            <p>if you have any question or message we are avalible</p>
                                            <a class="boxed-btn3"data-aos="fade-down-right" data-aos-duration="2000" href="#">+251166763112</a>
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
                                <a href="#">danenerygy@gmail.com</a> <br>
                                +251 911 000 000 <br>
                              CMC road, Addis Ababa, Ethiopia
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
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
    <script src="js/aos.js"></script>
    <script> AOS.init();</script>
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
