<?php
if(!get_option('profile_name')){
    // update_option('profile_name', 'first_default_value');
	$profilename = "Default User Name";
} else {
	$profilename = esc_attr( get_option( 'profile_name' ) );	
}
?>
  <div id="footer">
	<div id="rpg-footerMenu">  
		<p>Site Map</p>
		<hr>
		<?php 
			wp_nav_menu(array(
				'theme_location' => 'rpg-profile-primary-menu', 
				'container' => false
			)); 
		?>
	</div>	
	<div id="rpg-copyright">
    	<p>Copyright &copy; <?php echo date("Y");?> <br /><?php print $profilename; ?> Profile <br /> All rights reserved </p>
    </div>
  <!-- end #footer --></div>