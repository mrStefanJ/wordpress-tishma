jQuery(function($) {
    $('#menu-icon').bind('click',function(event){
        $('.menu-primary-menu-container ul').slideToggle();
    });

    $(window).resize(function(){  
        var w = $(window).width();  
        if(w > 768) {  
            $('.menu-primary-menu-container ul').removeAttr('style');  
        }  
    });
});