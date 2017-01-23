var skrollr = (function(){

    var skrollr,
        windowWidth;

        skrollr = require('skrollr'),
        windowWidth = $(window).width();

    if(windowWidth > 660){

        var s = skrollr.init({
            forceHeight: false,
            smoothScrolling: true
        });

		window.onload=function(){
			s.refresh();
		};

    }

}());



// function adjustWindow(){
//
//     // Init Skrollr
//     var s = skrollr.init({
//         forceHeight: false,
//         render: function(data) {
//
//             //Debugging - Log the current scroll position.
//             //console.log(data.curTop);
//         }
//     });
//
//     // Get window size
//     winH = $window.height();
//
//     // Keep minimum height 550
//     if(winH <= 550) {
//         winH = 550;
//     }
//
//     // Resize our slides
//     $slide.height(winH);
//
//     // Refresh Skrollr after resizing our sections
//     s.refresh($('.homeSlide'));
//
// }


// var skrollr = require('skrollr');
// //Initialise skrollr
// var s = skrollr.init();
