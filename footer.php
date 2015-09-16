			<footer>
				<div class="footer__upper">
					<div class="footer__upper__nav">
						<a href="<?php echo site_url(); ?>"><p><?php bloginfo( 'name'); ?></p></a>
						<a href="<?php echo site_url(); ?>/about">About MSO</a>
						<a href="<?php echo site_url(); ?>/team">Our Team</a>
						<a href="<?php echo site_url(); ?>/contact">Contact Us</a>
						<a href="<?php echo site_url(); ?>/recruitment">Join Us</a>
						<a href="<?php echo site_url(); ?>/campusorganizations">Campus Organizations</a>
						<a href="<?php echo site_url(); ?>/terms-of-use">Terms of Use</a>
						<a href="https://docs.google.com/forms/d/1vGS9F_vYIzWL7kji5VrSEfh6WltCV8Y0CK6T48K1_GE/viewform">Submit Articles/Tips</a>

					</div>
					<div class="footer__upper__social">
						<p> Follow us on </p>
						<a href="https://www.facebook.com/MorningSignout"><img src="<?php echo get_template_directory_uri()?>/img/facebook.png"></a>
						<a href="http://instagram.com/morningsignout"><img src="<?php echo get_template_directory_uri()?>/img/instagram.png"></a>
						<a href="https://www.linkedin.com/company/4806605?trk=prof-exp-company-name"><img src="<?php echo get_template_directory_uri()?>/img/linkedin.png"></a>
						<a href="https://twitter.com/Morningsignout"><img src="<?php echo get_template_directory_uri()?>/img/twitter.png"></a>
						<a href="https://www.youtube.com/user/MorningSignout"><img src="<?php echo get_template_directory_uri()?>/img/youtube.png"></a>
						<a href="http://morningsignout.tumblr.com/"><img src="<?php echo get_template_directory_uri()?>/img/tumblr.png"></a>
					</div>
				</div>
				<div class="footer__lower">
					<p>
						Copyright © <?php echo date('Y'); ?> by Morning Sign Out. All rights reserved. Unauthorized use and/or duplication of this material without expressed and written permission from this blog’s owner is strictly prohibited. Excerpts and links may be used, provided that full and clear credit is given to Morning Sign Out with appropriate and specific direction to the original content.
					</p>
				</div>
			</footer>
		</div> <!--container-->
		<div class="back-to-top">Back to top</div>
		<?php wp_footer(); ?>
	</body>
</html>