jQuery(document).ready(function($) {

	'use strict';

      $('.owl-carousel').owlCarousel({
          loop:true,
          margin:30,
          responsiveClass:true,
          responsive:{
              0:{
                  items:1,
                  nav:true
              },
              500:{
                  items:2,
                  nav:false
              },
              800:{
                  items:3,
                  nav:false
              },
              1000:{
                  items:4,
                  nav:true,
                  loop:false
              },
              1200:{
                  items:5,
                  nav:true,
                  loop:false
              },
              1500:{
                  items:6,
                  nav:true,
                  loop:false
              }
          }
      })


});