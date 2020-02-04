<?php
/**
 * Template Name: Front Page
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>
	
	<style>
		
		#feature-art {
			background-color: blue;
/* 			/display: block; */
			position: fixed;
			left: 0;
			top: 0;
			right: 0;
			bottom: 0;
			height: 100vh;
			width: 100%;
			z-index: -999;
		}


  .articles .entry-title {
	font-size: 2.4rem; }
	
	.featured-post .entry-title{
		margin-top: 2.4rem;
		margin-bottom: 2.4rem;
	}


		
	</style>	
	
	<div id="primary">
        <main id="site-content" role="main" class="section-inner">

        <?php

	// if ( have_posts() ) {

	// 	while ( have_posts() ) {
	// 		the_post();

	// 		get_template_part( 'template-parts/content', get_post_type() );
	// 	}
	// }

	?>

        <div class="featured-post">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
			
			$my_query = new WP_Query('category_name=featured&posts_per_page=1');
			
			while($my_query->have_posts()) : 
			$my_query->the_post();
			$do_not_duplicate = $post->ID;
			
			get_template_part( 'template-parts/content-featured-post', get_post_type() );
			
			endwhile; 
		endif;
		
		?>
		</div>
		
		<div class="articles">
		<?php
		
			if ( have_posts() ) : 
			
			$my_query = new WP_Query('category_name=articles&posts_per_page=12');
			while ( $my_query->have_posts() ) : 
			$my_query->the_post();
			if ( $post->ID == $do_not_duplicate ) continue;
				get_template_part( 'template-parts/content-articles', get_post_type() );
			endwhile; 
			
			endif;
		
		?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();