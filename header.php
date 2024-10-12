<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-950 antialiased dark:bg-slate-900 dark:text-gray-200' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="flex flex-col min-h-screen">

	<?php do_action( 'tailpress_header' ); ?>

	<?php get_template_part( 'template-parts/header', 'nav' ); ?>

	<div id="content" class="flex-grow site-content">

		<?php if ( is_front_page() ) { ?>
			<!-- Start introduction -->
			<div class="container mx-auto">
				<div class="px-12 py-16 my-12 rounded-xl bg-gradient-to-r from-blue-50 from-10% via-sky-100 via-30% to-blue-200 to-90%">
                    <div class="max-w-screen-md mx-auto">
                        <h1 class="mb-6 text-3xl font-extrabold tracking-tight text-gray-800 lg:text-6xl">Start building your next <a href="https://tailwindcss.com" class="text-secondary">Tailwind CSS</a> flavoured WordPress theme
                            with <a href="https://tailpress.io" class="text-primary">TailPress</a>.</h1>
                        <p class="mb-10 text-xl font-medium text-gray-600">TailPress is your go-to starting
                            point for developing WordPress themes with Tailwind CSS and comes with basic block-editor support out
                            of the box.</p>
                        <a href="https://github.com/jeffreyvr/tailpress"
                            class="flex-none w-full px-6 py-3 text-lg font-semibold leading-6 text-white transition-colors duration-200 bg-gray-900 border border-transparent sm:w-auto rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none">View
                            on GitHub</a>
                    </div>
                </div>
			</div>
			<!-- End introduction -->
		<?php } ?>

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>