 $(document).ready(function() {
    $('.slides-container2').lightSlider({
        item:1,
        loop:false,
        slideMove:1,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:600,
        responsive : [
            {
                breakpoint:800,
                settings: {
                    item:1,
                    slideMove:1,
//                    slideMargin:6,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1
                  }
            }
        ]
    });  
    $('.slides-container4').lightSlider({
        item:4,
        loop:false,
        slideMove:2,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:600,
        responsive : [
            {
                breakpoint:800,
                settings: {
                    item:4,
                    slideMove:2,
//                    slideMargin:6,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:2,
                    slideMove:2
                  }
            }
        ]
    });  
  });





// set bigger picture

$(document).ready(function() {
   $('.slide-image2 a').click(function(e){
       e.preventDefault();
        $('.foto img').attr("src", $(this).attr("href"));
   });
    
    
});

$(document).ready(function() {
   $('.slide-image3 a').click(function(e){
       e.preventDefault();
        $('.foto2 img').attr("src", $(this).attr("href"));
   });
    
});

$(document).ready(function() {
   $('.slides-container4 a').click(function(e){
       e.preventDefault();
        $('.foto img').attr("src", $(this).attr("href"));
   });
    
    
});

