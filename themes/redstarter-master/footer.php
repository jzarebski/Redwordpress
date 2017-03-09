<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
<div id="footer">
    <div class="container">
        <div class="sub-container">
            <div class="color-white">
                <p class="uppercase, color-orange ">contact info</p>
                <p><i class="fa fa-envelope-o"></i> info@inhabitent.com</p>
                <p><i class="fa fa-phone"></i>778-456-7891</p>
                  <ul class="color-white">
                        <li><i class="fa fa-facebook-square"></i></li>
                        <li><i class="fa fa-twitter-square"></i></li>
                        <li><i class="fa fa-google-plus-square"></i></li>
                  </ul>

            </div>
            <div class="color-white">
                <p class="uppercase color-orange">business hours</p>
                <p>Monday-Friday:9am to 5 pm</p>
                <p>Saturday:10am to 2pm</p>
                <p>Sunday:Closed</p>
            </div>
        </div>


        <p class="logo-text-white"></p>

        <div>
            <div class="copyright uppercase color-white">copyright @ 2016 Inhabitent</div>

        </div>

    </div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    	<div class="site-info">
			<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
