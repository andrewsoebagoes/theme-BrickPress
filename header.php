<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->

<head>
     <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
     <!-- Basic Page Needs
  ================================================== -->
     <title>Home</title>
     <meta name="keywords" content="HTML5 Template" />
     <meta name="description" content=" HTML5 Template - v1.0" />
     <meta name="author" content="" />
     <!-- Mobile Specific Meta
    ================================================== -->
     <meta
          name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1" />
     <link
          href="images/favicon.ico"
          rel="shortcut icon"
          type="image/vnd.microsoft.icon" />
     <!--All Css-->
     <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/bootstrap.css" type="text/css" />
     <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/font-awesome.min.css" type="text/css" />
     <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/icon-font.css" type="text/css" />
     <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/animate.min.css" />
     <!--Revolution slider-->
     <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/settings.css" type="text/css" />
     <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/dynamic-captions.css" type="text/css" />
     <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/static-captions.css" type="text/css" />
     <!--Portfolio-->
     <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/featherlight.min.css" type="text/css" />
     <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/spsimpleportfolio.css" type="text/css" />
     <!--Owl Carousel-->
     <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/owl.carousel.css" type="text/css" />
     <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/owl.theme.css" type="text/css" />
     <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/owl.transitions.css" type="text/css" />
     <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/sp-flickr-gallery.css" type="text/css" />
     <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/style.css" />
     <!--Jquery-->
     <script src="<?= get_template_directory_uri() ?>/js/jQuery.js" type="text/javascript"></script>
     <title><?php bloginfo('name'); ?></title>

     <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
     <div class="body-innerwrapper">
          <!--Top Contact info-->
          <section id="sp-top-info">
               <div class="container">
                    <div class="row">
                         <div class="col-sm-12 top-base no-padding">
                              <div class="col-sm-6 top-block">
                                   <p>
                                        <i class="fa fa-map-marker"><i class="hidden">address</i></i>
                                        Asahan, Sumatera Utara, Indonesia
                                   </p>
                              </div>
                              <div class="col-sm-6 top-block text-right">
                                   <ul class="social-icons">
                                        <li>
                                             <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                             <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                             <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                   </ul>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          <!--Top bar-->
          <section id="sp-top-bar">
               <div class="container">
                    <div class="row">
                         <div id="sp-logo" class="col-sm-3 col-md-3">
                              <a class="logo" href="/">
                                   <h1>
                                        <img
                                             class="sp-default-logo"
                                             src="<?php echo get_template_directory_uri(); ?>/images/logoasahan.png"
                                             alt="logoasahan"
                                             width="70px" />
                                   </h1>
                              </a>
                         </div>
                         <div id="sp-top2" class="col-sm-9 col-md-9 hidden-xs">
                              <ul class="sp-contact-info">
                                   <li class="sp-contact-time">
                                        <i class="ti-timer"></i>
                                        <p class="contact-content">
                                             <span class="contact-title">Contact Time:</span>
                                             <span class="time">Mon-Sat: 9.00-18.00</span>
                                        </p>
                                   </li>
                                   <li class="sp-contact-phone">
                                        <i class="icon-call-in"></i>
                                        <p class="contact-content">
                                             <span class="contact-title">Phone Number:</span>
                                             <span>(+89) 530-352-3027</span>
                                        </p>
                                   </li>
                                   <li class="sp-contact-email">
                                        <i class="icon-envelope-letter"></i>
                                        <p class="contact-content">
                                             <span class="contact-title">Contact Mail:</span>
                                             <span>info@mail.com</span>
                                        </p>
                                   </li>
                              </ul>
                         </div>
                    </div>
               </div>
          </section>
          <!--header-->
          <header id="sp-header">
               <div class="container">
                    <div class="row">
                         <div id="sp-menu" class="col-sm-12 col-md-12">
                              <div class="sp-column">
                                   <div class="sp-megamenu-wrapper">
                                        <a id="offcanvas-toggler" href="#"><i class="fa fa-bars"></i></a>
                                        <ul class="sp-megamenu-parent menu-fade-up hidden-xs">
                                        <li class="sp-menu-item"><a href="index.html">Home</a></li>
								<li class="sp-menu-item sp-has-child current-item active"><a href="services.html">services</a>
									<div class="sp-dropdown sp-dropdown-main sp-menu-right">
										<div class="sp-dropdown-inner">
											<ul class="sp-dropdown-items">
												<li class="sp-menu-item"><a href="single-services.html">wooden work</a></li>
												<li class="sp-menu-item"><a href="single-services.html">metal roofing</a></li>
												<li class="sp-menu-item"><a href="single-services.html">architechture &amp; design</a></li>
												<li class="sp-menu-item"><a href="single-services.html">general construction</a></li>
												<li class="sp-menu-item"><a href="single-services.html">hardwood flooring</a></li>
												<li class="sp-menu-item"><a href="single-services.html">house remodeling</a></li>
											</ul>
										</div>
									</div>
								</li>
								<li class="sp-menu-item"><a href="about.html">about</a></li>
								<li class="sp-menu-item"><a href="projects.html">projects</a></li>
								<li class="sp-menu-item current-item  sp-has-child"><a href="blog.html">news</a>
									<div class="sp-dropdown sp-dropdown-main sp-menu-right">
										<div class="sp-dropdown-inner">
											<ul class="sp-dropdown-items">
												<li class="sp-menu-item"><a href="blog.html">Blog work</a></li>
												<li class="sp-menu-item"><a href="single-blog.html">Single Blog v1</a></li>
												<li class="sp-menu-item"><a href="single-blog-2.html">Single Blog v2</a></li>
											</ul>
										</div>
									</div>
								</li>
								<li class="sp-menu-item"><a href="contact.html">Contact</a></li>
                                        </ul>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </header>