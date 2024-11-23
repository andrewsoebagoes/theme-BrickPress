<?php get_header() ?>


<?php get_slider() ?>
<?php
	$args = array(
	    'post_type'     =>  'post',
	    'post_status'   =>  'publish',
	    'category_name' =>  'featured',
	    'posts_per_page'=>  5,
	    'orderby'       => 'date',
	    'order'         => 'DESC'
	);
	$posts = new WP_Query($args);
	if($posts->have_posts()){
     }
?>
     <!--Services-->
     <section id="services" class="space">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 no-padding main-heading text-center">
                <h2>berita</h2>
              </div>
            <div class="service-block col-sm-4">
              <img
                class="sppb-img-responsive"
                src="images/wood-floring.jpg"
                alt="service"
              />
              <a href="#" target="_parent">
                <h3 class="title">wooden work</h3>
              </a>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                adipiscing erat eget risus sollicitudin pellentesque et non
                erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis
                accumsan ipsum.
              </p>
              <a target="_parent" href="single-services.html" class="simple"
                >Read More<i class="fa fa-long-arrow-right"></i>
              </a>
            </div>
            <div class="service-block col-sm-4">
              <img
                class="sppb-img-responsive"
                src="images/22-360x240.jpg"
                alt="service"
              />
              <a href="#" target="_parent">
                <h3 class="title">Metal roofing</h3>
              </a>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                adipiscing erat eget risus sollicitudin pellentesque et non
                erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis
                accumsan ipsum.
              </p>
              <a target="_parent" href="single-services.html" class="simple"
                >Read More<i class="fa fa-long-arrow-right"></i>
              </a>
            </div>
            <div class="service-block col-sm-4">
              <div class="service-list">
                <div class="pull-left">
                  <img
                    class="img-responsive"
                    src="images/service3.png"
                    alt=""
                  />
                </div>
                <div class="media-body">
                  <h4 class="title">
                    <a href="single-services.html" target="_parent"
                      >architechture &amp; design</a
                    >
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet shuliea consectetur adipiscing
                    elit.
                  </p>
                </div>
              </div>
              <div class="service-list">
                <div class="pull-left">
                  <img
                    class="img-responsive"
                    src="images/construction-laws_small.jpg"
                    alt=""
                  />
                </div>
                <div class="media-body">
                  <h4 class="title">
                    <a href="single-services.html" target="_parent"
                      >general construction</a
                    >
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet shuliea consectetur adipiscing
                    elit.
                  </p>
                </div>
              </div>
              <div class="service-list">
                <div class="pull-left">
                  <img
                    class="img-responsive"
                    src="images/construction_small.jpg"
                    alt=""
                  />
                </div>
                <div class="media-body">
                  <h4 class="title">
                    <a href="single-services.html" target="_parent"
                      >Hardwood Flooring</a
                    >
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet shuliea consectetur adipiscing
                    elit.
                  </p>
                </div>
              </div>
              <div class="service-list">
                <div class="pull-left">
                  <img
                    class="img-responsive"
                    src="images/Engineers-working_small.jpg"
                    alt=""
                  />
                </div>
                <div class="media-body">
                  <h4 class="title">
                    <a href="#" target="_parent">Condo Remodeling</a>
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet shuliea consectetur adipiscing
                    elit.
                  </p>
                </div>
              </div>
              <div class="button">
                <a target="_parent" href="single-services.html" class="simple"
                  >Show all<i class="fa fa-long-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Portfolio-->
      <section id="portfolio" class="space bg-color">
        <div class="container">
          <!--Main Heading-->
          <div class="col-sm-12 no-padding main-heading text-center">
            <h2>publikasi</h2>
          </div>
          <div class="row">
            <div
              id="mod-sp-simpleportfolio"
              class="sp-simpleportfolio sp-simpleportfolio-view-items layout-gallery-space"
            >
              <div class="sp-simpleportfolio-filter">
                <ul>
                  <li class="active" data-group="all">
                    <a href="#">Show All</a>
                  </li>
                  <li data-group="renovation"><a href="#">Renovation</a></li>
                  <li data-group="interior"><a href="#">Interior design</a></li>
                  <li data-group="architechture">
                    <a href="#">Architechture</a>
                  </li>
                </ul>
              </div>
              <div
                class="sp-simpleportfolio-items sp-simpleportfolio-columns-4"
              >
                <div
                  class="sp-simpleportfolio-item"
                  data-groups='["renovation","architechture"]'
                >
                  <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                    <img
                      class="sp-simpleportfolio-img"
                      src="images/portfolio-6-1140x760_600x400.jpg"
                      alt="adipisicing elit"
                    />
                    <div class="sp-simpleportfolio-overlay">
                      <div class="sp-vertical-middle">
                        <div>
                          <div class="sp-simpleportfolio-btns">
                            <a
                              class="btn-zoom"
                              href="./images/portfolio-6-1140x760_600x400.jpg"
                              data-featherlight="image"
                              >Zoom</a
                            >
                            <a class="btn-view" href="single-portfolio.html"
                              >View</a
                            >
                          </div>
                          <h3 class="sp-simpleportfolio-title">
                            <a href="single-portfolio.html">
                              adipisicing elit
                            </a>
                          </h3>
                          <div class="sp-simpleportfolio-tags">
                            Renovation, Architechture
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="sp-simpleportfolio-item" data-groups='["interior"]'>
                  <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                    <img
                      class="sp-simpleportfolio-img"
                      src="images/portfolio-7-1140x760_600x400.jpg"
                      alt="Mirum est notare"
                    />
                    <div class="sp-simpleportfolio-overlay">
                      <div class="sp-vertical-middle">
                        <div>
                          <div class="sp-simpleportfolio-btns">
                            <a
                              class="btn-zoom"
                              href="./images/portfolio-7-1140x760_600x400.jpg"
                              data-featherlight="image"
                              >Zoom</a
                            >
                            <a class="btn-view" href="single-portfolio.html"
                              >View</a
                            >
                          </div>
                          <h3 class="sp-simpleportfolio-title">
                            <a href="single-portfolio.html">
                              Mirum est notare
                            </a>
                          </h3>
                          <div class="sp-simpleportfolio-tags">
                            Interior design
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="sp-simpleportfolio-item"
                  data-groups='["renovation","interior"]'
                >
                  <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                    <img
                      class="sp-simpleportfolio-img"
                      src="images/shutterstock_12727267_600x400.jpg"
                      alt="Nihil imperdiet doming"
                    />
                    <div class="sp-simpleportfolio-overlay">
                      <div class="sp-vertical-middle">
                        <div>
                          <div class="sp-simpleportfolio-btns">
                            <a
                              class="btn-zoom"
                              href="./images/shutterstock_12727267_600x400.jpg"
                              data-featherlight="image"
                              >Zoom</a
                            >
                            <a class="btn-view" href="single-portfolio.html"
                              >View</a
                            >
                          </div>
                          <h3 class="sp-simpleportfolio-title">
                            <a href="single-portfolio.html">
                              Nihil imperdiet doming
                            </a>
                          </h3>
                          <div class="sp-simpleportfolio-tags">
                            Renovation, Interior design
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="sp-simpleportfolio-item"
                  data-groups='["renovation"]'
                >
                  <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                    <img
                      class="sp-simpleportfolio-img"
                      src="images/shutterstock_20049397_600x400.jpg"
                      alt="Feugiat nulla facilisis "
                    />
                    <div class="sp-simpleportfolio-overlay">
                      <div class="sp-vertical-middle">
                        <div>
                          <div class="sp-simpleportfolio-btns">
                            <a
                              class="btn-zoom"
                              href="./images/shutterstock_20049397_600x400.jpg"
                              data-featherlight="image"
                              >Zoom</a
                            >
                            <a class="btn-view" href="single-portfolio.html"
                              >View</a
                            >
                          </div>
                          <h3 class="sp-simpleportfolio-title">
                            <a href="single-portfolio.html">
                              Feugiat nulla facilisis
                            </a>
                          </h3>
                          <div class="sp-simpleportfolio-tags">Renovation</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--about-->
      <section id="about" class="space">
        <div class="container">
          <div class="row">
            <div class="about-block col-sm-5">
              <img
                class="sppb-img-responsive"
                src="<?php echo get_template_directory_uri(); ?>/images/kantor-bupati.jpg"
                alt=""
              />
              <h2 class="title">informasi</h2>
              <p>
                ConstructPress Inc traces its roots back to 1989 in Colorado and
                since then have never looked back. With projects under our belt,
                we can proudly say that performing and international.
              </p>
            </div>
            <div class="about-block col-sm-7">
              <div class="heading">
                <h2 class="title">informasi</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Integer adipiscing erat eget risus sollicitudin pellentesque
                  et non erat. Maecenas nibh dolor, malesuada et bibendum a,
                  sagittis accumsan ipsum. Pellentesque ultrices ultrices
                  sapien, nec tincidunt nunc posuere ut.
                </p>
              </div>
              <div class="about-item">
                <div class="col-sm-6 no-padding">
                  <div class="about-list">
                    <div class="pull-left">
                      <div class="sppb-icon">
                        <span class="icon-badge"></span>
                      </div>
                    </div>
                    <div class="sppb-media-body">
                      <h4 class="title">Construction</h4>
                      <p>Duis aute irure dolor in.</p>
                    </div>
                  </div>
                  <div class="about-list">
                    <div class="pull-left">
                      <div class="sppb-icon">
                        <span class="icon-trophy"></span>
                      </div>
                    </div>
                    <div class="sppb-media-body">
                      <h4 class="title">Maintanance</h4>
                      <p>Duis aute irure dolor in.</p>
                    </div>
                  </div>
                  <div class="about-list">
                    <div class="pull-left">
                      <div class="sppb-icon">
                        <span class="icon-badge"></span>
                      </div>
                    </div>
                    <div class="sppb-media-body">
                      <h4 class="title">Good Planning</h4>
                      <p>Duis aute irure dolor in.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 no-padding">
                  <div class="about-list">
                    <div class="pull-left">
                      <div class="sppb-icon">
                        <span class="icon-trophy"></span>
                      </div>
                    </div>
                    <div class="sppb-media-body">
                      <h4 class="title">Awesome Stuff</h4>
                      <p>Duis aute irure dolor in.</p>
                    </div>
                  </div>
                  <div class="about-list">
                    <div class="pull-left">
                      <div class="sppb-icon">
                        <span class="icon-badge"></span>
                      </div>
                    </div>
                    <div class="sppb-media-body">
                      <h4 class="title">Maintanance</h4>
                      <p>Duis aute irure dolor in.</p>
                    </div>
                  </div>
                  <div class="about-list">
                    <div class="pull-left">
                      <div class="sppb-icon">
                        <span class="icon-trophy"></span>
                      </div>
                    </div>
                    <div class="sppb-media-body">
                      <h4 class="title">Good Planning</h4>
                      <p>Duis aute irure dolor in.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--counter-->
      <section id="counter" class="space blue-overlay">
        <div class="container">
          <div class="row">
            <div class="counter-heading col-sm-7">
              <div class="heading">
                <h2 class="title">
                  We offer the best engineers adn builders
                  <span>to make your dream home.</span>
                </h2>
              </div>
              <div class="counter-base col-sm-12 no-padding">
                <div class="col-sm-4 counter-block">
                  <div class="count">351</div>
                  <h3>Project finished</h3>
                </div>
                <div class="col-sm-4 counter-block">
                  <div class="count">34</div>
                  <h3>Trophy achived</h3>
                </div>
                <div class="col-sm-4 counter-block">
                  <div class="count">679</div>
                  <h3>xpert workers</h3>
                </div>
              </div>
            </div>
            <div class="counter col-sm-5">
              <img
                class="img-responsive"
                src="<?php echo get_template_directory_uri(); ?>/images/kantor-bupati.jpg"
                alt="Counter"
                width="800px"
              />
            </div>
          </div>
        </div>
      </section>
      <!--News-->
      <section class="recent-news space">
        <div class="container">
          <div class="col-sm-12 no-padding main-heading text-center">
            <h2 class="title">kegiatan
            </h2>
          </div>
          <div class="row">
            <article class="col-sm-6 news-block">
              <div class="article-thumb">
                <a href="/" target="_parent">
                  <img
                    class="img-responsive"
                    src="images/service2_medium.jpg"
                    alt="Achived trophy on Industrial managment."
                  />
                </a>
              </div>
              <div class="article-info">
                <h3 class="article-title">
                  <a href="single-blog.html" target="_parent"
                    >Achived trophy on Industrial managment.</a
                  >
                </h3>
                <ul class="meta">
                  <li>
                    <i class="fa fa-calendar"></i>
                    <span class="sppb-meta-date">20 April 2016</span>
                  </li>
                  <li>
                    <i class="fa fa-user"></i>
                    <span class="sppb-meta-author">Super User</span>
                  </li>
                </ul>
                <p>
                  Lorem ipsum dolor sit amet, nec in adipiscing purus luctus,
                  urna pellentesque fringilla vel, non sed arcu integer,...
                </p>
              </div>
            </article>
            <div class="col-sm-6 blog-list">
              <article class="col-sm-12 news-block no-padding">
                <div class="article-thumb pull-left">
                  <a href="single-blog.html" target="_parent">
                    <img
                      class="img-responsive"
                      src="images/5744351061_0ee7664c9e_b_small.jpg"
                      alt="Achived trophy on Industrial managment."
                    />
                  </a>
                </div>
                <div class="article-info">
                  <h3 class="article-title">
                    <a href="single-blog.html" target="_parent"
                      >Achived trophy on Industrial managment.</a
                    >
                  </h3>
                  <ul class="meta">
                    <li>
                      <i class="fa fa-calendar"></i>
                      <span class="sppb-meta-date">20 April 2016</span>
                    </li>
                    <li>
                      <i class="fa fa-user"></i>
                      <span class="sppb-meta-author">Super User</span>
                    </li>
                  </ul>
                  <p>
                    Lorem ipsum dolor sit amet, nec in adipiscing purus luctus,
                    urna pellentesque fringilla vel, non sed arcu integer,...
                  </p>
                </div>
              </article>
              <article class="col-sm-12 news-block no-padding">
                <div class="article-thumb pull-left">
                  <a href="single-blog.html" target="_parent">
                    <img
                      class="img-responsive"
                      src="images/sdrt_small.jpg"
                      alt="Achived trophy on Industrial managment."
                    />
                  </a>
                </div>
                <div class="article-info">
                  <h3 class="article-title">
                    <a href="single-blog.html" target="_parent"
                      >Experience and Resources By Your Side.
                    </a>
                  </h3>
                  <ul class="meta">
                    <li>
                      <i class="fa fa-calendar"></i>
                      <span class="sppb-meta-date">20 April 2016</span>
                    </li>
                    <li>
                      <i class="fa fa-user"></i>
                      <span class="sppb-meta-author">Super User</span>
                    </li>
                  </ul>
                  <p>
                    Lorem ipsum dolor sit amet, nec in adipiscing purus luctus,
                    urna pellentesque fringilla vel, non sed arcu integer,...
                  </p>
                </div>
              </article>
              <article class="col-sm-12 news-block no-padding">
                <div class="article-thumb pull-left">
                  <a href="single-blog.html" target="_parent">
                    <img
                      class="img-responsive"
                      src="images/shutterstock_2653650_small.jpg"
                      alt="Achived trophy on Industrial managment."
                    />
                  </a>
                </div>
                <div class="article-info">
                  <h3 class="article-title">
                    <a href="single-blog.html" target="_parent"
                      >You Have Roots Here Now</a
                    >
                  </h3>
                  <ul class="meta">
                    <li>
                      <i class="fa fa-calendar"></i>
                      <span class="sppb-meta-date">20 April 2016</span>
                    </li>
                    <li>
                      <i class="fa fa-user"></i>
                      <span class="sppb-meta-author">Super User</span>
                    </li>
                  </ul>
                  <p>
                    Lorem ipsum dolor sit amet, nec in adipiscing purus luctus,
                    urna pellentesque fringilla vel, non sed arcu integer,...
                  </p>
                </div>
              </article>
              <article class="col-sm-12 news-block no-padding">
                <div class="article-thumb pull-left">
                  <a href="single-blog.html" target="_parent">
                    <img
                      class="img-responsive"
                      src="images/Cnc_plasma_cutting_small.jpg"
                      alt="Achived trophy on Industrial managment."
                    />
                  </a>
                </div>
                <div class="article-info">
                  <h3 class="article-title">
                    <a href="single-blog.html" target="_parent"
                      >Future. Dreams Com True.</a
                    >
                  </h3>
                  <ul class="meta">
                    <li>
                      <i class="fa fa-calendar"></i>
                      <span class="sppb-meta-date">20 April 2016</span>
                    </li>
                    <li>
                      <i class="fa fa-user"></i>
                      <span class="sppb-meta-author">Super User</span>
                    </li>
                  </ul>
                  <p>
                    Lorem ipsum dolor sit amet, nec in adipiscing purus luctus,
                    urna pellentesque fringilla vel, non sed arcu integer,...
                  </p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <?php get_footer() ?>