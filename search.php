<?php get_header(); ?>

<div class="container mx-auto my-8">

    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'your-text-domain' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part('template-parts/content', get_post_format()); ?>

		<?php endwhile; ?>

    <?php else : ?>

        <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'your-text-domain' ); ?></p>
        <?php get_search_form(); ?>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
