$(document).ready(function() {

  $(".dropdown").hover(
      function() { $('.dropdown-menu', this).fadeIn();
      },
      function() { $('.dropdown-menu', this).fadeOut();
  });

  // main slider
  $("#owl-main-carousel").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem: true,
      autoHeight : true,
      mouseDrag: false
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });

  //testimonials silder
  $("#owl-testimonials").owlCarousel({
    singleItem: true,
    autoPlay: true
  });

  // partners slider
  var partners = $("#owl-partners"); 
  partners.owlCarousel({
      pagination:false
  });

  // Custom Navigation Events
  $(".partners-next").click(function(){
    partners.trigger('owl.next');
  });
  $(".partners-prev").click(function(){
    partners.trigger('owl.prev');
  });
 
});