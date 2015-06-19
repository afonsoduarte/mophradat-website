              <div id="nav-container">
              <p class="top-nav-position"><span><?php _e( 'Menu', 'shorty' ); ?></span><a href="#main_nav" id="access_nav" class="access_aid">Navigation</a></p>
                  <nav id="main_nav">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			<p class="top-aid-position"><a href="#body" id="access_top" class="access_aid">To Top</a></p>
		</nav>
              </div>