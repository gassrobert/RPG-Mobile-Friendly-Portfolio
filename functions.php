<?php 

/*function admin_bar(){
	show_admin_bar( true );
   if(is_user_logged_in()){
    add_filter( 'show_admin_bar', '__return_true' , 1000 );
  } 
}
add_action('init', 'admin_bar' );
function my_function_admin_bar(){
	return true;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar')
*/

require get_template_directory() . '/inc/cleanup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/function-admin.php';

