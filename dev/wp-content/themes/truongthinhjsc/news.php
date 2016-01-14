<?php 
/*
    Template Name: News
*/
get_header(); 

?>
<div id="content-row" class="pusher-t-30">
    <div class="row-container">
        <div class="container">
            <div class="content-inner row">   
                <div class="span12">
                    <main role="main">
                        <section class="page-blog page-blog news-page">
                            <header class="page_header">
                                <h3 class="visible-first visible">
                                <span>Tin tức</span> 
                                </h3>	
                            </header>
                            <?php 
                                query_posts(array('cat' =>3, 'posts_per_page' =>5, 'order' => DESC, 'paged' => get_query_var('paged') ));
                                $cnt = 0;
                                while (have_posts()) : the_post();
                                $cnt++;
                            ?>
                            <div class="row-fluid">
                                <div class="span12">
                                    <article class="item">
                                    <!-- Intro image -->
                                        <figure class="span3">
                                            <div class="item_img">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail('thumb'); ?>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="info span9">
                                            <header class="item_header">
                                                <h4 class="item_title visible-first visible">       
                                                    <a href="<?php the_permalink(); ?>"> 
                                                        <span><?php the_title(); ?></span>
                                                    </a>
                                                </h4>
                                            </header>
                                            <!-- Introtext -->
                                            <div class="item_introtext">
                                                <?php the_field('tom_tat'); ?>
                                            </div>
                                            <a class="btn btn-info" href="<?php the_permalink(); ?>">
                                                <span>Xem thêm</span>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <footer class="pagination">
                                <?php 
                                    wp_pagenavi();
                                    wp_reset_query();
                                ?>
                            </footer>
                        </section>   
                    </main>
                </div>        
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>