<?php
/* Set Profile Name for the Copyright */
if(!get_option('profile_name')){
	$profilename = "Default User Name";
} else {
	$profilename = esc_attr( get_option( 'profile_name' ) );	
}
?>
  <div id="footer">

  	<div id="rpg-leftFooterWidget"> 
  		<div id="rpg-portfolio-footer-one-container">
  		<?php dynamic_sidebar( 'rpg-portfolio-footer-one' ); ?>
  		</div>
  	</div> <!-- end #rpg-leftFooterWidget -->

  	<div id="rpg-rightFooter">
		<div id="rpg-footerMenu">  
			<?php 
				/* Primary Menu for Footer */
				wp_nav_menu(array(
					'theme_location' => 'rpg-profile-primary-menu', 
					'container' => false
				)); 
			?>
		</div> <!-- end #rpg-footerMenu -->
		<div id="rpg-copyright">
	    	<p>Copyright &copy; <?php echo date("Y");?> <br /><?php print $profilename; ?> Profile <br /> All rights reserved </p>
	    </div> <!-- end #rpg-copyright -->
    </div> <!-- end #rpg-rightFooter -->

  </div><!-- end #footer -->