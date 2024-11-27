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
                    </article>
                </div>
            </div>
        </section>
        <?php get_footer() ?>