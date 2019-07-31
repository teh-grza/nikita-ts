<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


    <h1><?php the_field('home_page_header_text');?></h1>

<?php get_field('ctas');?>
    <div class="animals">
    <img src="https://cdn.pixabay.com/photo/2017/05/28/18/21/girgentana-goat-2351715_1280.jpg"<?php get_field('cta_image');?> alt="screenshot" height="300" width="450" >
    <img src="https://cdn.pixabay.com/photo/2016/11/14/03/32/elephant-1822492_1280.jpg"<?php get_field('cta_image');?> alt="screenshot" height="300" width="450" >
    <img src="https://cdn.pixabay.com/photo/2015/03/26/09/41/hamster-690108_1280.jpg"<?php get_field('cta_image');?> alt="screenshot" height="300" width="450">
    </div>







<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>

		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			 * Filter number of front page sections in Twenty Seventeen.
			 *
			 * @since Twenty Seventeen 1.0
			 *
			 * @param int $num_sections Number of front page sections.
			 */
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

	endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
