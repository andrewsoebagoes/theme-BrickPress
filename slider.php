  <!--Banner-->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css"/>
  <style>
    .slider-item {
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      height: calc(100vh - 200px);
      padding: 30px;
    }

    .slider-content {
      background-color: rgba(0,0,0,0.5);
      padding: 30px;
      color: #FFF;
      position: relative;
      top: 50%;
    }

    .slider-content h1 {
      color: #FFF;
      font-weight: bold;
    }

    .slick-prev:before,
      .slick-next:before {
        color: #036606;
      }

      .slick-dots {
        bottom: 30px !important;
      }

    .slick-prev {
      left: 30px;
      z-index: 1;
      margin-top: -30px;
    }

    .slick-next {
      right: 30px;
      z-index: 1;
      margin-top: -30px;
    }
    .slick-slider {
      margin-bottom: 0px;
    }
  </style>
  <section id="banner">
    <div class="">
      <div class="slick-slider">
        <?php
        $args = array(
          'post_type'     =>  'post',
          'post_status'   =>  'publish',
          'posts_per_page' =>  8,
          'category_name' =>  'slider',
          'orderby'       => 'date',
          'order'         => 'DESC'
        );
        $posts = new WP_Query($args);
        if ($posts->have_posts()) {
          while ($posts->have_posts()) {
            $posts->the_post();
        ?>
            <div class="slider-item" style="background-image:url(<?= get_the_post_thumbnail_url() && !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/images/medium_noimage.jpg' ?>)">
              <div class="slider-content container">
                <h1 style="margin:0;"><?= wp_trim_words(get_the_title(), 8) ?></h1>
                <?= wp_trim_words(get_the_content(), 50) ?>
                <div style="display: block; margin-top:20px;">
                  <a href='<?php the_permalink() ?>' class='sppb-btn sppb-btn-default sppb-btn-'>Lihat Selengkapnya</a>
                </div>
              </div>
          </div>
        <?php
          }
          wp_reset_postdata();
        }
        ?>
      </div>
    </div>
  </section>