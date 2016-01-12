<?php 
get_header(); 
?>
<div id="content-row" class="pusher-t-30">
    <div class="row-container visible visible-first">
        <div class="container">
            <div class="content-inner row">               
                <div id="component" class="span12">
                    <main role="main">
                    <?php
                        while ( have_posts() ) : the_post();
                    ?>                    
                    <article class="page-item page-item__gallery page-item__">
                        <header class="item_header">
                            <h3 class="item_title visible visible-first">
                                <span><?php the_title(); ?></span> 
                            </h3>	
                        </header>
                            <!-- Article Image -->	
                        <div class="page-gallery_img">
                            <figure class="item_img img-full img-full__left">
                            <?php 
                            $images = get_field('gallery'); // get gallery
                            $image  = $images[0]; // get first image in the gallery [1] for second, [2] for third, and so on.
                            if( $image ) : // only show the image if it exists ?> 
                            <a class="fancybox-thumb zoom articleGalleryZoom" data-fancybox-group="portfolio" data-fancybox-type="image" data-fancybox="fancybox" href="<?php echo $image['url']; ?>">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            </a> 
                            <?php endif; ?>
                            </figure>
                        </div>
                        <div class="item_fulltext">
                            <div class="portfolio-thumbs">
                                <?php 
                                    $images = get_field('gallery'); // get gallery
                                    $image  = $images[1]; // get first image in the gallery [1] for second, [2] for third, and so on.
                                    if( $image ) : // only show the image if it exists ?> 
                                <ul>        
                                                      
                                    <?php foreach( $images as $image ): ?>
                                        <li class="firstItem"><a class="fancybox-thumb" data-fancybox="fancybox" data-fancybox-type="image" data-fancybox-group="portfolio" href="<?php echo $image['url']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>"></a></li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                            <ul class="portfolio-meta-list">
                                <li class="firstItem"><strong class="portfolio-meta-key">Client:</strong> Lorem ipsum</li>
                                <li><strong class="portfolio-meta-key">Date:</strong> <?php the_date(); ?></li>
                                <li><strong class="portfolio-meta-key">Info:</strong> <?php the_field('info'); ?></li>
                                <li class="lastItem"><a href="#" target="_blank">View Project</a></li>
                            </ul>
                            
                            <?php the_content(); ?>


<img src="<?php echo $image_1['sizes']['gallery-thumb']; ?>" alt="<?php echo $image_1['alt']; ?>" />
                        </div>
                    </article>
                    <?php 
                        endwhile;
                        wp_reset_postdata(); 
                        ?>
                    <script>
                        
                    </script>   
                    </main>
                </div>        
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>