//let responsiveSlider = function () {
//    let slider = document.getElementById("slider");
//    let sliderwidth = slider.offsetWidth;
//    let sliderlist = document.getElementById("slider-wrap");
//    let count = 1;
//    let items = sliderlist.querySelectorAll(".ready3").length;
//    let prev = document.getElementById("arrow2");
//    let next = document.getElementById("arrow");
//    
//    window.addEventListener('resize', function() {
//       sliderwidth = slider.offsetWidth; 
//    });
//    
//    let prevSlide = function () {
//        if(count > 1) {
//            count = count - 2;
//            sliderlist.style.left = "-" + count * sliderwidth + "px";
//            count++;
//        }
//        else if (count = 1) {
//            count = items - 1;
//            sliderlist.style.left = "-" + count * sliderwidth + "px";
//            count++;
//        }
//    }
//    
//    let nextSlide = function () {
//        if(count < items) {
//            sliderlist.style.left = "-" + count * sliderwidth + "px";
//            count++;
//        }
//        else if (count = items) {
//            sliderlist.style.list = "0px";
//            count = 1;
//            
//        }
//    };
//    
//    next.addEventListener("click", function() {
//        nextSlide()
//    });
//        prev.addEventListener("click", function() {
//        prevSlide()
//    });
//    
//    setInterval(function() ) {
//                nextSlide();
//    
//  }, 8000);
//    
//}
//
//window.onload = funcition () {
//    responsiveSlider()
//}
