<?php
get_header();
setPostViews(get_the_ID());
$termx = wp_get_post_terms($post->ID, 'loai-san-pham', array("fields" => "all","orderby"=>"parent"));
?>

<div class="main products">
	<div class="product-detail">
			
		<?php
            $post_thumbnail_id  = get_post_thumbnail_id($post->ID);
            $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
        ?>
                    				
			<div class="product-img">
				<div class="clearfix thumbs-img">
					<a href="<?php echo $post_thumbnail_url; ?>" class="jqzoom" rel='gal1'  title="<?php echo $post->post_title; ?>" >
						<?php
							the_post_thumbnail( 'medium' );
						?>
					</a>
				</div>	
					
			</div>
			<div class="summary-products">
                <div style="width:348px;float:right;left: 0; position: relative;">
                	<!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style ">
                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                    <a class="addthis_button_tweet"></a>
                    <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                    <a class="addthis_counter addthis_pill_style"></a>
                    </div>
                    <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e8d0ace4975718e"></script>
                    <!-- AddThis Button END -->
                </div>
			</div>
			<div class="desc clearBoth document">
				<h3>Thông tin sản phẩm</h3>
				<?php echo $post->post_content; ?>
			</div>	
			<!--<div class="product-other">
				<h3>Sản phẩm cùng loại</h3>
				<div class="lst-pro">
				<?php
					$args = array( 
						'post_type'         => 'san-pham',
						'loai-san-pham'     => $termx[0]->slug,
						'orderby'           => 'modified',
						'order'             => 'ASC',
						'posts_per_page'    => 9,                           
					
					);
					query_posts($args);
					while(have_posts()): the_post();
						$post_thumbnail_id  = get_post_thumbnail_id();
						 $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
				?>
				<div class="item">                        
					<a href="<?php the_permalink();?>">
					   <img src="<?php echo $post_thumbnail_url; ?>" alt="<?php the_title();?>"/>
					</a>
					<h3 class="name-pro"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
					<span class="price"><?php $price = get_field( "price", $post->ID ); if($price != '') echo $price." VNĐ"; else echo 'Liên hệ : 0904779039'; ?></span>
				</div>
				<?php
					endwhile;                        
					wp_reset_postdata();
				?>         
				</div>						
			</div>-->
		
	</div>
</div>

<?php
get_footer();
?>    