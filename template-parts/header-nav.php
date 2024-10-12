<header id="masthead" class="bg-gray-100 dark:bg-gray-950 dark:text-gray-50 text-gray-950">
	<div class="mx-auto max-w-7xl">
		<div class="px-6 py-6 lg:flex lg:justify-between lg:items-center md:px-0">
			<div class="flex items-center justify-between">
				<div class="flex items-center justify-between">
					<?php if (has_custom_logo()) { ?>
						<?php the_custom_logo(); ?>
					<?php } else { ?>
						<a href="<?php echo get_bloginfo('url'); ?>" class="text-lg font-extrabold uppercase">
							<?php echo get_bloginfo('name'); ?>
						</a>
					<?php } ?>
				</div>
				<div class="order-3 lg:hidden">
					<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
						<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
								<g id="icon-shape">
									<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>
			<div class="flex items-center justify-between ml-auto ">
					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden mt-4 py-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
							'menu_class'      => 'lg:flex lg:-mx-4',
							'theme_location'  => 'primary',
							'li_class'        => 'lg:mx-auto py-3 md:px-4',
							'fallback_cb'     => false,
						)
					);
					?>
			</div>
			<div class="items-center justify-between hidden ml-auto md:flex">
				<div class="flex items-center">
					<a class="font-medium text-gray-600 hs-dark-mode-active:hidden hs-dark-mode group hover:text-primary-500 dark:text-gray-200 dark:hover:text-gray-500" href="#!" data-hs-theme-click-value="dark">
						<svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
							<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
						</svg>
					</a>
					<a class="flex items-center hidden font-medium text-gray-600 hs-dark-mode-active:block hs-dark-mode group hover:text-primary-500 dark:text-gray-200 dark:hover:text-gray-500" href="#!" data-hs-theme-click-value="light">
						<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
							<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
						</svg>
					</a>
				</div>
				<div class="hidden lg:flex mt-9 md:mt-auto">
					<a href="<?php echo get_bloginfo('url'); ?>/contact" class="text-white bg-pink-500 hover:bg-pink-600 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-lg px-4 lg:px-5 py-2 lg:py-2.5 md:ml-6 dark:bg-pink-500 dark:hover:bg-pink-600 focus:outline-none dark:focus:ring-pink-700 font-bold">Contact</a>
				</div>	
			</div>			
		</div>
	</div>
</header>