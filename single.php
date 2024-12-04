   <!--Breadcrumb-->
   <?php get_header() ?>

	<!--Breadcrumb-->
	<?php 
		if(have_posts())
			while(have_posts()){
				the_post();
		?>
        <!--Blog-->
        <section id="blog" class="space single-blog">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 blog-base">
                        <div class="col-sm-12 no-padding">
                            <article class="col-sm-12 no-padding blog-block">
                            <?php if (get_the_post_thumbnail_url()): ?>
							<img src="<?= get_the_post_thumbnail_url() ?>" width="100%" height="auto">
						<?php endif ?>
                                <div class="blog-content">
                                    <!-- <div class="icon pull-left">
                                        <i class="fa fa-thumb-tack"></i>
                                    </div> -->
                                    <div class="blog-info">
                                        <h1 style="margin-top: -20px;margin-bottom:15px"><a href="#"><?php the_title() ?></a> </h1>
                                        <ul class="meta" style="margin-left:-7px">
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
                                    </div>
                                    <p><?php the_content() ?></p>
                                    
                                </div>
                                <?php
		}
			?>                               
                               
                            </article>
                        </div>
                    </div>
                    <aside class="col-sm-4 sidebar">
                        <div class="widget category">
                            <h3 class="sp-module-title">Categories</h3>
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