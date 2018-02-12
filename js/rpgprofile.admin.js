jQuery(document).ready( function($){

/* Image Uploader for the profile image */
	var mediaUploader;

/* Upload the Image */
	$('#upload-button').on('click',function(e) {
		e.preventDefault();
		if( mediaUploader ){
			mediaUploader.open();
			return;
		}
		
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose a Profile Picture',
			button: {
				text: 'Choose Picture'
			},
			multiple: false
		});
		
		mediaUploader.on('select', function(){
			attachment = mediaUploader.state().get('selection').first().toJSON();
			$('#profile-picture').val(attachment.url);
			$('#profile-picture-preview').css('background-image','url(' + attachment.url + ')');
		});
		
		mediaUploader.open();
		
	});

/* Delete the image */
	$('#remove-picture').on('click',function(e){
		e.preventDefault();
		var answer = confirm("Are you sure you want to remove your Profile Picture?");
		if( answer == true ){
			$('#profile-picture').val('');
			$('.rpg-profile-general-form').submit();
		}
		return;
	});	

});