<?php get_header() ?>

<div class="container content">
     <div class="row">
          <?php
          if (have_posts())
               while (have_posts()) {
                    the_post();
          ?>
               <!--Breadcrumb-->
               <section id="breadcrumb" class="space">
                    <div class="container">
                         <div class="row">
                              <div class="col-sm-6 breadcrumb-block">
                                   <h2>services</h2>
                              </div>
                              <div class="col-sm-6 breadcrumb-block text-right">
                                   <ol class="breadcrumb">
                                        <li><span>You are here:</span><a href="index.html">Home</a></li>
                                        <li class="active">servicesssss</li>
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
                                             <li><a href="#" class="active">wooden work</a> </li>
                                             <li><a href="#">metal roofing</a> </li>
                                             <li><a href="#">architechture & design</a> </li>
                                             <li><a href="#">general construction</a> </li>
                                             <li><a href="#">hardwood flooring</a> </li>
                                             <li><a href="#">house remodeling</a> </li>
                                        </ul>
                                   </div>
                                   <div class="widget">
                                        <h3>Brochures</h3>
                                        <ul class="download-links">
                                             <li><a href="#" class="sppb-btn sppb-btn-success sppb-btn-lg sppb-btn-block "><i class="fa fa-file-pdf-o"></i>Download PDF</a> </li>
                                             <li><a href="#" class="sppb-btn sppb-btn-success sppb-btn-lg sppb-btn-block "><i class="fa fa-file-word-o"></i>Download DOC</a> </li>
                                             <li><a href="#" class="sppb-btn sppb-btn-success sppb-btn-lg sppb-btn-block "><i class="fa fa-file-text-o"></i>Download txt</a> </li>
                                        </ul>
                                   </div>
                                   <div class="widget">
                                        <h3>Our Office</h3>
                                        <ul class="address">
                                             <li><i class="fa fa-map-marker"></i> 14 Tottenham Road, London, England.</li>
                                             <li><a href="tel:10266668888"><i class="fa fa-phone"></i> (102) 6666 8888</a> </li>
                                             <li><a href="mailto:info@rusafy.com"><i class="fa fa-envelope"></i> info@rusafy.com</a> </li>
                                             <li><i class="fa fa-fax"></i> (102) 8888 9999</li>
                                             <li><i class="fa fa-clock-o"></i> Mon - Sat: 9:00 - 18:00</li>
                                        </ul>
                                   </div>
                              </aside>
                              <div class="col-sm-9 ss-block">
                                   <div class="col-sm-12 no-padding slider">
                                        <div id="slider" class="flexslider">
                                             <ul class="slides">
                                                  <li class="flax-item flex-active-slide">
                                                       <img src="images/bigstock-Roof-Sheet-69851404-1024x678.jpg" alt="Carousel Item Title" />
                                                  </li>
                                                  <li class="flax-item ">
                                                       <img src="images/3.jpg" alt="Carousel Item Title" />
                                                  </li>
                                                  <li class="flax-item ">
                                                       <img src="images/bigstock-Roofer-builder-worker-installi-55264412.jpg" alt="Carousel Item Title" />
                                                  </li>
                                                  <li class="flax-item ">
                                                       <img src="images/bigstock-The-Roofer-Behind-Work-On-Repa-21717149.jpg" alt="Carousel Item Title" />
                                                  </li>
                                                  <li class="flax-item ">
                                                       <img src="images/construction-roofer-carpenter-50240201.jpg" alt="Carousel Item Title" />
                                                  </li>
                                                  <li class="flax-item ">
                                                       <img src="images/5744351061_0ee7664c9e_b.jpg" alt="Carousel Item Title" />
                                                  </li>
                                                  <li class="flax-item ">
                                                       <img src="images/construction.jpg" alt="Carousel Item Title" />
                                                  </li>
                                                  <li class="flax-item ">
                                                       <img src="images/Cutting_steel_rods_with_a_Bench_grinder.jpg" alt="Carousel Item Title" />
                                                  </li>
                                                  <li class="flax-item ">
                                                       <img src="images/construction.jpg" alt="Carousel Item Title" />
                                                  </li>
                                             </ul>
                                        </div>
                                        <div id="carousel" class="flexslider">
                                             <ul class="slides">
                                                  <li class="flax-thumb flex-active-slide">
                                                       <img src="images/bigstock-Roof-Sheet-69851404-1024x678.jpg" alt="Carousel Item Title" />
                                                  </li>
                                                  <li class="flax-thumb ">
                                                       <img src="images/3.jpg" alt="Carousel Item Title" />
                                                  </li>
                                                  <li class="flax-thumb ">
                                                       <img src="images/bigstock-Roofer-builder-worker-installi-55264412.jpg" alt="Carousel Item Title" />
                                                  </li>
                                                  <li class="flax-thumb ">
                                                       <img src="images/bigstock-The-Roofer-Behind-Work-On-Repa-21717149.jpg" alt="Carousel Item Title" />
                                                  </li>
                                                  <li class="flax-thumb ">
                                                       <img src="images/construction-roofer-carpenter-50240201.jpg" alt="Carousel Item Title" />
                                                  </li>
                                                  <li class="flax-thumb "> <img src="images/5744351061_0ee7664c9e_b.jpg" alt="Carousel Item Title" /> </li>
                                                  <li class="flax-thumb ">
                                                       <img src="images/construction.jpg" alt="Carousel Item Title" />
                                                  </li>
                                                  <li class="flax-thumb ">
                                                       <img src="images/Cutting_steel_rods_with_a_Bench_grinder.jpg" alt="Carousel Item Title" />
                                                  </li>
                                                  <li class="flax-thumb ">
                                                       <img src="images/construction.jpg" alt="Carousel Item Title" />
                                                  </li>
                                             </ul>
                                        </div>
                                   </div>
                                   <div class="col-sm-12 no-padding service-detail">
                                        <div class="no-padding col-sm-12 margin-top-50">
                                             <h2>Client Centric Design</h2>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum. Pellentesque ultrices ultrices sapien, nec tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam scelerisque tristique dolor vitae tincidunt. Aenean quis massa uada mi elementum elementum. Nec sapien convallis vulputate rhoncus vel dui.</p>
                                        </div>
                                        <div class="col-sm-6 padding-right margin-top-50">
                                             <h3>Plumbing</h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum. Pellentesque ultrices ultrices sapien, nec tincidunt nunc posuere ut.</p>
                                        </div>
                                        <div class="col-sm-6 padding-left margin-top-50">
                                             <h3>Plumbing</h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum. Pellentesque ultrices ultrices sapien, nec tincidunt nunc posuere ut.</p>
                                        </div>
                                        <div class="col-sm-6 padding-right margin-top-50">
                                             <h3>Construction Management</h3>
                                             <div class="panel-group" id="accordion">
                                                  <div class="panel panel-default">
                                                       <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><i class="fa fa-check"></i> life accusamus terry</a>
                                                            </h4>
                                                       </div>
                                                       <div id="collapse1" class="panel-collapse collapse in">
                                                            <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</div>
                                                       </div>
                                                  </div>
                                                  <div class="panel panel-default">
                                                       <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                 <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapse2"><i class="fa fa-check"></i> Food truck quinoa</a>
                                                            </h4>
                                                       </div>
                                                       <div id="collapse2" class="panel-collapse collapse">
                                                            <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</div>
                                                       </div>
                                                  </div>
                                                  <div class="panel panel-default">
                                                       <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                 <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapse3"><i class="fa fa-check"></i> wolf moon officia aute</a>
                                                            </h4>
                                                       </div>
                                                       <div id="collapse3" class="panel-collapse collapse">
                                                            <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch..</div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-sm-6 padding-left margin-top-103">
                                             <img src="images/bigstock-Roof-Sheet-69851404-1024x678.jpg" alt="Services">
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </section>


          <?php
               }
          ?>
     </div>
</div>

<?php get_footer() ?>