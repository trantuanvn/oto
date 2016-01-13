<?php
get_header();
$term   = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ));
$paged  = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array( 
    'post_type'         => 'san-pham',
    'loai-san-pham'     => $term->slug,
    'orderby'           => 'modified',
    'order'             => 'ASC',
    'posts_per_page'    => 35,
    'paged'             => $paged
);

$the_query = new WP_Query( $args );
?>
<div id="globalContent">
	<div class="row-fluid">
		<div id="contentBox" class="span12">
			<div id="gallery">
			    <div class="title">
			        <div class="bg-title">
			            <ul class="ulnavi">
			                <li><a href="<?php echo get_site_url().'/'.$term->slug; ?>"><?php echo $term->name; ?></a></li>
			            </ul>
			        </div>
			    </div>
				<?php
					while(have_posts()): the_post();
						$post_thumbnail_id  = get_post_thumbnail_id();
						$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
						$postid = get_the_ID();
				?>
					<div class="okno_V">					
						<div style="height: 280px; position:relative; overflow: hidden;">
							<a href="<?php the_permalink();?>">
								<img src="<?php echo $post_thumbnail_url; ?>" alt="<?php the_title();?>"/>
							</a>
							<div class="newst_img">
								<a href="<?php the_permalink();?>">
									<i class="fa fa-search"></i>
								</a>
							</div>
						</div>
						<div class="textvehicle">
							<div class="titlevehicle">
								<a href="<?php the_permalink();?>">
									<?php echo the_title(); ?>
								</a>
							</div>				
							<div class="price">
								<?php $price = get_field( "price", $postid ); echo number_format($price)." VNĐ"; ?>
							</div>
						</div>
						
					</div>
				<?php
					endwhile;
					wp_reset_postdata();        
				?>		
			    <div class="navigation"><?php //wp_pagenavi(array('query' =>$the_query)); ?></div>
			</div>
		
		</div>
	</div>
</div>
<?php
get_footer();
?>