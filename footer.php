<?php wp_footer(); ?>
<!--Footer upper-->
<style>.mb-4 {margin-bottom:20px} </style>
<section id="sp-bottom">
  <div class="container">
    <div class="row">
      <div id="sp-bottom1" class="col-sm-12 col-md-3 mb-4">
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
      <div id="sp-bottom2" class="col-sm-12 col-md-3 mb-4">
        <h3 class="sp-module-title">Kategori</h3>
        <ul class="textwidget">
          <?php
          $categories = get_categories();
          foreach ($categories as $category) {
            if ($category->name == 'Slider') continue;
          ?>
            <li>
              <i class="ti-arrow-right"></i>
              <a href="<?= get_category_link($category->term_id) ?>"><?= $category->name  ?> <span>(<?= $category->category_count ?>)</span></a>
            </li>
          <?php
          }
          ?>

        </ul>
      </div>
      <div id="sp-bottom3" class="col-sm-12 col-md-6">
        <h3 class="sp-module-title">Lokasi Kantor</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.3938821118454!2d99.61107637497051!3d2.98804869698801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30324be7f9bf7d69%3A0xcf1b538dccd3689d!2sBappeda%20Kab.%20Asahan!5e0!3m2!1sid!2sid!4v1732536555944!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
      <h3 class="sp-module-title">Menu</h3>
      <div class="sp-module-content">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'container'      => false,               // Tidak ada elemen pembungkus
          'menu_class'     => 'nav menu', // Kelas untuk `<ul>`
          'walker'         => new bs4Navwalker(), // Gunakan walker custom
          'fallback_cb'    => false,              // Jangan tampilkan menu default jika menu kosong
        ));
        ?>
      </div>
    </div>
  </div>
</div>
</div>

<!--All Script-->
<script src="<?= get_template_directory_uri() ?>/js/bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/appear.js"></script>
<script src="<?= get_template_directory_uri() ?>/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri() ?>/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<!--portfolio-->
<script src="<?= get_template_directory_uri() ?>/js/jquery.shuffle.modernizr.min.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri() ?>/js/featherlight.min.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri() ?>/js/spsimpleportfolio.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri() ?>/js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri() ?>/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri() ?>/js/owl.carousel.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri() ?>/js/sp-flickr-gallery.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri() ?>/js/main.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<?php
$cookie_name = "visitor_counter";
$date = date('Y-m-d');
$init_counter = [$date => 0];
$counter = get_option( $cookie_name,  $init_counter);
$year = date('Y');
$year_counter = array_filter($counter, function($value, $key) use ($year){
  return substr($key, 0, 4) == $year;
}, ARRAY_FILTER_USE_BOTH);
// Variabel untuk menyimpan total per bulan
$monthly_totals = [];

// Proses data
foreach ($year_counter as $date => $count) {
    // Ambil bulan dan tahun dari tanggal
    $month = date("Y-m", strtotime($date));

    // Tambahkan ke total bulan tersebut
    if (!isset($monthly_totals[$month])) {
        $monthly_totals[$month] = 0;
    }
    $monthly_totals[$month] += $count;
}
ksort($monthly_totals);
?>
<script type="text/javascript">
  jQuery('.slick-slider').slick({
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    dots: true,
    arrows: true
  });

  if(document.querySelector('#visitor-counter'))
  {
    const myChart = new Chart('visitor-counter', {
      type: "line",
      data: {
        datasets: [{
          label: 'Pengunjung',
          data: <?=json_encode(array_values($monthly_totals))?>,
          borderColor:'rgb(4, 112, 9)',
          backgroundColor:'rgba(4, 112, 9, 0.3)',
        }],
        labels: ['Januari', 'Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']
      },
      options: { 
            legend: {
                labels: {
                    fontColor: "rgb(4, 112, 9)",
                    fontSize: 12
                }
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontColor: "rgb(4, 112, 9)",
                        fontSize: 12,
                        stepSize: 60,
                        beginAtZero: true
                    },
                    gridLines: {
                        color: "rgba(0, 0, 0, 0)",
                    }
                }],
                xAxes: [{
                    ticks: {
                        fontColor: "rgb(4, 112, 9)",
                        fontSize: 12,
                        stepSize: 60,
                        beginAtZero: true,
                        maxRotation: 90,
                        minRotation: 90
                    },
                    gridLines: {
                        color: "rgba(0, 0, 0, 0)",
                    }
                }]
            }
        }
    });
  }

</script>
</body>

</html>