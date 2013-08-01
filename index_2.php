<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="twelvecol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

    							<div data-picture data-alt="<?php the_field('header_image_alt_tag'); ?>" class="header-image">

        								<div data-src="<?php the_field('header_image_small'); ?>"></div>
        								<div data-src="<?php the_field('header_image_small_retina'); ?>"		data-media="(min-device-pixel-ratio: 1.3)"></div>
        								<div data-src="<?php the_field('header_image_medium'); ?>"				data-media="(min-width: 48em)"></div>
        								<div data-src="<?php the_field('header_image_medium_retina'); ?>"		data-media="(min-width: 48em) and (min-device-pixel-ratio: 1.3)"></div>
        								<div data-src="<?php the_field('header_image_large'); ?>"				data-media="(min-width: 64em)"></div>
        								<div data-src="<?php the_field('header_image_large_retina'); ?>"		data-media="(min-width: 64em) and (min-device-pixel-ratio: 1.3)"></div>  
        								<div data-src="<?php the_field('header_image_extra_large'); ?>"			data-media="(min-width: 77em)"></div>
        								<div data-src="<?php the_field('header_image_extra_large_retina'); ?>"	data-media="(min-width: 77em) and (min-device-pixel-ratio: 1.3)"></div> 

        								<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
        								<noscript>
            								<img src="<?php the_field('header_image_small'); ?>" alt="<?php the_field('header_image_alt_tag'); ?>">
        								</noscript>

        								<h1 class="h2"><?php the_title(); ?></h1>
    								</div>

									<p class="byline vcard"><?php
										printf(__('<time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')) );
									?><?php comments_number( '0 Comments', '1 Comments', '% Comments' ); ?>
									</p>

								</header> <!-- end article header -->



								<section class="entry-content clearfix">

									<?php the_content(); ?>
								</section> <!-- end article section -->

								<footer class="article-footer">
									<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?></p>

								</footer> <!-- end article footer -->

								<?php comments_template(); ?>

							</article> <!-- end article -->


							<?php endwhile; ?>

									<?php if (function_exists('bones_page_navi')) { ?>
											<?php bones_page_navi(); ?>
									<?php } else { ?>
											<nav class="wp-prev-next">
													<ul class="clearfix">
														<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
														<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
													</ul>
											</nav>
									<?php } ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->


				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
