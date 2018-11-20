$(document).ready(function () {

      // start loading 
       $(window).on("load", function () {
      
        "use strict";
        
        // Loading Elements
        
        $(".loading-overlay .sk-cube-grid").fadeOut(1000, function () {
            
            // Show The Scroll
    
            $("html");
            
            $(this).parent().fadeOut(1000, function () {
                
                $(this).remove();
            });
        });
    });
    

  // Start WOW      
      new WOW().init();


  ///////////////////////////
  $('.home-slider').slick({
    dots: false,
    arrows: false,
    autoplay: true,
    infinite: true,
    speed: 600,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,

        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

});


