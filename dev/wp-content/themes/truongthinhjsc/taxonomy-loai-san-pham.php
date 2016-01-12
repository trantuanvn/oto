<?php
get_header();
$term   = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ));
$paged  = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array( 
    'post_type'         => 'san-pham',
    'loai-san-pham'     => $term->slug,
    'orderby'           => 'modified',
    'order'             => 'ASC',
    'posts_per_page'    => 18,
    'paged'             => $paged,

);
$a = query_posts($args);
?>

<div class="main products">
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
		<div class="item">					
			<a href="<?php the_permalink();?>"><img src="<?php echo $post_thumbnail_url; ?>" alt="<?php the_title();?>"/></a>
			<h3 class="name-pro"><?php echo $the_title; ?></h3>
			<span class="price"><?php $price = get_field( "price", $postid ); if($price != '') echo number_format($price)." VNĐ"; else echo 'Liên hệ : 0904779039'; ?></span>
		</div>
	<?php
		endwhile;
		wp_reset_postdata();
	?>		
</div>

<?php
get_footer();
?>