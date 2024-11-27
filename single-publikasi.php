   <!--Breadcrumb-->
   <?php get_header() ?>
	<!--Breadcrumb-->
	<?php 
		if(have_posts())
			while(have_posts()){
				the_post();
		?>
        <!--Blog-->
        <section id="blog" class="space-100 single-blog">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 blog-base">
                        <div class="col-sm-12 no-padding">
                            <article class="col-sm-12 no-padding blog-block">
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
                                    
                                    <?php if(get_field('file_publikasi', get_the_ID())): ?>
                                    <iframe src="<?= get_field('file_publikasi', get_the_ID())?>" frameborder="0" width="100%" height="450px"></iframe>
                                    <?php endif ?>
                                </div>
                                <?php
		}
			?>
                                <!-- <ul class="tags">
                                    <li><span>Tags: </span><a href="/" class="label label-info" rel="tag" target="_parent">love</a></li>
                                    <li><a href="/" class="label label-info" rel="tag" target="_parent">Creative</a></li>
                                    <li><a href="/" class="label label-info" rel="tag" target="_parent">Board</a></li>
                                    <li><a href="/" class="label label-info" rel="tag" target="_parent">Career</a></li>
                                </ul> -->
                               
                               
                            </article>
                        </div>
                    </div>
                    <aside class="col-sm-4 sidebar">
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
                        <div class="widget post">
                            <h3 class="sp-module-title">Latest Post</h3>
                            <?php
                            $recent_args = array(
                                "posts_per_page" => 5,
                                "orderby"        => "date",
                                "order"          => "DESC"
                            );      

                            $recent_posts = new WP_Query( $recent_args );
                            if ( $recent_posts -> have_posts() ) :
                                while ( $recent_posts -> have_posts() ) :
                            
                                $recent_posts -> the_post();
                            ?>
                            <div class="latestnews">
                                <div class="recent-post">
                                    <a href="<?php the_permalink() ?>" target="_parent"><?php the_title() ?></a>
                                    <span class="icon-calendar"></span> <?= get_the_date('l, j F Y') ?>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_postdata(); endif; ?>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <?php get_footer() ?>