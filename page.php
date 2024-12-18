<?php get_header() ?>

<style>
.wp-block-embed__wrapper {
     text-align:center;
}

</style>

<?php
if (have_posts())
     while (have_posts()) {
          the_post();
?>
     <!--Breadcrumb-->
     <section id="breadcrumb" class="space">
          <div class="container">
               <div class="row">
                    <div class="col-sm-12">
                         <h2><?= get_the_title()?></h2>
                    </div>
               </div>
          </div>
     </section>
     <!--Services-->
     <section id="single-service" class="space">
          <div class="container">
               <div class="row">
                    <div class="col-sm-12">
                         <?php the_content() ?>
                    </div>
               </div>
          </div>
     </section>


<?php
     }
?>

<?php get_footer() ?>