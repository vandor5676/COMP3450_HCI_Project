

/* Navbar Scroll */

$(window).on("scroll", function() {
  console.log("aaa");
  if ($(window).scrollTop() > 100) {
    $(".navbar").addClass("active");
    $(".navbar__item").addClass("active");
    $(".logo").addClass("active");
  } else {
    $(".navbar").removeClass("active");
    $(".navbar__item").removeClass("active");
    $(".logo").removeClass("active");
  }
});

/* Auto Scroll */


/* CSS Transitions */

/* Testimonials */
