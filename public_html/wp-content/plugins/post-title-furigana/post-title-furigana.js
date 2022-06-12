jQuery(function(){
	jQuery( '#title' ).blur( function() {
		// post title
		var title = jQuery( '#title' ).val();
		var furigana = jQuery( '#ptf_furigana' ).val();
		if( 0 < title.length && 0 == furigana.length ){
			// ajax url
			var url = jQuery( '#ptf_ajax_url' ).val();

			// parameters
			var args = {
				action: 'post-title-furigana',
				title: title,
			}

			// request
			jQuery.ajax({
				type: "POST",
				dataType: "xml",
				cache: false,
				url: url,
				data: args,
				success: function ( xml ){
					var furigana = jQuery( xml ).find( 'furigana' );
					if(furigana){
						// set the custom field
						jQuery( '#ptf_furigana' ).val( furigana.text() );
					}
				},
				error: function(){
				}
		    });
		}
	});
}); 
