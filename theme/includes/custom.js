$(document).ready(function(){
    console.log($('.slider'))

    const swiper = new Swiper('.slider', {
        slidesPerView: 3,          // Number of slides to show
        spaceBetween: 70,          // Space between slides
        slidesPerGroup: 1,         // Number of slides to scroll at a time
        navigation: {              // Optional: enable navigation buttons
            nextEl: '.slider-arrow.next',
            prevEl: '.slider-arrow.prev',
        },
    });

    console.log("swiper")
})