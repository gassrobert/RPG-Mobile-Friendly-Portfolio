  <div id="header">
    <!-- <h1>Header</h1> -->
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
		</nav>
	</div> 
    <?php 
    get_search_form();
    ?>
    <br class="clearfloat" />
  <!-- end #header --></div>