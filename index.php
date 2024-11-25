<?php get_header() ?>


<?php get_slider() ?>
<section class="action">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 action-block">
        <h2 class="title">do you need expert to build your dream projects?</h2>
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
        'category_name' =>  'berita',
        'orderby'       => 'date',
        'order'         => 'DESC'
      );
      $posts = new WP_Query($args);
      if ($posts->have_posts()) {
        while ($posts->have_posts()) {
          $posts->the_post();
      ?>
          <article class="col-sm-6 news-block">
            <div class="article-thumb">
              <a href="<?php the_permalink() ?>" target="_parent">
                <?php if (get_the_post_thumbnail_url()): ?>
                  <img class="img-responsive" src="<?= get_the_post_thumbnail_url() ?>" alt="">
                <?php endif ?>
              </a>
            </div>
            <div class="article-info">
              <h3 class="article-title">
                <a href="<?php the_permalink() ?>" target="_parent"><?php the_title() ?></a>
              </h3>
              <ul class="meta">
                <li> <i class="fa fa-calendar"></i>
                  <span class="sppb-meta-date"><?= get_the_date('l, j F Y') ?></span>
                </li>
                <li> <i class="fa fa-user"></i>
                  <span class="sppb-meta-author"><?php the_author() ?></span>
                </li>
              </ul>
              <p><?= wp_trim_words(get_the_content(), 20) ?></p>
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
          'posts_per_page' =>  4,
          'category_name' =>  'berita',
          'orderby'       => 'date',
          'order'         => 'DESC'
        );
        $posts = new WP_Query($args);
        if ($posts->have_posts()) {
          while ($posts->have_posts()) {
            $posts->the_post();
        ?>
            <article class="col-sm-12 news-block no-padding">
              <div class="article-thumb pull-left">
                <?php if (get_the_post_thumbnail_url()): ?>
                  <a href="<?php the_permalink() ?>" target="_parent">
                    <img class="img-responsive" src="<?= get_the_post_thumbnail_url() ?>" width="90px">
                  </a>
                <?php endif ?>
              </div>
              <div class="article-info">
                <h3 class="article-title">
                  <a href="<?= the_permalink() ?>"><?php the_title() ?></a>
                </h3>
                <ul class="meta">
                  <li> <i class="fa fa-user"></i>
                    <span class="sppb-meta-author"><?php the_author() ?></span>
                  </li>
                  <li> <i class="fa fa-calendar"></i>
                    <span class="sppb-meta-date"><?= get_the_date('l, j F Y') ?></span>
                  </li>
                </ul>
                <p><?= wp_trim_words(get_the_content(), 10) ?></p>
              </div>
            </article>
            
        <?php
          }
          // wp_reset_postdata();
        }
        ?>
        
      </div>
      
    </div>
    <div class="button">
          <?php
          // Ambil informasi kategori "berita"
          $category = get_category_by_slug('berita'); // Ganti 'berita' dengan slug kategori Anda
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
        'post_type'     =>  'post',
        'post_status'   =>  'publish',
        'posts_per_page' =>  2,
        'category_name' =>  'Publikasi',
        'orderby'       => 'date',
        'order'         => 'DESC'
      );
      $posts = new WP_Query($args);
      if ($posts->have_posts()) {
        while ($posts->have_posts()) {
          $posts->the_post();
      ?>
          <div class="service-block col-sm-4">
            <?php if (get_the_post_thumbnail_url()): ?>
              <img src="<?= get_the_post_thumbnail_url() ?>" width="300px">
            <?php endif ?>
            <a href="<?php the_permalink() ?>" target="_parent">
              <h3 class="title"><?php the_title() ?></h3>
            </a>
            <i><i class="fas fa-calendar-alt"></i> <?= get_the_date('l, j F Y') ?></i>
            <p>
              <?= wp_trim_words(get_the_content(), 10) ?>
            </p>
            <a target="_parent" href="<?php the_permalink() ?>" class="simple">Read More<i class="fa fa-long-arrow-right"></i>
            </a>
          </div>

      <?php
        }
        wp_reset_postdata();
      }
      ?>

      <div class="service-block col-sm-4">
        <?php
        $args = array(
          'post_type'     =>  'post',
          'post_status'   =>  'publish',
          'posts_per_page' =>  2,
          'category_name' =>  'Publikasi',
          'orderby'       => 'date',
          'order'         => 'DESC'
        );
        $posts = new WP_Query($args);
        if ($posts->have_posts()) {
          while ($posts->have_posts()) {
            $posts->the_post();
        ?>
            <div class="service-list">
              <div class="pull-left">
                <?php if (get_the_post_thumbnail_url()): ?>
                  <img class="img-responsive" src="<?= get_the_post_thumbnail_url() ?>" width="100" height="70">
                <?php endif ?>
              </div>
              <div class="media-body">
                <h4 class="title">
                  <a href="<?php the_permalink() ?>" target="_parent"><?php the_title() ?></a>
                </h4>

                <p>
                  <?= wp_trim_words(get_the_content(), 3) ?>
                </p>
              </div>
            </div>
        <?php
          }
          wp_reset_postdata();
        }
        ?>

        <div class="button">
          <?php
          // Ambil informasi kategori "Publikasi"
          $category = get_category_by_slug('Publikasi'); // Ganti 'Publikasi' dengan slug kategori Anda
          if ($category) :
            $category_link = get_category_link($category->term_id); // Dapatkan URL kategori
          ?>
            <a target="_parent" href="<?= esc_url($category_link) ?>" class="simple">
              Lihat Semua Publikasi <i class="fa fa-long-arrow-right"></i>
            </a>
          <?php else : ?>
            <p>Kategori tidak ditemukan.</p>
          <?php endif; ?>
        </div>

      </div>
    </div>
  </div>
