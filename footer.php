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
          foreach ($categories as $category) {
          ?>
            <li>
              <i class="ti-arrow-right"></i
                <a href="<?= get_category_link($category->term_id) ?>"><?= $category->name  ?> <span>(<?= $category->category_count ?>)</span></a>
            </li>
          <?php
          }
          ?>

        </ul>
      </div>
      <div id="sp-bottom3" class="col-sm-6 col-md-3">
        <h3 class="sp-module-title">Lokasi Kantor</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.3938821118454!2d99.61107637497051!3d2.98804869698801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30324be7f9bf7d69%3A0xcf1b538dccd3689d!2sBappeda%20Kab.%20Asahan!5e0!3m2!1sid!2sid!4v1732536555944!5m2!1sid!2sid" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
          Copyright <?= date('Y') ?> - BAPPERIDA Kab. Asahan
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
  type="text/javascript"></script>
<script
  src="<?= get_template_directory_uri() ?>/js/jquery.themepunch.revolution.min.js"
  type="text/javascript"></script>
<!--portfolio-->
<script
  src="<?= get_template_directory_uri() ?>/js/jquery.shuffle.modernizr.min.js"
  type="text/javascript"></script>
<script src="<?= get_template_directory_uri() ?>/js/featherlight.min.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri() ?>/js/spsimpleportfolio.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri() ?>/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri() ?>/js/smoothscroll.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri() ?>/js/owl.carousel.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri() ?>/js/sp-flickr-gallery.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri() ?>/js/main.js" type="text/javascript"></script>
</body>

</html>