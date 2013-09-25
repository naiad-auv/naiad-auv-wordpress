jQuery(document).ready(function($) {
	
	jQuery( "#options_content" ).tabs({
			cookie: {
				expires: 1
			}
		});

	jQuery('.fade').delay(1000).fadeOut(1000);
	
	jQuery(".info_box_button").fancybox();
	
	jQuery('.colorSelector').each(function(){
		var Othis = this; 
		var initialColor = $(Othis).next('input').attr('value');
		$(this).ColorPicker({
		color: initialColor,
		onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
		},
		onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
		},
		onChange: function (hsb, hex, rgb) {
		$(Othis).children('div').css('backgroundColor', '#' + hex);
		$(Othis).next('input').attr('value','#' + hex);
	}
	});
	}); 
	
	
	
		 		
});	