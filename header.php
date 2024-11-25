<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->

<head>
     <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
     <!-- Basic Page Needs
  ================================================== -->

     <meta name="keywords" content="HTML5 Template" />
     <meta name="description" content=" HTML5 Template - v1.0" />
     <meta name="author" content="" />
     <!-- Mobile Specific Meta
    ================================================== -->
     <meta
          name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1" />

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
     <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/style.css" />
     <!--Jquery-->
     <script src="<?= get_template_directory_uri() ?>/js/jQuery.js" type="text/javascript"></script>

     <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/images/logoasahan.png" type="image/x-icon">

     <?php wp_head(); ?>

     <!-- <style>
          .sp-megamenu-parent {
               list-style: none;
               padding: 0;
               display: flex;
          }

          .sp-megamenu-parent>li {
               margin-right: 20px;
          }

          .sp-megamenu-parent>li>a {
               text-decoration: none;
               color: #000;
          }

          .sp-megamenu-parent .submenu {
               display: none;
               position: absolute;
               background: #fff;
          }

          .sp-megamenu-parent>li:hover .submenu {
               display: block;
          }
     </style> -->

</head>

<body <?php body_class(); ?>>
     <div class="body-innerwrapper inner">
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

                                   <li class="sp-contact-phone">
                                        <i class="icon-call-in"></i>
                                        <p class="contact-content">
                                             <span class="contact-title">Phone Number:</span>
                                             <span>0123456789</span>
                                        </p>
                                   </li>
                                   <li class="sp-contact-email">
                                        <i class="icon-envelope-letter"></i>
                                        <p class="contact-content">
                                             <span class="contact-title">Contact Mail:</span>
                                             <span>@asahankab.go.id</span>
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
                                        <!-- <a id="offcanvas-toggler" href="#"><i class="fa fa-bars"></i></a> -->
                                        <?php
                                        wp_nav_menu(array(
                                             'theme_location' => 'header-menu',
                                             'container'      => false,               // Tidak ada elemen pembungkus
                                             'menu_class'     => 'sp-megamenu-parent menu-fade-up hidden-xs',             // Kelas untuk `<ul>`
                                             'walker'         => new Custom_Walker_Nav_Menu(), // Gunakan walker custom
                                             'fallback_cb'    => false
                                        ));
                                        ?>
                                       
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </header>