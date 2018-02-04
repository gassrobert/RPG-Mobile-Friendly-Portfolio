jQuery(document).ready(function($) {
	
	// Make the default WP calendar widget look better
	$("table#wp-calendar").width('100%');

	// Remove the youtube previews after youtube videos run
	$("iframe").each(function() {
		var src = $(this).attr('src');
		$(this).attr('src', src.replace('?feature=oembed', '?rel=0'));
	});


	$(document).on('click', '.sideBarIcon', function() {
		// alert("This is a test.");
		$( '#sidebar1' ).toggle();
		$( '#sidebar1' ).css("width", "100%");
		$( '#sidebar1' ).css("z-index", "9999");
		/*  $( 'body' ).toggleClass( 'no-scroll' );
		$( '.sidebar-overlay' ).fadeToggle( 320 ); */
	});	
});