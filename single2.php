<?php get_header() ?>
<!--Breadcrumb-->
<?php
if (have_posts())
	while (have_posts()) {
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
						<li class="active">Berita</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<!--Services-->
	<section id="single-service" class="space">
		<div class="container">
			<div class="row">
				<aside class="col-sm-3">
					<div class="widget">
						<ul class="service">
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

				</aside>
				<div class="col-sm-9 ss-block">

					<div class="col-sm-12 no-padding service-detail">
						<h2><?php the_title() ?></h2>
						<i class="fa fa-user"></i> <?php the_author() ?>
						|
						<i><i class="fa fa-calendar-o"></i> <?= get_the_date('l, j F Y') ?></i> | <i class="fa fa-folder-open-o"></i> <?php
																												$categories = get_the_category();
																												if (!empty($categories)) {

																													foreach ($categories as $category) {
																														echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a> ';
																													}
																												}
																												?>

						<?php if (get_the_post_thumbnail_url()): ?>
							<img src="<?= get_the_post_thumbnail_url() ?>" width="100%" height="auto">
						<?php endif ?>
						<div class="no-padding col-sm-12 margin-top-10">

							<p><?php the_content() ?></p>
						</div>


					</div>
				</div>
			<?php
		}
			?>
			</div>
		</div>
	</section>
	<?php get_footer() ?>