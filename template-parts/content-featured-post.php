<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 */

?>

<style>
	


article .entry-title a{
	color: black !important;
}

h4.article-title a{
	color: black !important;
}

#featured-post {
    background: blue;
}

.primary menu a {
	color: black !important;
}

#featured-post header.article-header {
	background-color: #fff;
	padding: 4rem 0 0 0;
}


</style>

<article id="post-<?php the_ID(); ?> featured-post" <?php post_class(); ?>>
<?php
		$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
		if ( is_sticky() ) {

			?>
			<div class="featured-image" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;" >Hello</div>
			<?php 
		}
		
		?>
	<header class="article-header">
    <?php
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    ?>
    <?php the_excerpt() ?>
	</header><!-- .entry-header -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
