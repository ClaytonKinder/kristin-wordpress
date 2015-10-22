<?php
/**
 * Template Name: Fullwidth Gallery Page
 *
 * @package gridsby
 */

get_header(); ?>

<div class="grid grid-pad">
	<div class="col-1-1 content-wrapper">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <section class="grid3d horizontal" id="grid3d">
				<div class="grid-wrap">

                    <div id="gallery-container" class="gridsby infinite-scroll">
                    	<?php
							global $post;

							$args = array( 'post_type' => 'post', 'posts_per_page' => -1, 'tax_query' =>
								array(
      									'taxonomy' => 'post_format',
      									'field' => 'slug',
      									'terms' => 'post-format-image',
    							));


							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :	setup_postdata($post); ?>

							<?php
								$categories = get_the_category();
								$esc = esc_html( $categories[0]->name );
								$string = preg_replace("/[^a-z0-9_\s-]/", "", $esc);
						    //Clean up multiple dashes or whitespaces
						    $string = preg_replace("/[\s-]+/", " ", $esc);
						    //Convert whitespaces and underscore to dash
						    $string = preg_replace("/[\s_]/", "-", $esc);
								$cat_name = strtolower($string);
							?>

              <a href="<?php the_field('article-url'); ?>">
                <div class="gallery-image <?php echo $cat_name ?>">
									<?php  ?>
                  <?php the_post_thumbnail(); ?>
                </div>
              </a>

						<?php endforeach; ?>
					</div><!-- gallery-container -->

                </div><!-- /grid-wrap -->
			</section><!-- grid3d -->

            </main><!-- #main -->
        </div><!-- #primary -->
    </div>

</div>
<?php get_footer(); ?>
