  <!--Banner-->
      <section id="banner">
        <div class="container-fluid">
          <div class="row">
            
            <!-- START REVOLUTION SLIDER 4.6.5 b1 fullwidth mode -->
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
              "
            >
              <div
                id="rev_slider_1_1"
                class="rev_slider fullwidthabanner"
                style="display: none; max-height: 550px; height: 550px"
              >
                <ul>
                  <!-- SLIDE  1-->
                  <li
                    data-transition="random"
                    data-slotamount="7"
                    data-masterspeed="300"
                    data-thumb="images/portfolio-6-1140x760.jpg"
                    data-saveperformance="off"
                    data-title="Slide"
                  >
                    <!-- MAIN IMAGE -->
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/images/slider-1.jpg"
                      alt="portfolio-6-1140x760"
                      data-bgposition="center center"
                      data-bgfit="contain"
                      data-bgrepeat="no-repeat"
                    />
                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div
                      class="tp-caption large_bold_black sft tp-resizeme"
                      data-x="86"
                      data-y="158"
                      data-speed="300"
                      data-start="500"
                      data-easing="Power3.easeInOut"
                      data-splitin="none"
                      data-splitout="none"
                      data-elementdelay="0.1"
                      data-endelementdelay="0.1"
                      data-endspeed="300"
                      style="
                        z-index: 5;
                        max-width: auto;
                        max-height: auto;
                        white-space: nowrap;
                      "
                    >
                      Welcome to Construct Press
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div
                      class="tp-caption medium_text sfb tp-resizeme"
                      data-x="88"
                      data-y="312"
                      data-speed="300"
                      data-start="500"
                      data-easing="Sine.easeInOut"
                      data-splitin="none"
                      data-splitout="none"
                      data-elementdelay="0.1"
                      data-endelementdelay="0.1"
                      data-endspeed="300"
                      style="
                        z-index: 6;
                        max-width: auto;
                        max-height: auto;
                        white-space: nowrap;
                      "
                    >
                      <a href="#" class="sppb-btn sppb-btn-default sppb-btn-"
                        >Read More</a
                      >
                    </div>
                  </li>
                  <!-- SLIDE  2-->
                  <li
                    data-transition="random"
                    data-slotamount="7"
                    data-masterspeed="300"
                    data-thumb="images/fullscreen3.jpg"
                    data-saveperformance="off"
                    data-title="Slide"
                  >
                    <!-- MAIN IMAGE -->
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/images/slider-2.jpg"
                      alt="fullscreen3"
                      data-bgposition="center center"
                      data-bgfit="contain"
                      data-bgrepeat="no-repeat"
                    />
                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div
                      class="tp-caption medium_text tp-fade tp-resizeme"
                      data-x="88"
                      data-y="337"
                      data-speed="300"
                      data-start="500"
                      data-easing="Power3.easeInOut"
                      data-splitin="none"
                      data-splitout="none"
                      data-elementdelay="0.1"
                      data-endelementdelay="0.1"
                      data-endspeed="300"
                      style="
                        z-index: 5;
                        max-width: auto;
                        max-height: auto;
                        white-space: nowrap;
                      "
                    >
                      <a href="#" class="sppb-btn sppb-btn-default sppb-btn-"
                        >Read More</a
                      >
                    </div>
                  </li>
                  <!-- SLIDE  3-->
                  <li
                    data-transition="random"
                    data-slotamount="7"
                    data-masterspeed="300"
                    data-thumb="images/shutterstock_9053485.jpg"
                    data-saveperformance="off"
                    data-title="Slide"
                  >
                    <!-- MAIN IMAGE -->
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/images/slider-3.webp"
                      alt="shutterstock_9053485"
                      data-bgposition="center center"
                      data-bgfit="contain"
                      data-bgrepeat="no-repeat"
                    />
                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div
                      class="tp-caption medium_text tp-fade tp-resizeme"
                      data-x="88"
                      data-y="337"
                      data-speed="300"
                      data-start="500"
                      data-easing="Power3.easeInOut"
                      data-splitin="none"
                      data-splitout="none"
                      data-elementdelay="0.1"
                      data-endelementdelay="0.1"
                      data-endspeed="300"
                      style="
                        z-index: 5;
                        max-width: auto;
                        max-height: auto;
                        white-space: nowrap;
                      "
                    >
                      <a href="#" class="sppb-btn sppb-btn-default sppb-btn-"
                        >Read More</a
                      >
                    </div>
                  </li>
                </ul>
                <div class="tp-bannertimer"></div>
              </div>
              <script type="text/javascript">
                /******************************************
                                                                                                                                                                                                                                                                                                                                                                                                                                                                             -  PREPARE PLACEHOLDER FOR SLIDER  -
                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ******************************************/

                var setREVStartSize = function () {
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
                        jQuery.each(offcontainers, function (e, t) {
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

                tpj(document).ready(function () {
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