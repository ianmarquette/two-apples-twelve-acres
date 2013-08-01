<?php
/*
Template Name: Archive
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="twelvecol first clearfix" role="main">

							<section class="entry-content clearfix" itemprop="articleBody">

								<?php

									global $post;

									$args = array( 'order' => 'DESC', 'posts_per_page'=> -1 );

									$myposts = get_posts( $args );

									foreach( $myposts as $post ) : setup_postdata($post); ?>
									<li>
          								<a href="<?php the_permalink(); ?>"><h2 class="archive-title"><?php the_title(); ?></h2></a>
										<p class="archive-date"><?php echo get_the_date(); ?></p>
										<?php the_excerpt(); ?>
										<div class="clearfix"></div>
        							</li>
								<?php endforeach; ?>
 
							</ul> 
						</section>

						</div> <!-- end #main -->


					</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>

