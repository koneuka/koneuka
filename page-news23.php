<style>
div.plugin-menu-class ul {
    list-style-type: none;
    list-style: none;
    list-style-image: none;
}
div.plugin-menu-class li {
    padding: 20px;
    display: inline;
}
</style>

<?php

get_header(); ?>
		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

				<?php wp_nav_menu( array( 
						'theme_location' => 'plugin-test-menu', 
						'container_class' => 'plugin-menu-class' ) ); 
				include_once "old/news.php"; 
				?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>