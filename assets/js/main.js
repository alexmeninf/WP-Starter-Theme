jQuery(function () {

  ////lazyload images
  // var lazyLoadInstance = new LazyLoad({
  //   elements_selector: ".lazy"
  // });
  
  
  // $("input[type=tel], .mask-phone").on("keyup", function () {
  //   if ($(this).val().length >= 15) {
  //     $(this).mask("(00) 0 0000-0000");
  //   } else {
  //     $(this).mask("(00) 0000-00009");
  //   }
  // })
  // .trigger("keyup");


  //// Light gallery
  // $('#lightgallery').lightGallery({
  //   download: false,
  //   selector: '.img-select'
  // });

  // // animate
  // new WOW().init();

  smoothClick = (duration = 1200) => {
    // smooth scroll
    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function (event) {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
  
        if (target.length) {
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
  
          }, duration);
        }
      }
    });
  }
  
  smoothClick();
});
