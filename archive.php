<?php get_header() ?>
<style>
a.page-numbers {
    padding: 10px;
    border: 1px solid;
}

span.page-numbers.current, a.page-numbers:hover {
    padding: 10px;
    order: 1px solid;
    background-color:#036606;
    color: #FFF;
}
</style>
<!--Breadcrumb-->
<section id="breadcrumb" class="space">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 breadcrumb-block">
                <h2>
                    <?php
                    if (is_category()) {
                        // Tampilkan nama kategori
                        single_cat_title();
                    } else {
                        // Teks default jika bukan halaman kategori
                        echo 'Berita';
                    }
                    ?>
                </h2>
            </div>
        </div>
    </div>
</section>
<!--Blog-->
<section id="blog" class="space">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-base">
                <div class="col-sm-12 no-padding">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            ?>
                            <article class="col-sm-12 no-padding blog-block">
                          
                                <?php if (get_the_post_thumbnail_url()): ?>
                                    <img src="<?= get_the_post_thumbnail_url() ?>" width="100%" height="auto">
                                <?php endif ?>
                                <div class="blog-content">
                                    <!-- <div class="icon pull-left">
                                        <i class="fa fa-thumb-tack"></i>
                                    </div> -->
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
                                                <i class="fa fa-calendar-o"></i> <?= get_the_date('j F, Y') ?>
                                            </li>
                                        </ul>
                                        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a> </h2>
                                    </div>
                                    <p><?= wp_trim_words(get_the_content(), 50) ?></p>
                                    <a href="<?php the_permalink() ?>" class="btn btn-default readmore">Lihat Selengkapnya...</a>
                                </div>
                                </article>
                                <?php
                        }
                        wp_reset_postdata();
                    }
                    ?>
                </div>

                <div class="col-sm-12 no-padding">
                    <ul class="pagination">
                        <?php
                        the_posts_pagination(array(
                            'mid_size' => 2,
                            'prev_text' => __('&laquo; Sebelumnya', 'textdomain'),
                            'next_text' => __('Berikutnya &raquo;', 'textdomain'),
                        ));
                        ?>
                    </ul>
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
                                <a href="<?= get_category_link($category->term_id) ?>"> <span class="ti-arrow-right"></span> <?= $category->name  ?> <span>(<?= $category->category_count ?>)</span></a>
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