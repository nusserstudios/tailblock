<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-neutral-950 antialiased dark:bg-neutral-950 dark:text-neutral-200' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="flex flex-col min-h-screen">

	<?php do_action( 'tailpress_header' ); ?>

	<?php get_template_part( 'template-parts/header', 'nav' ); ?>

	<div id="content" class="flex-grow site-content">

		<main>