</section>
<!--Informasi-->
<section id="portfolio" class="space">
  <div class="container">
    <!--Main Heading-->
    <div class="col-sm-12 no-padding main-heading text-center">
      <h2>Informasi</h2>
    </div>
    <div class="row">

      <?php
      $args = array(
        'post_type'     =>  'post',
        'post_status'   =>  'publish',
        'posts_per_page' =>  2,
        'category_name' =>  'Informasi',
        'orderby'       => 'date',
        'order'         => 'DESC'
      );
      $posts = new WP_Query($args);
      if ($posts->have_posts()) {
        while ($posts->have_posts()) {
          $posts->the_post();
      ?>
          <div class="service-block col-sm-4">
            <?php if (get_the_post_thumbnail_url()): ?>
              <img src="<?= get_the_post_thumbnail_url() ?>" width="100%" height="auto">
            <?php endif ?>
            <a href="<?php the_permalink() ?>" target="_parent">
              <h3 class="title"><?php the_title() ?></h3>
            </a>
            <p>
              <?= wp_trim_words(get_the_content(), 50) ?> ...
            </p>
            <a target="_parent" href="<?php the_permalink() ?>" class="simple">Read More<i class="fa fa-long-arrow-right"></i>
            </a>
          </div>

      <?php
        }
        wp_reset_postdata();
      }
      ?>
      <div class="service-block col-sm-4">
        <?php
        $args = array(
          'post_type'     =>  'post',
          'post_status'   =>  'publish',
          'posts_per_page' =>  2,
          'category_name' =>  'Informasi',
          'orderby'       => 'date',
          'order'         => 'DESC'
        );
        $posts = new WP_Query($args);
        if ($posts->have_posts()) {
          while ($posts->have_posts()) {
            $posts->the_post();
        ?>
            <div class="service-list">
              <div class="pull-left">
                <?php if (get_the_post_thumbnail_url()): ?>
                  <img class="img-responsive" src="<?= get_the_post_thumbnail_url() ?>" width="100" height="70">
                <?php endif ?>
              </div>
              <div class="media-body">
                <h4 class="title">
                  <a href="<?php the_permalink() ?>" target="_parent"><?php the_title() ?></a>
                </h4>
                <p>
                  <?= wp_trim_words(get_the_content(), 3) ?>
                </p>
              </div>
            </div>
        <?php
          }
          wp_reset_postdata();
        }
        ?>

        <div class="button">
          <?php
          // Ambil informasi kategori "berita"
          $category = get_category_by_slug('Informasi'); // Ganti 'berita' dengan slug kategori Anda
          if ($category) :
            $category_link = get_category_link($category->term_id); // Dapatkan URL kategori
          ?>
            <a target="_parent" href="<?= esc_url($category_link) ?>" class="simple">
              Lihat Semua Informasi <i class="fa fa-long-arrow-right"></i>
            </a>
          <?php else : ?>
            <p>Kategori tidak ditemukan.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Kegiatan-->
<section id="about" class="space bg-color">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 no-padding main-heading text-center">
        <h2>Kegiatan</h2>
      </div>
      <?php
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
      ?>
          <div class="service-block col-sm-4">
            <?php if (get_the_post_thumbnail_url()): ?>
              <img src="<?= get_the_post_thumbnail_url() ?>" width="100%" height="auto">
            <?php endif ?>
            <a href="<?php the_permalink() ?>" target="_parent">
              <h3 class="title"><?php the_title() ?></h3>
            </a>
            <p>
              <?= wp_trim_words(get_the_content(), 50) ?> ...
            </p>
            <a target="_parent" href="<?php the_permalink() ?>" class="simple">Read More<i class="fa fa-long-arrow-right"></i>
            </a>
          </div>

      <?php
        }
        wp_reset_postdata();
      }
      ?>
      <div class="service-block col-sm-4">
        <?php
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
        ?>
            <div class="service-list">
              <div class="pull-left">
                <?php if (get_the_post_thumbnail_url()): ?>
                  <img class="img-responsive" src="<?= get_the_post_thumbnail_url() ?>" width="100" height="70">
                <?php endif ?>
              </div>
              <div class="media-body">
                <h4 class="title">
                  <a href="<?php the_permalink() ?>" target="_parent"><?php the_title() ?></a>
                </h4>
                <p>
                  <?= wp_trim_words(get_the_content(), 3) ?>
                </p>
              </div>
            </div>
        <?php
          }
          wp_reset_postdata();
        }
        ?>

        <div class="button">
          <?php
          // Ambil informasi kategori "berita"
          $category = get_category_by_slug('kegiatan'); // Ganti 'berita' dengan slug kategori Anda
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