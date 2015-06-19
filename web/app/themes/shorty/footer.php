   <footer id="footer" role="contentinfo">
        <div id="colophon">
            <section class="site-info">
                <section id="credit" class="onethird">
<h5>&copy; <?php echo date("Y"); ?> <a href="<?php echo esc_url( home_url('/') ); ?>/"><?php bloginfo('name'); ?></a></h5>
<a href="http://wordpress.org/" title="WordPress"><?php _e( 'Powered by', 'letterhead' ); ?> WordPress</a>
<span class="sep"><br /></span> Shorty <a href="http://tradesouthwest.com/"> Tradesouthwest</a>
                </section>
                    <div class="onethird">
                        <aside class="shorty_footer">
                            <?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
	                    <ul id="sidebar">
		                <?php dynamic_sidebar( 'footer-sidebar' ); ?>
	                    </ul>
                            <?php else : ?>
	                        <?php get_calendar(); ?>
                            <?php endif; ?>
                        </aside>
                    </div>
                        <div class="fright-hash onethird">
                            <a href="#"><?php _e( 'Top &uarr;', 'letterhead' ); ?></a>
                        </div>
            </section><!-- ends site-info --> 
        </div>
    </footer>
</div> <!-- ends wrapper --> 
        <?php wp_footer(); ?>
</body>
</html>