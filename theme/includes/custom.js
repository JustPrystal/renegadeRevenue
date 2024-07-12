$(document).ready(function () {
  function initSwiper() {
    return new Swiper('.slider', {
      slidesPerView: 3,          // Number of slides to show
      spaceBetween: 70,          // Space between slides
      slidesPerGroup: 1,
      resizeReInit: true,        // Number of slides to scroll at a time
      navigation: {              // Optional: enable navigation buttons
        nextEl: '.slider-arrow.next',
        prevEl: '.slider-arrow.prev',
      }
    });
  }

  function handleResize() {
    if ($(window).width() < 991) {
      if (swiper !== undefined) {
        swiper.destroy();
        swiper = undefined;
      }
    } else {
      if (swiper === undefined) {
        swiper = initSwiper();
      }
    }
  }

  let swiper = initSwiper();  // Initialize Swiper initially

  $(window).resize(handleResize);  // Attach resize event handler

  // Call handleResize once to ensure the correct state on load
  handleResize();
  const savedMode = localStorage.getItem('mode');

  // If there's a saved mode, apply it
  if (savedMode === 'dark') {
    $('.mode').addClass('dark');
    $('.dark-mode-logo').show();
    $('.logo').hide();
    document.documentElement.style.setProperty('--green', '#1596b3');
    document.documentElement.style.setProperty('--white', '#333333');
    document.documentElement.style.setProperty('--black', '#ffffff');
    $(".brand-logo img").toggleClass("invert")
  }
  $(".mode").click(function () {
    $(this).toggleClass("dark");
    $(".dark-mode-logo").stop().fadeToggle()
    $(".logo").stop().fadeToggle()
    if ($(this).hasClass("dark")) {
      document.documentElement.style.setProperty('--green', '#1596b3');
      document.documentElement.style.setProperty('--white', '#333333');
      document.documentElement.style.setProperty('--black', '#ffffff');
      $(".brand-logo img").toggleClass("invert")
      localStorage.setItem('mode', 'dark');
    } else {
      document.documentElement.style.setProperty('--green', '#cfdd01');
      document.documentElement.style.setProperty('--white', '#ffffff');
      document.documentElement.style.setProperty('--black', '#000000');
      $(".brand-logo img").toggleClass("invert")
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

  $(".calendly-trigger").click(function () {
    Calendly.initPopupWidget({ url: `https://calendly.com/teamlove/revenue-roadmap-intro?primary_color=${$('.mode').hasClass('dark') ? "1596b3" : "cfde00"}&background_color=${$('.mode').hasClass('dark') ? "333333" : "ffffff"}&text_color=${$('.mode').hasClass('dark') ? "ffffff" : "000000"}` })
  })
  $(".icons").click(function () {
    $(".search-button").stop().fadeToggle()
    $(".cross-button").stop().fadeToggle()
    $("body").toggleClass('no-scroll')
    $(".sidebar").toggleClass('active')
  })
  $(".ginput_container:not(.ginput_container_textarea)").append("<span class='input-highlighter'></span>");

  $(".ginput_container:not(.ginput_container_textarea)").find("input").on("input", function (e) {
    const inputText = e.target.value;
    const inputTextWidth = inputText.length;
    $(this).parent().find(".input-highlighter").text(inputText);
  })
})

