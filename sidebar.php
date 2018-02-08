<?php 
	
if(!get_option('profile_picture')){
    // update_option('profile_picture', 'first_default_value');
    // $defaultprofilepicture = '<span class="dashicons dashicons-businessman"></span>';
    $user_id = get_current_user_id();
    $defaultprofilepicture = get_avatar($user_id);
    // https://www.gravatar.com/avatar
} else {
	$profilepicture = esc_attr( get_option( 'profile_picture' ) );
}
if(!get_option('profile_name')){
    // update_option('profile_name', 'first_default_value');
	$profilename = "Default User Name";
} else {
	$profilename = esc_attr( get_option( 'profile_name' ) );	
}
if(!get_option('profile_email')){
    // update_option('profile_email', 'first_default_value');
	$profileemail = "";
} else {
	$profileemail = esc_attr( get_option( 'profile_email' ) );
}
if(!get_option('profile_phone')){
    // update_option('profile_phone', 'first_default_value');
	$profilephone = "";
} else {
	$profilephone = esc_attr( get_option( 'profile_phone' ) );
}
if(!get_option('profile_location')){
    // update_option('profile_location', 'first_default_value');
	$profilelocation = "";
} else {
	$profilelocation = esc_attr( get_option( 'profile_location' ) );
}
if(!get_option('profile_intro')){
    // update_option('profile_intro', 'first_default_value');
	$profileintro = "Default introduction";
} else {
	$profileintro = esc_attr( get_option( 'profile_intro' ) );
}
if(!get_option('github_handler')){
    // update_option('profile_intro', 'first_default_value');
	$profilegithub = "";
} else {
	$profilegithub = esc_attr( get_option( 'github_handler' ) );
}
if(!get_option('twitter_handler')){
    // update_option('profile_intro', 'first_default_value');
	$profiletwitter = "";
} else {
	$profiletwitter = esc_attr( get_option( 'twitter_handler' ) );
}
if(!get_option('facebook_handler')){
    // update_option('profile_intro', 'first_default_value');
	$profilefacebook = "";
} else {
	$profilefacebook = esc_attr( get_option( 'facebook_handler' ) );
}
if(!get_option('gplus_handler')){
    // update_option('profile_intro', 'first_default_value');
	$profilegplus = "";
} else {
	$profilegplus = esc_attr( get_option( 'gplus_handler' ) );
}

?>
<div id="sidebar1" class="scrollbar">
	<div class="force-overflow">

	<div class="rpg-profile-sidebar-preview">
		<div class="rpg-profile-sidebar">
			<div class="sideBarIcon js-toggleSidebar">
				<div id="iconDiv">
					<span id="btn-rpg-profile-icon" class="rpg-profile-icon-header dashicons-before dashicons-businessman"></span>
				</div>
			</div>

			<div class="mobileMenuContainer">
				<?php 
					wp_nav_menu(array(
						'theme_location' => 'rpg-profile-mobile-sidebar-menu', 
						'container' => false
					)); 
				?>			
			</div>

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
			<h2 class="rpg-profile-description" title="Github"><a class="sidebar-link" href="<?php print $profilegithub; ?>" target="_blank">Link to me on Github</a></h2>
<?php
		}	
?>

<?php
		if (get_option('twitter_handler') || get_option('facebook_handler') || get_option('gplus_handler')) {
?>
		
		<h2 class="rpg-profile-social-media">Follow my Work On Social Media</h2>
		<div class="icons-wrapper">
<?php
			// Encase this in a social media class that centers everything
			if(get_option('twitter_handler')){
			    // update_option('profile_intro', 'first_default_value');
				// $profiletwitter = "";
				echo  '<a href="' . $profiletwitter . '" target="_blank" title="Twitter"><span class="rpg-profile-icon-sidebar dashicons-before dashicons-twitter"></span></a>';
			}
			if(get_option('gplus_handler')){
			    // update_option('profile_intro', 'first_default_value');
				// $profilegplus = "";
				echo '<a href="' . $profilegplus . '" target="_blank" title="Google+"><span class="rpg-profile-icon-sidebar dashicons-before  dashicons-googleplus"></span></a>';
			}
			if(get_option('facebook_handler')){
			    // update_option('profile_intro', 'first_default_value');
				// $profilefacebook = "";
				echo '<a href="' . $profilefacebook . '" target="_blank" title="Facebook"><span class="rpg-profile-icon-sidebar dashicons-before dashicons-facebook"></span></a>';
			}
?>
		</div>
<?php			
		}
?>
			<div id="sidebar-widget">
			<?php dynamic_sidebar( 'rpg-portfolio-sidebar' ); ?>
			</div>

		</div><!-- end .rpg-profile-sidebar -->
	</div><!-- end .rpg-profile-sidebar-preview -->
	</div>
</div><!-- end #sidebar1 -->