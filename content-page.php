<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package gridsby
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    	<header class="entry-header">
			<?php the_title( '<h1 class="entry-title"><span class="title">', '</span></h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'gridsby' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php edit_post_link( __( 'Edit', 'gridsby' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
