jQuery(document).ready(function($) {
	
	// Make the default WP calendar widget look better
	$("table#wp-calendar").width('100%');

	// Remove the youtube previews after youtube videos run
	$("iframe").each(function() {
		var src = $(this).attr('src');
		$(this).attr('src', src.replace('?feature=oembed', '?rel=0'));
	});

	// Mobile sidebar toggling
	$(document).on('click', '.js-toggleSidebar', function() {
		$( '#sidebar1' ).fadeToggle( 320 );
		$( '#sidebar1' ).css("width", "100%");
		$( '#sidebar1' ).css("z-index", "9999");		
		$( '.sidebar-overlay' ).fadeToggle( 320 );
	});	
});