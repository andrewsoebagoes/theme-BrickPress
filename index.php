<?php get_header() ?>


<?php get_slider() ?>
<section class="action">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 action-block text-center">
        <h2 class="title">Kerja keras bersama untuk menuju masyarakat adil dan makmur</h2>
      </div>

    </div>
  </div>
</section>

<!--Berita-->
<section class="recent-news space">
  <div class="container">
    <div class="col-sm-12 no-padding main-heading text-center">
      <h2 class="title">Berita</h2>
    </div>
    <div class="row">
      <?php
      $args = array(
        'post_type'     =>  'post',
        'post_status'   =>  'publish',
        'posts_per_page' =>  1,
        'category_name' =>  'Informasi',
        'orderby'       => 'date',
        'order'         => 'DESC'
      );
      $posts = new WP_Query($args);
      $ids = [];
      if ($posts->have_posts()) {
        while ($posts->have_posts()) {
          $posts->the_post();
          $ids[] = get_the_ID();
      ?>
          <article class="col-sm-6 news-block">
            <div class="article-thumb">
              <a href="<?php the_permalink() ?>" target="_parent">
                <img class="img-responsive" src="<?= get_the_post_thumbnail_url() && !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/images/medium_noimage.jpg' ?>" alt="">
              </a>
            </div>
            <div class="article-info">
              <h3 class="article-title">
                <a href="<?php the_permalink() ?>" target="_parent"><?php the_title() ?></a>
              </h3>
              <ul class="meta">
                <li> <i class="fa fa-user"></i>
                  <span class="sppb-meta-author"><?php the_author() ?></span>
                </li>
                <li> <i class="fa fa-calendar"></i>
                  <span class="sppb-meta-date"><?= get_the_date('l, j F Y') ?></span>
                </li>
              </ul>
              <p><?= wp_trim_words(get_the_content(), 50) ?>
                <a target="_parent" href="<?php the_permalink() ?>" style="margin-bottom:20px;margin-top:5px" class="simple">Lihat Selengkapnya<i class="fa fa-long-arrow-right"></i>
                </a>
              </p>
            </div>
          </article>
      <?php
        }
        wp_reset_postdata();
      }
      ?>
      <div class="col-sm-6 blog-list">
        <?php
        $args = array(
          'post_type'     =>  'post',
          'post_status'   =>  'publish',
          'posts_per_page' =>  5,
          'category_name' =>  'Informasi',
          'orderby'       => 'date',
          'order'         => 'DESC'
        );
        $posts = new WP_Query($args);
        if ($posts->have_posts()) {
          while ($posts->have_posts()) {
            $posts->the_post();
            if (in_array(get_the_ID(), $ids)) continue;
        ?>
            <article class="col-sm-12 news-block no-padding">
              <div class="article-thumb pull-left">
                <a href="<?php the_permalink() ?>" target="_parent">
                  <img class="img-responsive" src="<?= get_the_post_thumbnail_url() && !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/images/medium_noimage.jpg' ?>" width="90px">
                </a>
              </div>
              <div class="article-info">
                <h3 class="article-title">
                  <a href="<?= the_permalink() ?>"><?= wp_trim_words(get_the_title(), 5) ?></a>
                </h3>
                <!-- <ul class="meta">
                  <li> <i class="fa fa-user"></i>
                    <span class="sppb-meta-author"><?php the_author() ?></span>
                  </li>
                  <li> <i class="fa fa-calendar"></i>
                    <span class="sppb-meta-date"><?= get_the_date('l, j F Y') ?></span>
                  </li>
                </ul> -->
                <p><?= wp_trim_words(get_the_content(), 10) ?></p>
              </div>
            </article>
        <?php
          }
          // wp_reset_postdata();
        }
        ?>
        <div class="button" style="margin-top: 10px;">
          <?php
          // Ambil informasi kategori "berita"
          $category = get_category_by_slug('informasi'); // Ganti 'berita' dengan slug kategori Anda
          if ($category) :
            $category_link = get_category_link($category->term_id); // Dapatkan URL kategori
          ?>
            <a target="_parent" href="<?= esc_url($category_link) ?>" class="simple">
              Lihat Semua Berita <i class="fa fa-long-arrow-right"></i>
            </a>
          <?php else : ?>
            <p>Kategori tidak ditemukan.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>

  </div>
</section>


<!--Publikasi-->
<section id="services" class="space bg-color">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 no-padding main-heading text-center">
        <h2>Publikasi</h2>
      </div>
      <?php
      $args = array(
        'post_type'     =>  'publikasi',
        'post_status'   =>  'publish',
        'posts_per_page' =>  3,
        'orderby'       => 'date',
        'order'         => 'DESC'
      );

      $posts = new WP_Query($args);
      if ($posts->have_posts()) {
        while ($posts->have_posts()) {
          $posts->the_post();
      ?>
          <div class="service-block col-md-4 col-sm-12 main-heading ">
            <div class="article-thumb">
              <img class="img-responsive" src="<?= get_the_post_thumbnail_url() && !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/images/medium_noimage.jpg' ?>" style="object-fit:cover">
            </div>
            <div class="article-info">
              <h3 class="article-title">
                <a href="<?php the_permalink() ?>" target="_parent"><?php the_title() ?></a>
              </h3>
              <ul class="meta">
                <li> <i class="fa fa-user"></i>
                  <span class="sppb-meta-author"><?php the_author() ?></span>
                </li>
                <li> <i class="fa fa-calendar"></i>
                  <span class="sppb-meta-date"><?= get_the_date('l, j F Y') ?></span>
                </li>
              </ul>
              <p><?= wp_trim_words(get_the_content(), 20) ?>
                <a target="_parent" href="<?php the_permalink() ?>" style="margin-bottom:20px;margin-top:5px" class="simple">Lihat Selengkapnya<i class="fa fa-long-arrow-right"></i>
                </a>
              </p>
            </div>
          </div>

      <?php
        }
        wp_reset_postdata();
      }
      ?>

      <div class="col-sm-12">
        <center>
          <a href='<?= get_post_type_archive_link('publikasi'); ?>' class='sppb-btn sppb-btn-default sppb-btn-'>Lihat Semua Publikasi</a>
        </center>
      </div>
    </div>
  </div>
