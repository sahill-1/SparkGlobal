<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Homepage</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <?php include 'modal.php'; ?>
      <style>
         .goog-logo-link {
            display: none !important;
         }
         .goog-te-gadget {
            color: transparent !important;
         }
         .banner{
            min-height: 650px;
            margin-bottom: -120px;
         }
         @media(max-width: 768px){
            .banner{
               margin-bottom: -250px;
            }
            .display-none{
               display: none;
            }
         }
         @media(max-width: 462px){
            .banner{
               margin-bottom: -170px;
            }
         }
         .button-hover:hover{
            background-color: darkgrey;
            color: black;
         }
         #design .carousel-control-prev:hover,
#design .carousel-control-next:hover,
#testimon .carousel-control-prev:hover,
#testimon .carousel-control-next:hover,
#design .carousel-control-prev:focus,
#design .carousel-control-next:focus {
     background: darkgray;
     color: #000;
}
      </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-10 offset-md-1">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">About Us</a>
                              </li>
                              <!-- <li class="nav-item">
                                 <a class="nav-link" href="service.html">Services</a>
                              </li> -->
                              <li class="nav-item">
                                 <a class="nav-link" href="gallery.php">Gallery</a>
                              </li>
                              <!-- <li class="nav-item">
                                 <a class="nav-link" href="testimonial.html"> Testimonial </a>
                              </li> -->
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Contact Us</a>
                              </li>
                              <li class="nav-item display-none">
                                 <a id="google_translate_element" class="nav-link" ></a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container" >
                     <div class="carousel-caption relative">
                        <div class="row">
                           <div class="col-md-7 offset-md-5">
                              <div class="text-bg">
                                 <h1> Design <br>Of Furniture 1</h1>
                                 <span>There are many variations of passages of Lorem Ipsum available</span>
                                 <!-- <a class="read_more" href="Javascript:void(0)">Read More</a> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- about -->
      <div id="about" class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>About <span class="green">Us</span></h2>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humourThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                     <!-- <a class="read_more" href="Javascript:void(0)"> Read More</a> -->
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="./images/img/home (1).jpeg" alt="#" style="height: 500px;"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!--  service -->
      <div id="service" class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our <span class="green">Services</span></h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="row">
                     <div class="col-md-4 col-sm-6">
                        <div class="service_box">
                           <i><img src="images/service1.png" alt="#"/></i>
                           <h3>Retina Ready</h3>
                           <p>many variations of passages <br>of Lorem Ipsum available,</p>
                        </div>
                     </div>
                     <div class="col-md-4 offset-md-1 col-sm-6">
                        <div class="service_box">
                           <i><img src="images/service2.png" alt="#"/></i>
                           <h3>Creative Elements</h3>
                           <p>many variations of passages <br>of Lorem Ipsum available,</p>
                        </div>
                     </div>
                     <div class="col-md-4 offset-md-3 col-sm-6 mar_top">
                        <div class="service_box">
                           <i><img src="images/service3.png" alt="#"/></i>
                           <h3>Easy-to-Use</h3>
                           <p>many variations of passages <br>of Lorem Ipsum available,</p>
                        </div>
                     </div>
                     <div class="col-md-4 offset-md-1 col-sm-6 mar_top">
                        <div class="service_box">
                           <i><img src="images/service4.png" alt="#"/></i>
                           <h3>Easy Import</h3>
                           <p>many variations of passages <br>of Lorem Ipsum available,</p>
                        </div>
                     </div>
                     <div class="col-md-12 ">
                        <a class="read_more button-hover" href="about.html"> Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end service -->
      <!-- gallery -->
      <div id="gallery"  class="gallery">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our <span class="green">Products</span></h2>
                     <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffer</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <!-- <div class="col-md-4 col-sm-6">
                  <div class="gallery_text">
                     <div class="galleryh3">
                        <h3>Interior Design</h3>
                        <p>of passages of Lorem <br>
                           Ipsum available <br>
                           , but the majority <br>
                           have suffer
                        </p>
                     </div>
                  </div>
               </div> -->
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/img/home (2).jpeg" alt="#"/></figure>
                  </div>
                  <!-- <div class="product-button" style="border: 1px solid red; width: 120px; height: 40px; margin: auto">
                  </div> -->
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/img/home (3).jpeg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/img/home (4).jpeg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/img/index2 (1).jpeg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/img/index2 (2).jpeg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/img/index2 (3).jpeg" alt="#"/></figure>
                  </div>
               </div>
            
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/img/index3 (1).jpeg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/img/index3 (2).jpeg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/img/index3 (3).jpeg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end gallery -->
      <!-- design -->
      <div class="design">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div id="design" class="carousel slide banner_design" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#design" data-slide-to="0" class="active"></li>
                        <li data-target="#design" data-slide-to="1"></li>
                        <li data-target="#design" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="text_de">
                                          <div class="titlepage">
                                             <h2> Our New <span class="green">Design</span></h2>
                                          </div>
                                          <p>There are many variations of passages of Lorem Ipsum available, but theThere are many variations of passages of Lorem Ipsum available, but the</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="text_de">
                                          <div class="titlepage">
                                             <h2>Our Latest <span class="green">Products</span></h2>
                                          </div>
                                          <p>There are many variations of passages of Lorem Ipsum available, but theThere are many variations of passages of Lorem Ipsum available, but the</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="text_de">
                                          <div class="titlepage">
                                             <h2>New Ideas <span class="green">Design</span></h2>
                                          </div>
                                          <p>There are many variations of passages of Lorem Ipsum available, but theThere are many variations of passages of Lorem Ipsum available, but the</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                         
                     </div>
                     <a class="carousel-control-prev" href="#design" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#design" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
               <div class="col-md-7 pad_roght0">
                  <div class="design_img">
                     <figure><img src="images/newdesign.jpeg" alt="#" style="height: 481px; width: 997px;"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end design -->
      <!-- latest news -->
      <div  class="latest_news">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our <span class="green">Latest Products</span></h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 offset-md-2">
                  <div id="new" class="news_box">
                     <div class="news_img">
                        <figure><img src="images/17.png" alt="#"/></figure>
                     </div>
                     <div class="news_room">
                        <!-- <span>Post By :limelight</span>
                        <ul>
                           <li><a href="Javascript:void(0)">Like <i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)">Comment <i class="fa fa-comments-o" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                        </ul> -->
                        <h3>Interior Design</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content  </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 ">
                  <div id="new" class="news_box">
                     <div class="news_img mr_le">
                        <figure><img src="images/29.jpg" alt="#"/></figure>
                     </div>
                     <div class="news_room">
                        <!-- <span>Post By :limelight</span>
                        <ul>
                           <li><a href="Javascript:void(0)">Like <i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)">Comment <i class="fa fa-comments-o" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                        </ul> -->
                        <h3>Artictecture</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content  </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more button-hover" href="Javascript:void(0)"> Read More</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end latest news -->
      <!-- testimonial -->
      <div id="testimonial" class="Testimonial" style="margin-bottom: 10px;">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-8 pad_left0">
                  <div id="testimon" class="carousel slide banner_testimonial" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#testimon" data-slide-to="0" class="active"></li>
                        <li data-target="#testimon" data-slide-to="1"></li>
                        <li data-target="#testimon" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="text_humai">
                                          <i><img src="images/tett1.png" alt="#"/></i>
                                          <span>HumouThere</span>
                                          <p>T suffered alteration in some form, by injected humouThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humou</p>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="text_humai">
                                          <i><img src="images/tett2.png" alt="#"/></i>
                                          <span>HumouThere</span>
                                          <p>T suffered alteration in some form, by injected humouThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humou</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="text_humai">
                                          <i><img src="images/tett1.png" alt="#"/></i>
                                          <span>HumouThere</span>
                                          <p>T suffered alteration in some form, by injected humouThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humou</p>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="text_humai">
                                          <i><img src="images/tett2.png" alt="#"/></i>
                                          <span>HumouThere</span>
                                          <p>T suffered alteration in some form, by injected humouThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humou</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="text_humai">
                                          <i><img src="images/tett1.png" alt="#"/></i>
                                          <span>HumouThere</span>
                                          <p>T suffered alteration in some form, by injected humouThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humou</p>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="text_humai">
                                          <i><img src="images/tett2.png" alt="#"/></i>
                                          <span>HumouThere</span>
                                          <p>T suffered alteration in some form, by injected humouThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humou</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#testimon" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#testimon" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
               <div class="col-md-4 ">
                  <div class="titlepage">
                     <h2>Testimonial</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end design -->
      
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-md-3 col-sm-6">
                     <h3>Spark Global </h3>
                     <p  class="variat pad_roght2">There are many variat
                        ions of passages of L
                        orem Ipsum available
                        , but the majority h
                        ave suffered altera
                        tion in some form, by 
                     </p>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <h3>INFORMATION</h3>
                     <ul class="link_menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.html"> About</a></li>
                        <!-- <li><a href="service.html">Services</a></li> -->
                        <li><a href="gallery.php">Gallery</a></li>
                        <!-- <li><a href="testimonial.html">Testimonial</a></li> -->
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                     </ul>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <h3>OUR Design</h3>
                     <p  class="variat">There are many variat
                        ions of passages of L
                        orem Ipsum available
                        , but the majority h
                        ave suffered altera
                        tion in some form, by 
                     </p>
                  </div>
                  <div style="width: 250px; height: 60px;">
                     <img src="./images/bwt-white.png" alt="">
                  </div>
                  <!-- <div class="col-md-6 offset-md-6">
                     <form id="hkh" class="bottom_form">
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                  </div> -->
               </div>
            </div>
            <!-- <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        <p>© 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div> -->
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>



      <!-- Language Converter -->
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
				pageLanguage: 'en'
			}, 'google_translate_element');
		}
	</script>
	<script type="text/javascript">
		(function () {
			var gtConstEvalStartTime = new Date();
			/*
	  	
			 Copyright The Closure Library Authors.
			 SPDX-License-Identifier: Apache-2.0
			*/
			var h = this || self,
				l = /^[\w+/_-]+[=]{0,2}$/,
				m = null;

			function n(a) {
				return (a = a.querySelector && a.querySelector("script[nonce]")) && (a = a.nonce || a.getAttribute("nonce")) && l.test(a) ? a : ""
			}

			function p(a, b) {
				function c() { }
				c.prototype = b.prototype;
				a.i = b.prototype;
				a.prototype = new c;
				a.prototype.constructor = a;
				a.h = function (g, f, k) {
					for (var e = Array(arguments.length - 2), d = 2; d < arguments.length; d++) e[d - 2] = arguments[d];
					return b.prototype[f].apply(g, e)
				}
			}

			function q(a) {
				return a
			};

			function r(a) {
				if (Error.captureStackTrace) Error.captureStackTrace(this, r);
				else {
					var b = Error().stack;
					b && (this.stack = b)
				}
				a && (this.message = String(a))
			}
			p(r, Error);
			r.prototype.name = "CustomError";

			function u(a, b) {
				a = a.split("%s");
				for (var c = "", g = a.length - 1, f = 0; f < g; f++) c += a[f] + (f < b.length ? b[f] : "%s");
				r.call(this, c + a[g])
			}
			p(u, r);
      
			u.prototype.name = "AssertionError";

			function v(a, b) {
				throw new u("Failure" + (a ? ": " + a : ""), Array.prototype.slice.call(arguments, 1));
			};
			var w;

			function x(a, b) {
				this.g = b === y ? a : ""
			}
			x.prototype.toString = function () {
				return this.g + ""
			};
			var y = {};

			function z(a) {
				var b = document.getElementsByTagName("head")[0];
				b || (b = document.body.parentNode.appendChild(document.createElement("head")));
				b.appendChild(a)
			}

			function _loadJs(a) {
				var b = document;
				var c = "SCRIPT";
				"application/xhtml+xml" === b.contentType && (c = c.toLowerCase());
				c = b.createElement(c);
				c.type = "text/javascript";
				c.charset = "UTF-8";
				if (void 0 === w) {
					b = null;
					var g = h.trustedTypes;
					if (g && g.createPolicy) {
						try {
							b = g.createPolicy("goog#html", {
								createHTML: q,
								createScript: q,
								createScriptURL: q
							})
						} catch (t) {
							h.console && h.console.error(t.message)
						}
						w = b
					} else w = b
				}
				a = (b = w) ? b.createScriptURL(a) : a;
				a = new x(a, y);
				a: {
					try {
						var f = c && c.ownerDocument,
							k = f && (f.defaultView || f.parentWindow);
						k = k || h;
						if (k.Element && k.Location) {
							var e = k;
							break a
						}
					} catch (t) { }
					e = null
				}
				if (e && "undefined" != typeof e.HTMLScriptElement && (!c || !(c instanceof e.HTMLScriptElement) && (c instanceof e.Location || c instanceof e.Element))) {
					e = typeof c;
					if ("object" == e && null != c || "function" == e) try {
						var d = c.constructor.displayName || c.constructor.name || Object.prototype.toString.call(c)
					} catch (t) {
						d = "<object could not be stringified>"
					} else d = void 0 === c ? "undefined" : null === c ? "null" : typeof c;
					v("Argument is not a %s (or a non-Element, non-Location mock); got: %s",
						"HTMLScriptElement", d)
				}
				a instanceof x && a.constructor === x ? d = a.g : (d = typeof a, v("expected object of type TrustedResourceUrl, got '" + a + "' of type " + ("object" != d ? d : a ? Array.isArray(a) ? "array" : d : "null")), d = "type_error:TrustedResourceUrl");
				c.src = d;
				(d = c.ownerDocument && c.ownerDocument.defaultView) && d != h ? d = n(d.document) : (null === m && (m = n(h.document)), d = m);
				d && c.setAttribute("nonce", d);
				z(c)
			}

			function _loadCss(a) {
				var b = document.createElement("link");
				b.type = "text/css";
				b.rel = "stylesheet";
				b.charset = "UTF-8";
				b.href = a;
				z(b)
			}

			function _isNS(a) {
				a = a.split(".");
				for (var b = window, c = 0; c < a.length; ++c)
					if (!(b = b[a[c]])) return !1;
				return !0
			}

			function _setupNS(a) {
				a = a.split(".");
				for (var b = window, c = 0; c < a.length; ++c) b.hasOwnProperty ? b.hasOwnProperty(a[c]) ? b = b[a[c]] : b = b[a[c]] = {} : b = b[a[c]] || (b[a[c]] = {});
				return b
			}
			window.addEventListener && "undefined" == typeof document.readyState && window.addEventListener("DOMContentLoaded", function () {
				document.readyState = "complete"
			}, !1);
			if (_isNS('google.translate.Element')) {
				return
			} (function () {
				var c = _setupNS('google.translate._const');
				c._cest = gtConstEvalStartTime;
				gtConstEvalStartTime = undefined;
				c._cl = 'en';
				c._cuc = 'googleTranslateElementInit';
				c._cac = '';
				c._cam = '';
				c._ctkk = '449532.3786053938';
				var h = 'translate.googleapis.com';
				var s = (true ? 'https' : window.location.protocol == 'https:' ? 'https' : 'http') + '://';
				var b = s + h;
				c._pah = h;
				c._pas = s;
				c._pbi = b + '/translate_static/img/te_bk.gif';
				c._pci = b + '/translate_static/img/te_ctrl3.gif';
				c._pli = b + '/translate_static/img/loading.gif';
				c._plla = h + '/translate_a/l';
				c._pmi = b + '/translate_static/img/mini_google.png';
				c._ps = b + '/translate_static/css/translateelement.css';
				c._puh = 'translate.google.com';
				_loadCss(c._ps);
				_loadJs(b + '/translate_static/js/element/main.js');
			})();
		})();
	</script>
	<!-- End Language Converter -->
	<!-- Including Jquery -->
	<script src="assets/js/vendor/jquery-min.js"></script>
	<script src="assets/js/vendor/js.cookie.js"></script>
	<!--Including Javascript-->
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script>
	<!--Newsletter Popup Cookies-->
	<script>
		function newsletter_popup() {
			var cookieSignup = "cookieSignup", date = new Date();
			if ($.cookie(cookieSignup) != 'true' && window.location.href.indexOf("challenge#newsletter-modal") <= -1) {
				setTimeout(function () {
					$.magnificPopup.open({
						items: {
							src: '#newsletter-modal'
						}
						, type: 'inline', removalDelay: 300, mainClass: 'mfp-zoom-in'
					}
					);
				}
					, 5000);
			}
			$.magnificPopup.instance.close = function () {
				if ($("#dontshow").prop("checked") == true) {
					$.cookie(cookieSignup, 'true', {
						expires: 1, path: '/'
					}
					);
				}
				$.magnificPopup.proto.close.call(this);
			}
		}
		newsletter_popup();
    <script/>
   </body>
</html>