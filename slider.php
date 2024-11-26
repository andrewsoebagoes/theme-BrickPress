  <!--Banner-->
  <section id="banner">
    <div class="container-fluid">
      <div class="row">

        <div
          id="rev_slider_1_1_wrapper"
          class="rev_slider_wrapper fullwidthbanner-container"
          style="
                margin: 0px auto;
                background-color: #e9e9e9;
                padding: 0px;
                margin-top: 0px;
                margin-bottom: 0px;
                max-height: 550px;
              ">
          <div
            id="rev_slider_1_1"
            class="rev_slider fullwidthabanner"
            style="display: none; max-height: 550px; height: 550px">
            <ul>
              <?php
              $args = array(
                'post_type'     =>  'post',
                'post_status'   =>  'publish',
                'posts_per_page' =>  3,
                'category_name' =>  'slider',
                'orderby'       => 'date',
                'order'         => 'DESC'
              );
              $posts = new WP_Query($args);
              if ($posts->have_posts()) {
                while ($posts->have_posts()) {
                  $posts->the_post();
              ?>
                  <li class="tp-slide" data-transition="random" data-slotamount="7" data-masterspeed="300" data-thumb="<?= get_the_post_thumbnail_url() ?>" data-saveperformance="off" data-title="Slide">
                    <!-- MAIN IMAGE -->

                    <img src="<?= get_the_post_thumbnail_url() ?>" alt="fullscreen3" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div style="text-transform: capitalize;" class="tp-caption tp-fade tp-resizeme" data-x="88" data-y="337" data-speed="300" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"><a href='<?php the_permalink() ?>' class='sppb-btn sppb-btn-default sppb-btn-'>Lihat Selengkapnya</a>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div style="background-color:rgba(0, 0, 0, 0.5);padding:5px;border-radius:5px;" class="tp-caption smalltext tp-fade tp-resizeme" data-x="86" data-y="128" data-speed="300" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">
                      <?= wp_trim_words(get_the_title(), 3) ?>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div style="background-color:rgba(0, 0, 0, 0.5);padding:5px;border-radius:5px;" class="tp-caption small_text tp-fade tp-resizeme" data-x="90" data-y="234" data-speed="300" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><?= wp_trim_words(get_the_content(), 10) ?>
                    </div>

                  </li>
              <?php
                }
                wp_reset_postdata();
              }
              ?>
            </ul>


            <div class="tp-bannertimer"></div>
          </div>
          <script type="text/javascript">
            /******************************************
                                                                                                                                                                                                                                                                                                                                                                                                                                                                             -  PREPARE PLACEHOLDER FOR SLIDER  -
                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ******************************************/

            var setREVStartSize = function() {
              var tpopt = new Object();
              tpopt.startwidth = 1200;
              tpopt.startheight = 550;
              tpopt.container = jQuery("#rev_slider_1_1");
              tpopt.fullScreen = "off";
              tpopt.forceFullWidth = "off";

              tpopt.container.closest(".rev_slider_wrapper").css({
                height: tpopt.container.height(),
              });
              tpopt.width = parseInt(tpopt.container.width(), 0);
              tpopt.height = parseInt(tpopt.container.height(), 0);
              tpopt.bw = tpopt.width / tpopt.startwidth;
              tpopt.bh = tpopt.height / tpopt.startheight;
              if (tpopt.bh > tpopt.bw) tpopt.bh = tpopt.bw;
              if (tpopt.bh < tpopt.bw) tpopt.bw = tpopt.bh;
              if (tpopt.bw < tpopt.bh) tpopt.bh = tpopt.bw;
              if (tpopt.bh > 1) {
                tpopt.bw = 1;
                tpopt.bh = 1;
              }
              if (tpopt.bw > 1) {
                tpopt.bw = 1;
                tpopt.bh = 1;
              }
              tpopt.height = Math.round(
                tpopt.startheight * (tpopt.width / tpopt.startwidth)
              );
              if (
                tpopt.height > tpopt.startheight &&
                tpopt.autoHeight != "on"
              )
                tpopt.height = tpopt.startheight;
              if (tpopt.fullScreen == "on") {
                tpopt.height = tpopt.bw * tpopt.startheight;
                var cow = tpopt.container.parent().width();
                var coh = jQuery(window).height();
                if (tpopt.fullScreenOffsetContainer != undefined) {
                  try {
                    var offcontainers =
                      tpopt.fullScreenOffsetContainer.split(",");
                    jQuery.each(offcontainers, function(e, t) {
                      coh = coh - jQuery(t).outerHeight(true);
                      if (coh < tpopt.minFullScreenHeight)
                        coh = tpopt.minFullScreenHeight;
                    });
                  } catch (e) {}
                }
                tpopt.container.parent().height(coh);
                tpopt.container.height(coh);
                tpopt.container.closest(".rev_slider_wrapper").height(coh);
                tpopt.container
                  .closest(".forcefullwidth_wrapper_tp_banner")
                  .find(".tp-fullwidth-forcer")
                  .height(coh);
                tpopt.container.css({
                  height: "100%",
                });
                tpopt.height = coh;
              } else {
                tpopt.container.height(tpopt.height);
                tpopt.container
                  .closest(".rev_slider_wrapper")
                  .height(tpopt.height);
                tpopt.container
                  .closest(".forcefullwidth_wrapper_tp_banner")
                  .find(".tp-fullwidth-forcer")
                  .height(tpopt.height);
              }
            };

            /* CALL PLACEHOLDER */
            setREVStartSize();

            var tpj = jQuery;
            tpj.noConflict();
            var revapi1;

            tpj(document).ready(function() {
              if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
              } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                  dottedOverlay: "none",
                  delay: 9000,
                  startwidth: 1200,
                  startheight: 550,
                  hideThumbs: 200,

                  thumbWidth: 100,
                  thumbHeight: 50,
                  thumbAmount: 3,

                  simplifyAll: "off",
                  navigationType: "bullet",
                  navigationArrows: "solo",
                  navigationStyle: "preview1",
                  touchenabled: "on",
                  onHoverStop: "on",
                  nextSlideOnWindowFocus: "off",

                  swipe_threshold: 75,
                  swipe_min_touches: 1,
                  drag_block_vertical: false,

                  keyboardNavigation: "off",

                  navigationHAlign: "center",
                  navigationVAlign: "bottom",
                  navigationHOffset: 0,
                  navigationVOffset: 20,

                  soloArrowLeftHalign: "left",
                  soloArrowLeftValign: "center",
                  soloArrowLeftHOffset: 20,
                  soloArrowLeftVOffset: 0,

                  soloArrowRightHalign: "right",
                  soloArrowRightValign: "center",
                  soloArrowRightHOffset: 20,
                  soloArrowRightVOffset: 0,

                  shadow: 0,
                  fullWidth: "on",
                  fullScreen: "off",

                  spinner: "spinner0",

                  stopLoop: "off",
                  stopAfterLoops: -1,
                  stopAtSlide: -1,

                  shuffle: "off",

                  autoHeight: "off",
                  forceFullWidth: "off",

                  hideThumbsOnMobile: "off",
                  hideNavDelayOnMobile: 1500,
                  hideBulletsOnMobile: "off",
                  hideArrowsOnMobile: "off",
                  hideThumbsUnderResolution: 0,

                  hideSliderAtLimit: 0,
                  hideCaptionAtLimit: 0,
                  hideAllCaptionAtLilmit: 0,
                  startWithSlide: 0,
                  isJoomla: true,
                });
              }
            }); /*ready*/
          </script>
        </div>
        <!-- END REVOLUTION SLIDER -->
      </div>
    </div>
  </section>