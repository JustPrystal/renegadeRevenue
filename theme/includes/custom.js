$(document).ready(function(){
    if ($(window).width() > 991){
        const swiper = new Swiper('.slider', {
            slidesPerView: 3,          // Number of slides to show
            spaceBetween: 70,          // Space between slides
            slidesPerGroup: 1,         // Number of slides to scroll at a time
            navigation: {              // Optional: enable navigation buttons
                nextEl: '.slider-arrow.next',
                prevEl: '.slider-arrow.prev',
            },
        });
    }
    const savedMode = localStorage.getItem('mode');

    // If there's a saved mode, apply it
    if (savedMode === 'dark') {
        $('.mode').addClass('dark');
        $('.dark-mode-logo').show();
        $('.logo').hide();
        document.documentElement.style.setProperty('--green', '#1596b3');
        document.documentElement.style.setProperty('--white', '#333333');
        document.documentElement.style.setProperty('--black', '#ffffff');
    }
    $(".mode").click(function () {
        $(this).toggleClass("dark");
        $(".dark-mode-logo").stop().fadeToggle()
        $(".logo").stop().fadeToggle()
        if ($(this).hasClass("dark")) {
          document.documentElement.style.setProperty('--green', '#1596b3');
          document.documentElement.style.setProperty('--white', '#333333');
          document.documentElement.style.setProperty('--black', '#ffffff');
          localStorage.setItem('mode', 'dark');
        } else {
          document.documentElement.style.setProperty('--green', '#cfdd01');
          document.documentElement.style.setProperty('--white', '#ffffff');
          document.documentElement.style.setProperty('--black', '#000000');
          localStorage.setItem('mode', 'light');
        }
      })
      $(".menu-wrap").click(function () {
        $("body").toggleClass("no-scroll");
        toggleClasses()
      })
      function toggleClasses() {
        const links = document.getElementById('header-links');
        const menu = document.getElementById('menu-wrap');
        links.classList.toggle('active');
        menu.classList.toggle('cross');
      }
      
      $(".calendly-trigger").click(function(){
        Calendly.initPopupWidget({ url: `https://calendly.com/teamlove/revenue-roadmap-intro?primary_color=${$('.mode').hasClass('dark') ? "1596b3" : "cfde00"}&background_color=${$('.mode').hasClass('dark') ? "333333" : "ffffff"}&text_color=${$('.mode').hasClass('dark') ? "ffffff" : "000000"}`})
      })
      $(".icons").click(function () {
        $(".search-button").stop().fadeToggle()
        $(".cross-button").stop().fadeToggle()
        $("body").toggleClass('no-scroll')
        $(".sidebar").toggleClass('active')
      })
})

