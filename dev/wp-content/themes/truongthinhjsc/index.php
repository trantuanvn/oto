<?php get_header(); ?>

  <div class="row-fluid">
     <div class="span12">
        <div class="moduletable">
           <div id="vmTouchSlider94" class="ordasoft">
              <div class="vehicleSlider  horizontal">
                 <div class="swiper-container">
                    <span id="loaderGif"></span>
                    <div class="swiper-wrapper">
                      <?php
                        $gallery_id =1;
                        $nng_object = new nggdb(); 
                        $gallery_images = $nng_object->get_gallery($gallery_id);  
                      ?>
                      <?php $i=1; foreach($gallery_images as $key=>$val):?>
                       <div class="swiper-slide">
                          <img id="slideImgVm" src="<?php echo $val->imageURL ?>" alt="img"/>
                       </div>
                      <?php  $i++;  endforeach;?>
                    </div>
                 </div>
              </div>
              <div class="swiperPagination"></div>
           </div>
           		
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
                    .block_list_in img { height: 280px;}
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
                        <div class="block_list_in <?php echo $last; ?>">         
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
                                   <!--<?php $price = get_field( "price", $post->ID ); echo number_format($price)." VNĐ"; ?>-->
                                  Liên hệ
                                </p>
                             </div>
                             <div class="block_list_hits">
                                <p>Xem: <?php echo getPostViews(get_the_ID()); ?></p>
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
        <div class="span12">
           <div class="Local_about">
              <div class="moduletable">
                 <h3>Sản Phẩm nổi bật</h3>
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
                    .block_list_in img { height: 280px;}
                    .block_list_model {}
                    .priceAndHits {}
                    .block_list_price {}
                    .block_list_hits {}
                 </style>
                 <div class="vehiclemanager_ ">
                    <div class="block_list">
                      <?php
  
                        $args = array( 
                          'post_type'         => 'san-pham-hot',
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
                        <div class="block_list_in <?php echo $last; ?>">         
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
                                   <!--<?php $price = get_field( "price", $post->ID ); echo number_format($price)." VNĐ"; ?>-->
                                  Giá: Liên hệ
                                </p>
                             </div>
                             <div class="block_list_hits">
                                <p>Xem: <?php echo getPostViews(get_the_ID()); ?></p>
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
        <div class="span12">
           <div class="Local_about">
              <div class="moduletable">
                 <h3>Sản Phẩm tiêu biểu</h3>
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
                    .block_list_in img { height: 280px;}
                    .block_list_model {}
                    .priceAndHits {}
                    .block_list_price {}
                    .block_list_hits {}
                 </style>
                 <div class="vehiclemanager_ ">
                    <div class="block_list">
                      <?php
  
                        $args = array( 
                          'post_type'         => 'san-pham-features',
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
                        <div class="block_list_in <?php echo $last; ?>">         
                          <div class="block_list_img">
                            <a href="<?php the_field('link_product'); ?>" style="height:280px">
                              <img src="<?php echo $post_thumbnail_url; ?>" alt="<?php the_title();?>"/>
                            </a>
                            <div class="newst_img">
                              <a href="<?php the_permalink();?>">
                                <i class='fa fa-search'></i>
                              </a>
                            </div>
                          </div>
                          <div class="block_list_model">
                            <a href="<?php the_field('link_product'); ?>"><?php echo the_title(); ?></a>
                          </div>
                          <div class="priceAndHits">
                             <div class="block_list_price">
                                <p>
                                   <!--<?php $price = get_field( "price", $post->ID ); echo number_format($price)." VNĐ"; ?>-->
                                  Giá: Liên hệ
                                </p>
                             </div>
                             <div class="block_list_hits">
                                <p>Xem: <?php echo getPostViews(get_the_ID()); ?></p>
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
           <div class="about-block-home">
              <h3>Giới thiệu công ty</h3>
              <div class="custom">
              <?php 
                query_posts(array('cat' =>6, 'posts_per_page' =>3 , 'order' => DESC, 'paged' => get_query_var('paged') ));
                $cnt = 0;
                while (have_posts()) : the_post();
                $cnt++;
              ?>
                 <img src="<?php echo $post_thumbnail_url; ?>" alt="" />
                 <div class="first">
                    <?php the_field('tom_tat'); ?>
                    <a href="<?php the_field('link'); ?>" class="btn btn-primary">Chi tiết</a>
                 </div>
              <?php endwhile; ?>
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
                 <div class="map-block">
                    <?php dynamic_sidebar( 'home_right_bottom' ); ?>
                 </div>
                 <br>
              </div>
           </div>
        </div>
     </div>
  </div>
<?php get_footer(); ?>
