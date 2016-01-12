<?php 
/*
    Template Name: About us
*/
get_header(); 

?>
<div class="container">
  <div class="span12" id="contentBox">
    <h3 class="page-header item-title"><?php the_title(); ?></h3>
    <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </div>
</div>
<?php get_footer(); ?>