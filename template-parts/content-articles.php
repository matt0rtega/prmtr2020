<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<style>



</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="article-header">

		<div class="category-tag"><?php the_category( ' ' ); ?></div>

		<?php
		$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
		
		if( has_post_thumbnail()) {
			?>
			<div class="article-image"><img src="<?php echo $backgroundImg[0]; ?>"/></div>
            <!-- <div class="article-image" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;" >Hello</div> -->
			<?php
		}

		the_title( '<h4 class="article-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );

		 ?>
	</header><!-- .entry-header -->

	<?php the_excerpt() ?>

</article><!-- #post-<?php the_ID(); ?> -->
