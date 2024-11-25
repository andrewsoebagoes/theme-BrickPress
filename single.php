   <!--Breadcrumb-->
   <?php get_header() ?>
	<!--Breadcrumb-->
	<?php 
		if(have_posts())
			while(have_posts()){
				the_post();
		?>
   <section id="breadcrumb" class="space">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 breadcrumb-block">
                        <h2>Berita</h2>
                    </div>
                    <div class="col-sm-6 breadcrumb-block text-right">
                        <ol class="breadcrumb">
                            <li><span>You are here:</span><a href="index.html">Home</a></li>
                            <li class="active">news</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog-->
        <section id="blog" class="space-100 single-blog">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 blog-base">
                        <div class="col-sm-12 no-padding">
                            <article class="col-sm-12 no-padding blog-block">
                            <?php if (get_the_post_thumbnail_url()): ?>
							<img src="<?= get_the_post_thumbnail_url() ?>" width="100%" height="auto">
						<?php endif ?>
                                <div class="blog-content">
                                    <div class="icon pull-left">
                                        <i class="fa fa-thumb-tack"></i>
                                    </div>
                                    <div class="blog-info">
                                        <ul class="meta">
                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Written by">
                                                <i class="fa fa-user"></i><?php the_author() ?>
                                            </li>
                                            <li>
                                                <a data-toggle="tooltip" data-placement="top" title="" href="#" data-original-title="Article Category">
                                                    <i class="fa fa-folder-open-o"></i>
                                                    <?php
																												$categories = get_the_category();
																												if (!empty($categories)) {

																													foreach ($categories as $category) {
																														echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a> ';
																													}
																												}
																												?>
                                                  </a>
                                            </li>
                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Published date">
                                                <i class="fa fa-calendar-o"></i> <?= get_the_date('l, j F Y') ?>
                                            </li>
                                        </ul>
                                        <h2><a href="#"><?php the_title() ?></a> </h2>
                                    </div>
                                    <p><?php the_content() ?></p>
                                    
                                </div>
                                <?php
		}
			?>
                                <ul class="tags">
                                    <li><span>Tags: </span><a href="/" class="label label-info" rel="tag" target="_parent">love</a></li>
                                    <li><a href="/" class="label label-info" rel="tag" target="_parent">Creative</a></li>
                                    <li><a href="/" class="label label-info" rel="tag" target="_parent">Board</a></li>
                                    <li><a href="/" class="label label-info" rel="tag" target="_parent">Career</a></li>
                                </ul>
                                <ul class="pager pagenav">
                                    <li class="previous">
                                        <a href="/" rel="prev" target="_parent">
                                            <span class="icon-chevron-left"></span> Prev</a>
                                    </li>
                                    <li class="next">
                                        <a href="/" rel="next" target="_parent">
										Next <span class="icon-chevron-right"></span></a>
                                    </li>
                                </ul>
                               
                            </article>
                        </div>
                    </div>
                    <aside class="col-sm-4 sidebar">
                        <div class="widget about">
                            <img src="images/shutterstock_9833917.jpg" alt="shutterstock 9833917">
                            <h3>About Us</h3>
                            <p>Lorem ipsum dolor sit amet, nec in adipiscing purus luctus, urna pellentesque fringilla vel, non sed arcu integer, mauris ullamcorper ante ut non torquent.</p>
                        </div>
                        <div class="widget category">
                            <h3 class="sp-module-title">Catagories</h3>
                            <ul class="categories-module">
                            <?php
							$categories = get_categories();
							foreach ($categories as $category) {
							?>
								<li>
									<a href="<?= get_category_link($category->term_id) ?>"><?= $category->name  ?> <span>(<?= $category->category_count ?>)</span></a>
								</li>
							<?php
							}
							?>
                            </ul>
                        </div>
                        <div class="widget  tag-blog">
                            <h3 class="sp-module-title">Tag Cloud</h3>
                            <div class="tag-blog">
                                <ul>
                                    <li> <a href="/" target="_parent">love</a>
                                    </li>
                                    <li> <a href="/" target="_parent">Investment</a>
                                    </li>
                                    <li> <a href="/" target="_parent">2016</a>
                                    </li>
                                    <li> <a href="/" target="_parent">Science</a>
                                    </li>
                                    <li> <a href="/" target="_parent">Worldwide</a>
                                    </li>
                                    <li> <a href="/" target="_parent">Joomla!</a>
                                    </li>
                                    <li> <a href="/" target="_parent">Career</a>
                                    </li>
                                    <li><a href="/" target="_parent">Board</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget gallery">
                            <h3 class="sp-module-title">Flickr Photos</h3>
                            <div class="sp-flickr-gallery ">
                                <div class="sp-flickr-gallery-content">
                                    <ul class="sp-flickr-gallery" data-id="83573762@N05" data-count="0" data-setid="72157663666458186">
                                        <li><a target="_blank" href="http://www.flickr.com/photos/rusafy/24486097205/in/set-72157663666458186/" title="12"><span class="flickr-gallery-wrap"><img class="img-responsive" alt="12" src="http://farm2.staticflickr.com/1712/24486097205_356793e3e0_s.jpg"></span></a></li>
                                        <li><a target="_blank" href="http://www.flickr.com/photos/rusafy/24459895706/in/set-72157663666458186/" title="23"><span class="flickr-gallery-wrap"><img class="img-responsive" alt="23" src="http://farm2.staticflickr.com/1512/24459895706_923897c084_s.jpg"></span></a></li>
                                        <li><a target="_blank" href="http://www.flickr.com/photos/rusafy/24403696971/in/set-72157663666458186/" title="1"><span class="flickr-gallery-wrap"><img class="img-responsive" alt="1" src="http://farm2.staticflickr.com/1524/24403696971_45bd9fb9c8_s.jpg"></span></a></li>
                                        <li><a target="_blank" href="http://www.flickr.com/photos/rusafy/24403694221/in/set-72157663666458186/" title="martin-soto-climent-unknown-feldschlösschen"><span class="flickr-gallery-wrap"><img class="img-responsive" alt="martin-soto-climent-unknown-feldschlösschen" src="http://farm2.staticflickr.com/1592/24403694221_7087f01892_s.jpg"></span></a></li>
                                        <li><a target="_blank" href="http://www.flickr.com/photos/rusafy/24377806572/in/set-72157663666458186/" title="20110927064108-Web-Rachel-Install-1"><span class="flickr-gallery-wrap"><img class="img-responsive" alt="20110927064108-Web-Rachel-Install-1" src="http://farm2.staticflickr.com/1491/24377806572_fa803e71c1_s.jpg"></span></a></li>
                                        <li><a target="_blank" href="http://www.flickr.com/photos/rusafy/24377806372/in/set-72157663666458186/" title="cd188c0f23f595a6ee643b4491276c59-1110x730"><span class="flickr-gallery-wrap"><img class="img-responsive" alt="cd188c0f23f595a6ee643b4491276c59-1110x730" src="http://farm2.staticflickr.com/1685/24377806372_2ef47198ac_s.jpg"></span></a></li>
                                        <li><a target="_blank" href="http://www.flickr.com/photos/rusafy/24190548210/in/set-72157663666458186/" title="7"><span class="flickr-gallery-wrap"><img class="img-responsive" alt="7" src="http://farm2.staticflickr.com/1641/24190548210_a0791ea8bf_s.jpg"></span></a></li>
                                        <li><a target="_blank" href="http://www.flickr.com/photos/rusafy/24190546860/in/set-72157663666458186/" title="21"><span class="flickr-gallery-wrap"><img class="img-responsive" alt="21" src="http://farm2.staticflickr.com/1579/24190546860_5c5c7b8e11_s.jpg"></span></a></li>
                                        <li><a target="_blank" href="http://www.flickr.com/photos/rusafy/23859298223/in/set-72157663666458186/" title="7503d1887f03d27fef899bd2237c3e21-1110x730"><span class="flickr-gallery-wrap"><img class="img-responsive" alt="7503d1887f03d27fef899bd2237c3e21-1110x730" src="http://farm2.staticflickr.com/1456/23859298223_f9b1d94b7c_s.jpg"></span></a></li>
                                        <li><a target="_blank" href="http://www.flickr.com/photos/rusafy/23857912114/in/set-72157663666458186/" title="9"><span class="flickr-gallery-wrap"><img class="img-responsive" alt="9" src="http://farm2.staticflickr.com/1597/23857912114_cc527ab639_s.jpg"></span></a></li>
                                        <li><a target="_blank" href="http://www.flickr.com/photos/rusafy/22931533723/in/set-72157663666458186/" title="7131569295_b7d4753e1a_h"><span class="flickr-gallery-wrap"><img class="img-responsive" alt="7131569295_b7d4753e1a_h" src="http://farm1.staticflickr.com/595/22931533723_b6421c9823_s.jpg"></span></a></li>
                                        <li><a target="_blank" href="http://www.flickr.com/photos/rusafy/22931530843/in/set-72157663666458186/" title="shutterstock_8160115"><span class="flickr-gallery-wrap"><img class="img-responsive" alt="shutterstock_8160115" src="http://farm6.staticflickr.com/5772/22931530843_78792e2d2a_s.jpg"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget post">
                            <h3 class="sp-module-title">Latest Post</h3>
                            <div class="latestnews">
                                <div class="recent-post">
                                    <a href="/" target="_parent">Achived trophy on Industrial managment.</a>
                                    <span class="icon-calendar"></span>20 April 2016
                                </div>
                            </div>
                            <div class="latestnews">
                                <div class="recent-post">
                                    <a href="/" target="_parent">Your Time Work For Your Company</a>
                                    <span class="icon-calendar"></span>20 April 2016
                                </div>
                            </div>
                            <div class="latestnews">
                                <div class="recent-post">
                                    <a href="/" target="_parent">Experience and Resources By Your Side.</a>
                                    <span class="icon-calendar"></span>20 April 2016
                                </div>
                            </div>
                            <div class="latestnews">
                                <div class="recent-post">
                                    <a href="/" target="_parent">You Have Roots Here Now</a>
                                    <span class="icon-calendar"></span>20 April 2016
                                </div>
                            </div>
                            <div class="latestnews">
                                <div class="recent-post">
                                    <a href="/" target="_parent">Future. Dreams Com True.</a>
                                    <span class="icon-calendar"></span>20 April 2016
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <?php get_footer() ?>