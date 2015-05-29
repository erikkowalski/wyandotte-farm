<?php
/*
Template Name: Home Template
*/
?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/**
			 * @hooked storefront_homepage_content - 10
			 * @hooked storefront_product_categories - 20
			 * @hooked storefront_recent_products - 30
			 * @hooked storefront_featured_products - 40
			 * @hooked storefront_popular_products - 50
			 * @hooked storefront_on_sale_products - 60
			 */
			do_action( 'homepage' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
