

/* Navbar Scroll */
//
// $(window).on("scroll", function() {
//   console.log("aaa");
//   if ($(window).scrollTop() > 100) {
//     $(".navbar").addClass("active");
//     $(".navbar__item").addClass("active");
//     $(".logo").addClass("active");
//   } else {
//     $(".navbar").removeClass("active");
//     $(".navbar__item").removeClass("active");
//     $(".logo").removeClass("active");
//   }
// });

/* Featured Slider */
$(document).ready(function() {
  $("#myCarousel").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(".carousel-item")
            .eq(i)
            .appendTo(".carousel-inner");
        } else {
          $(".carousel-item")
            .eq(0)
            .appendTo($(this).find(".carousel-inner"));
        }
      }
    }
  });
});

  $(document).ready(function(){
        $("#myModal").modal('show');
  });

  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }
/* Auto Scroll */


/* CSS Transitions */

/* Testimonials */
