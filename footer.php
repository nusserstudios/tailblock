</main>

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<footer id="colophon" class="py-12 site-footer bg-gray-50 dark:bg-gray-950" role="contentinfo">
	<?php do_action('tailpress_footer'); ?>

	<div class="container mx-auto text-center text-gray-500 dark:text-gray-50">
		&copy; <?php echo date_i18n('Y'); ?> - <?php echo get_bloginfo('name'); ?>
	</div>
</footer>

</div>

<?php wp_footer(); ?>
</body>

</html>