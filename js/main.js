
$(document).ready(function(){

  $( window ).resize( function() {

    if ($(window).width() < 975) {

      $("#navbarNav").removeClass("d-flex justify-content-end");

    } else {

      $("#navbarNav").addClass("d-flex justify-content-end");

    }

  });


  $( document ).scroll( function() {

    if ($( document ).scrollTop() > $("#inicio").position().top) {

      $("nav").addClass("navBarTranspa");

    } else {

      $("nav").removeClass("navBarTranspa");

    }

  });

});
