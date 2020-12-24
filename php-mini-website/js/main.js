/* global $*/
$(function () {

  'use strict';
  //Adjust Slider Height
   var windH = $(window).height(),
       upperH = $('.upper-bar').innerHeight(),
       naveH = $('.navbar').innerHeight();

       $('.slider, .carousel-item').height(windH - (upperH + naveH));

       //featured work shuffle

       $('.featured-work ul li ').on('click', function () {
         $(this).addClass('active').siblings().removeClass('active');
         if ($(this).data('class') === 'all') {
           $('.shuffel-images .col-md').css('opacity', 1);
         } else {
           $('.shuffel-images .col-md').css('opacity', '.08');
           $($(this).data('class')).parent().css('opacity',1);
         }
       });


});
