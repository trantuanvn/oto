<?php 
/*
Template Name: Contact us
*/
get_header(); 

?>
<div id="content-row" class="pusher-t-30">
	<div class="row-container">
		<div class="container">
			<div class="content-inner row">   
				<div id="component" class="span12">
					<main role="main">
						<div id="contentBox" class="page page-contact page-contact">
							<!-- Heading -->
							<div class="page_header">
								<h3 class="visible-first visible">
									<span> Liên hệ</span> 
								</h3>  
							</div>
							<!-- CONTACT FORM -->
							<!-- Map -->
							<div class="contact_map visible-first visible">
								<?php while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
								<?php endwhile; ?>
							</div>
						</div>  
					</main>
				</div>        
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>