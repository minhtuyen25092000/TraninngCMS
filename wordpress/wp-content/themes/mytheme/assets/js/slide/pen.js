$(function () {
    // Owl Carousel
    var owl = $(".owl-carousel");
    owl.owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      autoplay: true,
      autoplayTimeout: 2000,
      smartSpeed: 2000,
      animateOut: "slideOutLeft",
      animateIn: "slideInRight" });
  
  });