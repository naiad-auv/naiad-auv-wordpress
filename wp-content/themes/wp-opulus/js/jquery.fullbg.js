/**
 * jQuery.fullBg
 * Version 1.0
 * Copyright (c) 2010 c.bavota - http://bavotasan.com
 * Dual licensed under MIT and GPL.
 * Date: 02/23/2010
**/
(function($){
	$.fn.fullBg=function(){
		var bgImg=$(this);
		bgImg.addClass('fullBg');
		function resizeImg(){
		
			var imgwidth=bgImg.width();
			var imgheight=bgImg.height();
			var winwidth=$(window).width();
			var winheight=$(window).height();
			var widthratio=winwidth/imgwidth;
			var heightratio=winheight/imgheight;
			var widthdiff=heightratio*imgwidth;
			var heightdiff=widthratio*imgheight;
			var topPos = -(heightdiff-winheight) /2;
			var leftPos = -(widthdiff-winwidth) /2;
			
			if(heightdiff>winheight){
				bgImg.css({
					width:winwidth+'px',
					height:heightdiff+'px',
					left:'0px',
					top:topPos+'px'
				});
			}else{
				bgImg.css({
					width:widthdiff+'px',
					height:winheight+'px',
					left:leftPos+'px',
					top:'0px'
				});
			}}
		resizeImg();
		$(window).resize(function(){
			resizeImg();
		});
	};
})(jQuery)

