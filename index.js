// AOS.init();

AOS.init({
  delay: 200, // values from 0 to 3000, with step 50ms
  duration: 1500, // values from 0 to 3000, with step 50ms
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
});

/* ///////////////////////////////////////////////////////////////////////// */

/* ///////////////////////////////////////////////////////////////////////// */

// Notification

$(function () {
  $(".button-open").hide();
  $(".button-close").bind("click", function () {
    $(".box").hide(10);

    if ($(this).attr("class") == "button-close") {
      $(".button-open").show();
    }
  });
});

$(".button-open").bind("click", function () {
  $(".box").show(1000);
  if ($(this).attr("class") == "button-open") {
    $(".button-open").hide();
  }
});

/* ///////////////////////////////////////////////////////////////////////// */

/* ///////////////////////////////////////////////////////////////////////// */
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  grabCursor: true,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
