<?php settings_errors(); ?>
<?php 
// Look for previously saved values and get default values if none are present.
if(!get_option('profile_picture')){

	// Get current user's id for use with gravatar
    $user_id = get_current_user_id();
    // Obtain avatar if there is any from https://www.gravatar.com/avatar
    // Otherwise obtain default avatar image
    $defaultprofilepicture = get_avatar($user_id);

} else {
	// Obtain the saved profile picture
	$profilepicture = esc_attr( get_option( 'profile_picture' ) );
}
if(!get_option('profile_name')){

	$profilename = "Default User Name";
} else {
	$profilename = esc_attr( get_option( 'profile_name' ) );	
}
if(!get_option('profile_email')){

	$profileemail = "";
} else {
	$profileemail = esc_attr( get_option( 'profile_email' ) );
}
if(!get_option('profile_phone')){

	$profilephone = "";
} else {
	$profilephone = esc_attr( get_option( 'profile_phone' ) );
}
if(!get_option('profile_location')){

	$profilelocation = "";
} else {
	$profilelocation = esc_attr( get_option( 'profile_location' ) );
}
if(!get_option('profile_intro')){

	$profileintro = "Default introduction";
} else {
	$profileintro = esc_attr( get_option( 'profile_intro' ) );
}
if(!get_option('github_handler')){

	$profilegithub = "";
} else {
	$profilegithub = esc_attr( get_option( 'github_handler' ) );
}
if(!get_option('twitter_handler')){

	$profiletwitter = "";
} else {
	$profiletwitter = esc_attr( get_option( 'twitter_handler' ) );
}
if(!get_option('facebook_handler')){

	$profilefacebook = "";
} else {
	$profilefacebook = esc_attr( get_option( 'facebook_handler' ) );
}
if(!get_option('gplus_handler')){

	$profilegplus = "";
} else {
	$profilegplus = esc_attr( get_option( 'gplus_handler' ) );
}

?>

<h1>Portfolio Personal Data</h1>
<div class="rpg-profile-sidebar-preview">
	<div class="rpg-profile-sidebar">
		<div class="image-container">
			<?php if (!get_option('profile_picture')) { ?>
				<div id="rpg-profile-picture-preview" class="rpg-profile-picture"><?php echo $defaultprofilepicture; ?></div>

			<?php } else { ?>
				<div id="rpg-profile-picture-preview" class="rpg-profile-picture" style="background-image: url(<?php print $profilepicture; ?>);"></div>				
			<?php } ?>

		</div>
		<h1 class="rpg-profile-username" title="Name"><?php print $profilename; ?></h1>
		<h2 class="rpg-profile-description" title="Email"><?php print $profileemail; ?></h2>
		<h2 class="rpg-profile-description" title="Phone"><?php print $profilephone; ?></h2>
		<h2 class="rpg-profile-description" title="Location"><?php print $profilelocation; ?></h2>
		<h2 class="rpg-profile-description" title="Introduction"><?php print $profileintro; ?></h2>

<?php
		if (get_option('github_handler')) {
?>
			<h2 class="rpg-profile-description" title="Github"><a href="<?php print $profilegithub; ?>" target="_blank" class="sidebar-link">Link to me on Github</a></h2>
<?php
		}	
?>

<?php
		if (get_option('twitter_handler') || get_option('facebook_handler') || get_option('gplus_handler')) {
?>
		
		<h2 class="rpg-profile-social-media">Follow Me On Social Media</h2>
		<div class="icons-wrapper">
<?php
			// Encase this in a social media class that centers everything
			if(get_option('twitter_handler')){

				echo  '<a href="' . $profiletwitter . '" target="_blank" title="Twitter"><span class="rpg-profile-icon-sidebar dashicons-before dashicons-twitter"></span></a>';
			}
			if(get_option('gplus_handler')){

				echo '<a href="' . $profilegplus . '" target="_blank" title="Google+"><span class="rpg-profile-icon-sidebar dashicons-before  dashicons-googleplus"></span></a>';
			}
			if(get_option('facebook_handler')){

				echo '<a href="' . $profilefacebook . '" target="_blank" title="Facebook"><span class="rpg-profile-icon-sidebar dashicons-before dashicons-facebook"></span></a>';
			}
?>
		</div>
<?php			
		}
?>

	</div>
</div>

<div class="rpg-profile-general-form-container">
	<form id="submitForm" method="post" action="options.php" class="rpg-profile-general-form">
		<?php settings_fields( 'rpg-profile-settings-group' ); ?>
		<?php do_settings_sections( 'rpg_profile' ); ?>
		<?php submit_button( 'Save Changes', 'primary', 'btnSubmit' ); ?>
	</form>
</div>