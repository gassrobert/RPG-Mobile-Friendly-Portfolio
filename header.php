  <div id="header">
	<div class="nav-collapse collapse navbar-responsive-collapse">
		<nav>
			<div class="leftMainMenu">  
				<?php 
					wp_nav_menu(array(
						'theme_location' => 'rpg-profile-primary-menu', 
						'container' => false
					)); 
				?>
			</div>
			<div class="sideBarIcon">
				<div id="iconDiv">
					<span id="btn-rpg-profile-icon" class="rpg-profile-icon-header dashicons-before dashicons-businessman"></span>
				</div>
			</div>
		</nav>
	</div> 
    <?php 
    get_search_form();
    ?>
    <br class="clearfloat" />
  </div><!-- end #header -->