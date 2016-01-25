<!-- sidebar -->
<aside class="sidebar" role="complementary">
		<!-- header -->
	<header class="header clear" role="banner">

			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<!-- svg logo -->
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
				</a>
			</div>
			<!-- /logo -->


			<div class="nav-wrapper">
				<nav class="nav" role="navigation">
					<?php wp_nav_menu( 'primary_navigation' ); ?>
				</nav>
			</div>
			<!-- /nav-wrapper -->

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

		    <div class="social-wrapper">
		    	<ul class="social-icons">
		    		<li>
		    			<img src="<?php echo get_template_directory_uri(); ?>/img/social-facebook.svg" alt="facebook" class="social">
		    		</li>
		    		<li>
		    			<img src="<?php echo get_template_directory_uri(); ?>/img/social-email.svg" alt="email" class="social">
		    		</li>
		    		<li>
		    			<img src="<?php echo get_template_directory_uri(); ?>/img/social-soundcloud.svg" alt="soundcloud" class="social">
		    		</li>
		    		<li>
		    			<img src="<?php echo get_template_directory_uri(); ?>/img/social-youtube.svg" alt="youtube" class="social">
		    		</li>
		    	</ul>
		    </div>
		    <!-- /social-wrapper -->

	</header>
	<!-- /header -->
</aside>
<!-- /sidebar -->
