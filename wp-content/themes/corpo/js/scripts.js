jQuery(function($){

    $("ul.tabs").tabs("> .pane",  {effect: 'fade'} );
    
    // Flexslider init
    if( $('.flexslider').length ) {
        $('.flexslider').flexslider({
            slideshow: true,
            animation: "slide",
            directionNav: false,
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    }

    
    $("#main-menu").tinyNav({header: 'Navigation'});
            
    $(".portfolio-item").hover(function(){
        $(this).find('.image-overlay').animate({opacity : '1'}, 300);
    }, function(){
        $(this).find('.image-overlay').animate({opacity : '0'}, 300 ,function(){ 
        });
    });

});
