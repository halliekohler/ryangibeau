<?php /* Template Name: Music Page */ get_header(); ?>

<?php get_sidebar(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<object data="" type="">
				
			</object>

			 <div class="music-wrapper">
		         <ul class="music-boxes">
			            <li id="firstsong"><audio src="<?php echo get_template_directory_uri(); ?>/music/song1.mp3"/></audio>
			            	<!-- svg play icon -->
			            		<img src="<?php echo get_template_directory_uri(); ?>/img/play-solid.svg" alt="play" class="play-solid">
			           			<h3>Song Title // Album Name</h3>
			           			<!-- title hardcoded for now, but CHANGE THIS -->
			            </li>
			            <li id="secondsong"><audio src="<?php echo get_template_directory_uri(); ?>/music/song2.mp3"/></audio>
							<!-- svg play icon -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/play-solid.svg" alt="play" class="play-solid">
			           			<h3>Song Title Title // Album Name overflow</h3>
			            </li>
			            <li id="thirdsong"><audio src="<?php echo get_template_directory_uri(); ?>/music/song3.mp3"/></audio>
							<!-- svg play icon -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/play-solid.svg" alt="play" class="play-solid">
			           			<h3>Song Title // Album Name</h3>
			            </li>
		        </ul>
		    </div>
		    <!-- /music-wrapper -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>