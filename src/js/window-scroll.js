(function(){

    "use strict";

    var $header = $('[data-page-header]');

    //Detect top if window to animate header in
    $(window).on('scroll', function() {

    //console.log('Is scrolling');

      var scrollTop = $(this).scrollTop();

      $('#top').each(function() {

        var topDistance = $(this).offset().top;

        if ( (topDistance+0) < scrollTop ) {
            $header.addClass('js-is-active');
        } else {
            $header.removeClass('js-is-active');
        }
      });


    });


}());
