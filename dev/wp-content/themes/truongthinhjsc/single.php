<?php
get_header(); ?>
<div id="content-row">
  <div class="row-container visible visible-first single-block">
    <div class="container">
      <div class="content-inner row">   
        <div id="component" class="span12">
          <main role="main">
            <article class="page-item page-item__team">
                <?php while ( have_posts() ) : the_post();?>
                <header class="item_header">
                    <h3 class="page-header item-title"><?php echo the_title(); ?></h3>	
                </header>
                <div class="item_fulltext">
                    <div class="content-block">
                        <?php
                            $im=the_post_thumbnail();
                            if ($im!=null) {
                        ?>
                        <div class="thumb-image">
                            <?php the_post_thumbnail(); ?>
                       	</div>
                        <div class="summary">
                            <?php echo the_content(); ?>
                        </div>
                        <?php } else { echo the_content(); }?>
                        
                    </div>
                    
                </div>
                <?php endwhile;?>
            </article>   
          </main>
        </div>        
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
