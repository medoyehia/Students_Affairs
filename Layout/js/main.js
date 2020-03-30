$(function(){
  'use strict';
    var windowH =   $(window).height(),
        upperH  =   $('.upper-bar').innerHeight(),
        navbarH =   $('.navbar').innerHeight();
    $('.slider, .carousel-item').height(windowH - (upperH + navbarH));
    
    //Featured work shuffle
    $('.featured-work ul li').on('click',function(){
        
        $(this).addClass('active').siblings().removeClass('active');
        
        if($(this).data('class') === 'all'){
            
            $('.shuffle-image .col-md').css('opacity',1);
            
        }else{
            
            $('.shuffle-image .col-md').css('opacity' , '.09');
            
            $($(this).data('class')).parent().css('opacity',1);
        }
    });
});