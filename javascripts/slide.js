
const slideImage = document.querySelectorAll(".slide-image");
const slidesContainer = document.querySelector(".slides-container");
const nextBtn = document.querySelector(".nxt-btn");
const prevBtn = document.querySelector(".prvs-btn");

// set up the slider

let slideWidth = slideImage[0].clientWidth;
let currentSlide = 0;
let numberOfImages = slideImage.length;

function init () {
    slideImage.forEach((div, i) => {
        div.style.left = i * 100 + "%";
        
    });
                      
    slideImage[0].classList.add("active");
                      
}

init();


// next button

nextBtn.addEventListener("click", () => {
        if (currentSlide >= numberOfImages - 1) {
            goToSlide(0);
            currentSlide = 0;
            return;
        };
    currentSlide++;
    goToSlide(currentSlide);
});


// previous button

prevBtn.addEventListener("click", () => {
        if (currentSlide <= 0) {
            goToSlide(numberOfImages - 1);
            currentSlide = numberOfImages - 1;
            return;
        };
    currentSlide--;
    goToSlide(currentSlide);
});





function goToSlide(slideNumber) {
    slidesContainer.style.transform = "translateX(-" + slideWidth * slideNumber + "px)";
    
}


// kolekciju slide-----------




$(document).ready(function(){
    $('.ready2').click(function(){
        $('html,body').animate({
            scrollTop:$('#turinys').offset().top
        },'slow');
    });
});


