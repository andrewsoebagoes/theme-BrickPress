<?php wp_footer(); ?>
      <!--Footer upper-->
      <section id="sp-bottom">
        <div class="container">
          <div class="row">
            <div id="sp-bottom1" class="col-sm-6 col-md-3">
              <h3 class="sp-module-title">Alamat</h3>
              <ul class="textwidget">
                <li>
                  <i class="fa fa-map-marker"><i class="hidden">address</i></i>
                  Jl. Jenderal Sudirman No.05, Kisaran, Kisaran Baru, Asahan, Kabupaten Asahan, Sumatera Utara 21211
                </li>
                <li><i class="fa fa-phone"></i> 0123456789</li>
                <li><i class="fa fa-envelope"></i> @asahankab.go.id</li>
                <li><i class="fa fa-fax"></i> 0123456789</li>
              </ul>
            </div>
            <div id="sp-bottom2" class="col-sm-6 col-md-3">
              <h3 class="sp-module-title">Kategori</h3>
              <ul class="textwidget">
              <?php 
						$categories = get_categories();
						foreach($categories as $category){
						?>
						<li>
              <i class="ti-arrow-right"></i
							<a href="<?= get_category_link( $category->term_id ) ?>"><?= $category->name  ?> <span>(<?= $category->category_count ?>)</span></a>
						</li>
						<?php 
						}
						?>
                
              </ul>
            </div>
            <div id="sp-bottom3" class="col-sm-6 col-md-3">
              <h3 class="sp-module-title">Tag Cloud</h3>
              <div class="tagspopular">
                <ul>
                  <li><a href="/" target="_parent">love</a></li>
                  <li><a href="/" target="_parent">Investment </a></li>
                  <li><a href="/" target="_parent">Career </a></li>
                  <li><a href="/" target="_parent">Joomla!</a></li>
                  <li><a href="/" target="_parent">Science</a></li>
                  <li><a href="/" target="_parent">Board</a></li>
                  <li><a href="/" target="_parent">Analysis</a></li>
                  <li><a href="/" target="_parent">2016 </a></li>
                </ul>
              </div>
            </div>
            <div id="sp-bottom4" class="col-sm-3 col-md-3">
              <h3 class="sp-module-title">Flickr Gallery</h3>
              <div class="sp-flickr-gallery">
                <div class="sp-flickr-gallery-content">
                  <ul
                    class="sp-flickr-gallery"
                    data-id="83573762@N05"
                    data-count="0"
                    data-setid="72157663666458186"
                  >
                    <li>
                      <a
                        target="_blank"
                        href="http://www.flickr.com/photos/rusafy/24486097205/in/set-72157663666458186/"
                        title="12"
                        ><span class="flickr-gallery-wrap"
                          ><img
                            class="img-responsive"
                            alt="12"
                            src="http://farm2.staticflickr.com/1712/24486097205_356793e3e0_s.jpg" /></span
                      ></a>
                    </li>
                    <li>
                      <a
                        target="_blank"
                        href="http://www.flickr.com/photos/rusafy/24459895706/in/set-72157663666458186/"
                        title="23"
                        ><span class="flickr-gallery-wrap"
                          ><img
                            class="img-responsive"
                            alt="23"
                            src="http://farm2.staticflickr.com/1512/24459895706_923897c084_s.jpg" /></span
                      ></a>
                    </li>
                    <li>
                      <a
                        target="_blank"
                        href="http://www.flickr.com/photos/rusafy/24403696971/in/set-72157663666458186/"
                        title="1"
                        ><span class="flickr-gallery-wrap"
                          ><img
                            class="img-responsive"
                            alt="1"
                            src="http://farm2.staticflickr.com/1524/24403696971_45bd9fb9c8_s.jpg" /></span
                      ></a>
                    </li>
                    <li>
                      <a
                        target="_blank"
                        href="http://www.flickr.com/photos/rusafy/24403694221/in/set-72157663666458186/"
                        title="martin-soto-climent-unknown-feldschlösschen"
                        ><span class="flickr-gallery-wrap"
                          ><img
                            class="img-responsive"
                            alt="martin-soto-climent-unknown-feldschlösschen"
                            src="http://farm2.staticflickr.com/1592/24403694221_7087f01892_s.jpg" /></span
                      ></a>
                    </li>
                    <li>
                      <a
                        target="_blank"
                        href="http://www.flickr.com/photos/rusafy/24377806572/in/set-72157663666458186/"
                        title="20110927064108-Web-Rachel-Install-1"
                        ><span class="flickr-gallery-wrap"
                          ><img
                            class="img-responsive"
                            alt="20110927064108-Web-Rachel-Install-1"
                            src="http://farm2.staticflickr.com/1491/24377806572_fa803e71c1_s.jpg" /></span
                      ></a>
                    </li>
                    <li>
                      <a
                        target="_blank"
                        href="http://www.flickr.com/photos/rusafy/24377806372/in/set-72157663666458186/"
                        title="cd188c0f23f595a6ee643b4491276c59-1110x730"
                        ><span class="flickr-gallery-wrap"
                          ><img
                            class="img-responsive"
                            alt="cd188c0f23f595a6ee643b4491276c59-1110x730"
                            src="http://farm2.staticflickr.com/1685/24377806372_2ef47198ac_s.jpg" /></span
                      ></a>
                    </li>
                    <li>
                      <a
                        target="_blank"
                        href="http://www.flickr.com/photos/rusafy/24190548210/in/set-72157663666458186/"
                        title="7"
                        ><span class="flickr-gallery-wrap"
                          ><img
                            class="img-responsive"
                            alt="7"
                            src="http://farm2.staticflickr.com/1641/24190548210_a0791ea8bf_s.jpg" /></span
                      ></a>
                    </li>
                    <li>
                      <a
                        target="_blank"
                        href="http://www.flickr.com/photos/rusafy/24190546860/in/set-72157663666458186/"
                        title="21"
                        ><span class="flickr-gallery-wrap"
                          ><img
                            class="img-responsive"
                            alt="21"
                            src="http://farm2.staticflickr.com/1579/24190546860_5c5c7b8e11_s.jpg" /></span
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--footer copyrights-->
      <footer id="sp-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <p>
              Copyright <?=date('Y')?> - BAPPERIDA Kab. Asahan
              </p>
            </div>
          </div>
        </div>
      </footer>
      <!--Side Menu-->
      <div class="offcanvas-menu">
        <a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
        <div class="offcanvas-inner">
          <div class="sp-module">
            <h3 class="sp-module-title">off canvas menu</h3>
            <div class="sp-module-content">
              <ul class="nav menu">
                <li class="item-101 current active">
                  <a href="<?= home_url() ?>">Home</a>
                </li>
                <li class="item-166"><a href="about.html">about</a></li>
                <li class="item-111"><a href="projects.html">projects</a></li>
                <li class="item-109"><a href="blog.html">news</a></li>
                <li class="item-110"><a href="contact.html">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--All Script-->
    <script src="<?= get_template_directory_uri() ?>/js/bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/appear.js"></script>
    <script
      src="<?= get_template_directory_uri() ?>/js/jquery.themepunch.tools.min.js"
      type="text/javascript"
    ></script>
    <script
      src="<?= get_template_directory_uri() ?>/js/jquery.themepunch.revolution.min.js"
      type="text/javascript"
    ></script>
    <!--portfolio-->
    <script
      src="<?= get_template_directory_uri() ?>/js/jquery.shuffle.modernizr.min.js"
      type="text/javascript"
    ></script>
    <script src="<?= get_template_directory_uri() ?>/js/featherlight.min.js" type="text/javascript"></script>
    <script src="<?= get_template_directory_uri() ?>/js/spsimpleportfolio.js" type="text/javascript"></script>
    <script src="<?= get_template_directory_uri() ?>/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    <script src="<?= get_template_directory_uri() ?>/js/smoothscroll.js" type="text/javascript"></script>
    <script src="<?= get_template_directory_uri() ?>/js/owl.carousel.js" type="text/javascript"></script>
    <script src="<?= get_template_directory_uri() ?>/js/sp-flickr-gallery.js" type="text/javascript"></script>
    <script src="<?= get_template_directory_uri() ?>/js/main.js" type="text/javascript"></script>
  </body>
</html>
