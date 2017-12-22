<?php
if(!get_option('profile_name')){
    // update_option('profile_name', 'first_default_value');
	$profilename = "Default User Name";
} else {
	$profilename = esc_attr( get_option( 'profile_name' ) );	
}
?>
  <div id="footer">
    <p>Copyright &copy; <?php echo date("Y");?> <br /><?php print $profilename; ?> Profile <br /> All rights reserved </p>
  <!-- end #footer --></div>