</section>

<?php
$cookie_name = "visitor_counter";
$date = date('Y-m-d');
$init_counter = [$date => 0];
$counter = get_option($cookie_name,  $init_counter);
$total = array_sum($counter);
$month = date('Y-m');
$month_counter = array_filter($counter, function ($value, $key) use ($month) {
  return substr($key, 0, 7) == $month;
}, ARRAY_FILTER_USE_BOTH);
?>
<section id="counter" class="space parallax1" style="padding-bottom:100px;padding-top:80px;background-color:#047009;">
  <div class="container">
    <div class="row">
      <div class="counter-heading col-sm-12 col-md-6">
        <div class="heading">
          <h2 class="title">Visitor Counter</h2>
        </div>
        <div class="counter-base col-sm-12 no-padding">
          <div class="col-sm-4 counter-block">
            <div class="count"><?= $counter[$date] ?></div>
            <h3>Hari ini</h3>
          </div>
          <div class="col-sm-4 counter-block">
            <div class="count"><?= array_sum($month_counter) ?></div>
            <h3>Bulan ini</h3>
          </div>
          <div class="col-sm-4 counter-block">
            <div class="count"><?= $total ?></div>
            <h3>Total</h3>
          </div>
        </div>
      </div>
      <div class="counter col-sm-12 col-md-6">
        <div style="background:#FFF;padding:20px;">
          <canvas id="visitor-counter"></canvas>
        </div>
      </div>
    </div>
  </div>
</section>


<!--Kegiatan-->
<section id="about" class="space">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 no-padding main-heading text-center">
        <h2>Kegiatan</h2>
      </div>
      <?php
      $ids = [];
      $args = array(
        'post_type'     =>  'post',
        'post_status'   =>  'publish',
        'posts_per_page' =>  2,
        'category_name' =>  'kegiatan',
        'orderby'       => 'date',
        'order'         => 'DESC'
      );
      $posts = new WP_Query($args);
      if ($posts->have_posts()) {
        while ($posts->have_posts()) {
          $posts->the_post();
          $ids[] = get_the_ID();
      ?>
          <div class="service-block col-sm-4">
            <img src="<?= get_the_post_thumbnail_url() && !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/images/medium_noimage.jpg' ?>" width="100%" height="250px" style="object-fit:cover">
            <div class="article-info">
              <h3 class="article-title">
                <a href="<?php the_permalink() ?>" target="_parent"><?php the_title() ?></a>
              </h3>
              <!-- <ul class="meta">
                <li> <i class="fa fa-user"></i>
                  <span class="sppb-meta-author"><?php the_author() ?></span>
                </li>
                <li> <i class="fa fa-calendar"></i>
                  <span class="sppb-meta-date"><?= get_the_date('l, j F Y') ?></span>
                </li>
              </ul> -->
              <p><?= wp_trim_words(get_the_content(), 20) ?>

                <a target="_parent" href="<?php the_permalink() ?>" style="margin-bottom:20px;margin-top:5px" class="simple">Lihat Selengkapnya<i class="fa fa-long-arrow-right"></i>
                </a>
              </p>
            </div>
          </div>

      <?php
        }
        wp_reset_postdata();
      }
      ?>
      <div class="service-block col-sm-4">
        <div class="service-list">
          <?php
          $args = array(
            'post_type'     =>  'post',
            'post_status'   =>  'publish',
            'posts_per_page' =>  5,
            'category_name' =>  'kegiatan',
            'orderby'       => 'date',
            'order'         => 'DESC'
          );
          $posts = new WP_Query($args);
          if ($posts->have_posts()) {
            while ($posts->have_posts()) {
              $posts->the_post();
              if (in_array(get_the_ID(), $ids)) continue;
          ?>
              <div class="pull-left">
                <img class="img-responsive" src="<?= get_the_post_thumbnail_url() && !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/images/medium_noimage.jpg' ?>" width="100" height="70" style="object-fit:cover">
              </div>
              <div class="media-body">
                <h4 class="title">
                  <a href="<?php the_permalink() ?>" target="_parent"><?= wp_trim_words(get_the_title(), 5) ?></a>
                </h4>
                <p>
                  <?= wp_trim_words(get_the_content(), 3) ?>
                </p>
              </div>
          <?php
            }
            wp_reset_postdata();
          }
          ?>
        </div>

        <div class="button" style="margin-top: 20px;margin-left:2px">
          <?php
          // Ambil informasi kategori "kegiatan"
          $category = get_category_by_slug('kegiatan'); // Ganti 'kegiatan' dengan slug kategori Anda
          if ($category) :
            $category_link = get_category_link($category->term_id); // Dapatkan URL kategori
          ?>
            <a target="_parent" href="<?= esc_url($category_link) ?>" class="simple">
              Lihat Semua Kegiatan <i class="fa fa-long-arrow-right"></i>
            </a>
          <?php else : ?>
            <p>Kategori tidak ditemukan.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer() ?>