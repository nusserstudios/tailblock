<?php get_header(); ?>



<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
<div class="relative pt-0 overflow-hidden isolate">
    <?php 
    if (has_post_thumbnail()) :
        $featured_image_url = get_the_post_thumbnail_url(null, 'full');
    else :
        // Local fallback image path
        $featured_image_url = get_template_directory_uri() . '/img/tailblock-bg.webp';
    endif;
    ?>
        <img 
            src="<?php echo esc_url($featured_image_url); ?>" 
            alt="<?php echo esc_attr(get_the_title()); ?>" 
            class="absolute inset-0 object-cover w-full h-full mt-0 -z-10"
            style="filter: brightness(0.4) saturate(1) contrast(1.6);"
        >
        <div class="absolute inset-x-0 overflow-hidden -top-40 -z-10 transform-gpu blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="max-w-2xl py-32 mx-auto sm:py-48 lg:py-56">
            <div class="text-center">
                <h1 class="pb-6 text-4xl font-bold tracking-tight text-white text-balance sm:text-6xl">
                    <?php the_title(); ?>
                </h1>
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div class="relative px-3 py-1 text-sm leading-6 text-gray-400 rounded-full ring-1 ring-white/10 hover:ring-white/20">
                        Announcing our next round of funding. <a href="#" class="font-semibold text-white"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
                <p class="mt-6 text-lg leading-8 text-gray-300">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                <div class="flex items-center justify-center mt-10 gap-x-6">
                    <a href="#" class="rounded-md bg-primary-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-400">Get started</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-white">Learn more <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
    </div>
    <div class="container mx-auto my-8">

    <?php do_action( 'tailpress_content_start' ); ?>

    <?php get_template_part('template-parts/content', get_post_format()); ?>

    <?php endwhile; ?>

    <?php endif; ?>

</div>

<?php get_footer(); ?>