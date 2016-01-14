<?php get_header(); ?>
  <div class="row-fluid">
     <div class="span12">
        <div class="moduletable">
           <div id="vmTouchSlider94" class="ordasoft">
              <div class="vehicleSlider  horizontal" style="max-width: 1350px;">
                 <span class="arrow-left"></span>
                 <span class="arrow-right"></span>
                 <div class="swiper-container" style="height: 500px;">
                    <span id="loaderGif" style="display:block;"></span>
                    <div class="swiper-wrapper" style="visibility:hidden;">
                       <div class="swiper-slide">
                          <img id="slideImgVm" src="http://ordasvit.com/vehiclemanager16/components/com_vehiclemanager/photos/4E324BEF-AC55-4FDD-AEE2-B646855F2044_Ford_500_1350.jpg" alt="img"/>
                          <div id="captionSlide">
                             <div class="slide-title">FORD NEW KUGA</div>
                             <div class="slide-button"><a href="http://ordasvit.com/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/46/Smart/2/ford-new-kuga?Itemid=155"  class="btn btn-primary">Read More</a></div>
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <img id="slideImgVm" src="http://ordasvit.com/vehiclemanager16/components/com_vehiclemanager/photos/543EEB61-3F53-4839-1ED3-1795C99B3C7D_chevrolet_500_1350.jpg" alt="img"/>
                          <div id="captionSlide">
                             <div class="slide-title">Chevrolet Comaro</div>
                             <div class="slide-button"><a href="http://ordasvit.com/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/49/Sport/8/chevrolet-comaro?Itemid=155"  class="btn btn-primary">Read More</a></div>
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <img id="slideImgVm" src="http://ordasvit.com/vehiclemanager16/components/com_vehiclemanager/photos/5C43905F-7DBD-0285-060A-3E3C33F1EA31_Mer_500_1350.jpg" alt="img"/>
                          <div id="captionSlide">
                             <div class="slide-title">Mercedes-Benz S Class</div>
                             <div class="slide-button"><a href="http://ordasvit.com/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/50/Sale/9/mercedes-benz-s-class?Itemid=155"  class="btn btn-primary">Read More</a></div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="swiperPagination"></div>
           </div>
           <script type="text/javascript">
              jQuery(window).load(function() {
              
                 var mySwiper94 = new Swiper('#vmTouchSlider94 .swiper-container',{
                         pagination: '#vmTouchSlider94 .swiperPagination',
                         loop: true,
                   mode:'horizontal',
                   speed:500, 
                   autoplay:3500,
                   autoResize: true,
                   DOMAnimation: true,
                   preventLinks: true,
                   grabCursor: false,
                   createPagination: true,
                   paginationClickable: true
                 });
              
                       jQuery('#vmTouchSlider94 .arrow-left').on('click', function() {
                     mySwiper94.swipePrev();
                   });
                   jQuery('#vmTouchSlider94 .arrow-right').on('click', function() {
                     mySwiper94.swipeNext();
                   });
                 
                 setTimeout(
                   function(){
                     jQuery(".swiper-wrapper").css("visibility", "visible");
                     jQuery("#loaderGif").css("display", "none");
                   }, 1400);
              
                   function vmSliderResize() {
                       var heightImg = 0;
                     jQuery("#vmTouchSlider94 .swiper-slide img#slideImgVm").css('height', 'auto');
                       var vmImgHeight = jQuery('#vmTouchSlider94 .swiper-slide img#slideImgVm').height();
                     jQuery("#vmTouchSlider94 .swiper-container").height(vmImgHeight);
                     jQuery("#vmTouchSlider94 .vehicleSlider").height(vmImgHeight);
                   } 
                     // vmSliderResize();
              
                   jQuery(window).resize(function() { 
                     vmSliderResize(); 
                   });
              
              });
              
           </script>		
        </div>
     </div>
  </div>
  <div id="wrapper" class="container">
     <div class="row-fluid">
        <div class="span12">
           <div class="Local_about">
              <div class="moduletable">
                 <h3>Sản Phẩm mới</h3>
                 <style type="text/css">
                    .vehiclemanager_ {
                    overflow: hidden;
                    }
                    .block_list_in {
                    margin: 10px;
                    padding: 10px;
                    overflow: hidden;
                    border: 1px solid #D6D6D6;
                    /* width:200px;
                    height: 250px;*/
                    }
                    .block_list_in a {}
                    .block_list_img {
                    text-align: center;
                    margin-bottom: 10px;
                    }
                    .block_list_in img {}
                    .block_list_model {}
                    .priceAndHits {}
                    .block_list_price {}
                    .block_list_hits {}
                 </style>
                 <div class="vehiclemanager_ ">
                    <div class="block_list">
                      <?php
  
                        $args = array( 
                          'post_type'         => 'san-pham',
                          'orderby'           => 'modified',
                          'order'             => 'ASC',
                          'posts_per_page'    => 35,
                          'paged'             => $paged,

                        );
                        $a = query_posts($args);
                      ?>
                      <?php
                        $cnt = 0 ;
                        while(have_posts()): the_post();
                          $cnt++;
                          if($cnt == 3){
                            $last = "last";
                            $cnt = 0;
                          }else{
                            $last = "";
                          }
                          $post_thumbnail_id  = get_post_thumbnail_id();
                          $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );      
                          //the_ID();
                      ?>
                        <div class="block_list_in <?php echo $last; ?>" style="background:none; float:left;">         
                          <div class="block_list_img">
                            <a href="<?php the_permalink();?>" style="height:280px">
                              <img src="<?php echo $post_thumbnail_url; ?>" alt="<?php the_title();?>"/>
                            </a>
                            <div class="newst_img">
                              <a href="<?php the_permalink();?>">
                                <i class='fa fa-search'></i>
                              </a>
                            </div>
                          </div>
                          <div class="block_list_model">
                            <a href="<?php the_permalink();?>"><?php echo the_title(); ?></a>
                          </div>
                          <div class="priceAndHits">
                             <div class="block_list_price">
                                <p>
                                   <?php $price = get_field( "price", $post->ID ); echo number_format($price)." VNĐ"; ?>
                                </p>
                             </div>
                             <div class="block_list_hits">
                                <p>Hits: <?php echo getPostViews(get_the_ID()); ?></p>
                                <div class="price-shadow"></div>
                             </div>
                          </div>                          
                        </div>
                      <?php
                        endwhile;
                        wp_reset_postdata();
                      ?>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <div id="globalContent">
        <div class="row-fluid">
           <div id="contentBox" class="span12">
              <div>
                 <div id="system-message-container">
                    <div id="system-message"></div>
                 </div>
              </div>
              <div>
                 <div class="blog-featured">
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!--globalContent-->
  </div>
  <!--wrapper-->
  <div class="information_top">
     <div id="wrapper" class="container">
        <div class="span7">
           <div class="moduletable">
              <h3>Giới thiệu công ty</h3>
              <div class="custom">
                 <img src="/vehiclemanager16/images/13.jpg" alt="" />
                 <div class="first">
                    <?php the_field('tom_tat'); ?>
                    <a href="<?php the_field('link'); ?>" class="btn btn-primary">Chi tiết</a>
                 </div>
              </div>
           </div>
        </div>
        <div class="span5">
           <div class="local_mapp">
              <div class="moduletable">
                 <style>
                    #map_canvas205782391 img {
                    max-width: none !important;
                    }
                 </style>
                 <div class="map-block" style=
                    "width: 470px; height: 300px;
                    float: rigth;" >
                    <?php dynamic_sidebar( 'home_right_bottom' ); ?>
                 </div>
                 <br>
              </div>
           </div>
        </div>
     </div>
  </div>
<?php get_footer(); ?>
