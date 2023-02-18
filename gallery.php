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
      <title>Gallery</title>
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
      .in_page .header {
         height: 170px;
         border-bottom: #676879 solid 2px;
      }
      .product-button{
         margin: auto;
         background-color: #ffc46d;
         padding: 5px 20px;
      }
      .product-button:hover{
         color: white;
         background-color: #444444;
         font-weight: 500;
      }
      @media(max-width: 768px) {
         .display-none {
            display: none;
         }
         .in_page .header {
         height: 130px;
         }
      }
      </style>
   </head>
   <!-- body -->
   <body class="main-layout in_page">
      <!-- loader  -->
      <!-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div> -->
      <!-- end loader -->
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
                              <li class="nav-item ">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">About Us</a>
                              </li>
                              <li class="nav-item">
                                 <!-- <a class="nav-link" href="service.html">Services</a> -->
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="gallery.php">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <!-- <a class="nav-link" href="testimonial.html"> Testimonial </a> -->
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Contact Us</a>
                              </li>
                              <li class="nav-item display-none">
                                 <a id="google_translate_element" class="nav-link"></a>
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
      <!-- gallery -->
      <div class="gallery">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our <span class="green">gallery</span></h2>
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
                     <figure><img src="images/g (1).jpeg" alt="#"/></figure>
                  </div>
                  <div class="enquiry-btn" style="width:125px; margin: -15px auto 25px auto;">
                     <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe product-button" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/g (2).jpeg" alt="#"/></figure>
                  </div>
                  <div class="enquiry-btn" style="width:125px; margin: -15px auto 25px auto;">
                     <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe product-button" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                  </div>
                  
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/g (3).jpeg" alt="#"/></figure>
                  </div>
                  <div class="enquiry-btn" style="width:125px; margin: -15px auto 25px auto;">
                     <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe product-button" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/g (4).jpeg" alt="#"/></figure>
                  </div>
                  <div class="enquiry-btn" style="width:125px; margin: -15px auto 25px auto;">
                     <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe product-button" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/g (5).jpeg" alt="#"/></figure>
                  </div>
                  <div class="enquiry-btn" style="width:125px; margin: -15px auto 25px auto;">
                     <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe product-button" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/g (6).jpeg" alt="#"/></figure>
                  </div>
                  <div class="enquiry-btn" style="width:125px; margin: -15px auto 25px auto;">
                     <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe product-button" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/g (7).jpeg" alt="#"/></figure>
                  </div>
                  <div class="enquiry-btn" style="width:125px; margin: -15px auto 25px auto;">
                     <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe product-button" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/g (8).jpeg" alt="#"/></figure>
                  </div>
                  <div class="enquiry-btn" style="width:125px; margin: -15px auto 25px auto;">
                     <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe product-button" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/g (9).jpeg" alt="#"/></figure>
                  </div>
                  <div class="enquiry-btn" style="width:125px; margin: -15px auto 25px auto;">
                     <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe product-button" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/g (10).jpeg" alt="#"/></figure>
                  </div>
                  <div class="enquiry-btn" style="width:125px; margin: -15px auto 25px auto;">
                     <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe product-button" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/g (11).jpeg" alt="#"/></figure>
                  </div>
                  <div class="enquiry-btn" style="width:125px; margin: -15px auto 25px auto;">
                     <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe product-button" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/g (12).jpeg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/g (13).jpeg" alt="#"/></figure>
                  </div>
                  <div class="enquiry-btn" style="width:125px; margin: -15px auto 25px auto;">
                     <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe product-button" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/g (14).jpeg" alt="#"/></figure>
                  </div>
                  <div class="enquiry-btn" style="width:125px; margin: -15px auto 25px auto;">
                     <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe product-button" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/g (15).jpeg" alt="#"/></figure>
                  </div>
                  <div class="enquiry-btn" style="width:125px; margin: -15px auto 25px auto;">
                     <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe product-button" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
      <!-- end gallery -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <!-- <div class=" col-md-3 col-sm-6">
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> 
                     </ul>
                     <p class="variat pad_roght2">There are many variat
                        ions of passages of L
                        orem Ipsum available
                        , but the majority h
                        ave suffered altera
                        tion in some form, by 
                     </p>
                  </div> -->
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