<?php
/*
Template Name: Story
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="twelvecol first clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

    							<div data-picture data-alt="<?php the_field('header_image_alt_tag'); ?>" class="header-image">

    								<h1 class="h1"><?php the_title(); ?></h1> 

        								<div data-src="<?php the_field('story_header_small'); ?>"></div>
        								<div data-src="<?php the_field('story_header_small_retina'); ?>"		data-media="(min-device-pixel-ratio: 1.3)"></div>
        								<div data-src="<?php the_field('story_header_medium'); ?>"				data-media="(min-width: 48em)"></div>
        								<div data-src="<?php the_field('story_header_medium_retina'); ?>"		data-media="(min-width: 48em) and (min-device-pixel-ratio: 1.3)"></div>
        								<div data-src="<?php the_field('story_header_large'); ?>"				data-media="(min-width: 64em)"></div>
        								<div data-src="<?php the_field('story_header_large_retina'); ?>"		data-media="(min-width: 64em) and (min-device-pixel-ratio: 1.3)"></div>  
        								<div data-src="<?php the_field('story_header_extra_large'); ?>"			data-media="(min-width: 77em)"></div>
        								<div data-src="<?php the_field('story_header_extra_large_retina'); ?>"	data-media="(min-width: 77em) and (min-device-pixel-ratio: 1.3)"></div> 

        								<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
        								<noscript>
            								<img src="<?php the_field('story_header_small'); ?>" alt="<?php the_field('story_header_alt_tag'); ?>">
        								</noscript>

        								<!-- <h1 class="h2"><?php the_title(); ?></h1> -->
    								</div>

								</header> <!-- end article header -->

								<section class="entry-content clearfix" itemprop="articleBody">

										<?php the_content(); ?>

								<div class="bio-content">		

											<?php 
												if(get_field('bio_left_entry'))
												{
													echo '<ul class="bio-left">';										 
													while(has_sub_field('bio_left_entry'))
													{
														echo '<li><h3>'. get_sub_field('left_entry_header') . '</h3><img src=" '. get_sub_field('left_entry_photo') .' " /><p class="bio-text">'.get_sub_field('left_entry_text') . '</p></li>';
													}
												 
													echo '</ul>';
												}
											?>

											<?php 
												if(get_field('bio_right_entry'))
												{
													echo '<ul class="bio-right">';										 
													while(has_sub_field('bio_right_entry'))
													{
														echo '<li><h3>'. get_sub_field('right_entry_header') . '</h3><img src=" '. get_sub_field('right_entry_photo') .' " /><p class="bio-text">'.get_sub_field('right_entry_text') . '</p></li>';
													}
												 
													echo '</ul>';
												}
											?>

								</div>


									<div class="clearfix"></div>

								</section> <!-- end article section -->

							</article> <!-- end article -->

						<?php endwhile; ?>



						

						<?php else : ?>

							<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
