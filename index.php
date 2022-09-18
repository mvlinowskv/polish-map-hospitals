<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package matt
 * @since 1.0
 * @version 0.0.1
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<main id="main" class="col-md-8 px-xs-0" role="main">

			<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'partials/content', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;?>

					
				<?php endwhile; // End of the loop.
			?>
			<nav>
				<ul class="pager">
					<li><?php next_posts_link( 'Poprzednia strona' ); ?></li>
					<li><?php previous_posts_link( 'Następna strona' ); ?></li>
				</ul>
			</nav>
		</main><!-- #main -->
		<div class="col-md-4 col-lg-3 ml-auto d-none d-sm-block sidebar-wrapper p-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer();
