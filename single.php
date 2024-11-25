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