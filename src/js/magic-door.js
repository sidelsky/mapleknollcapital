var magicDoorInit = (function(){

    var portfolioItems = $('#portfolio-items li'),
        imageItems = $('.post-thumb'),
        magicDoor = $('#door-frame'),
        url = magicDoor.find('#magic-door').attr('data-url'),
        $ctaContainer = $('[data-cta]'),
        $closeButton;


    /*	When a portfolio item is clicked */
	portfolioItems.click( function (e) {

        //console.log('click');

        //$ctaContainer.addClass('js-hide');

        //console.log('click');

		if(!$(this).hasClass('active')) {

			portfolioItems.removeClass('active');

			$(this).addClass('active').removeClass('not-active');

            portfolioItems.not('.active').addClass('not-active');

			var postId = $(this).attr('id').split('portfolio-')[1];

			getPortfolio(postId);

		}

		e.preventDefault();

	});

	function changeNextPrev(postId) {

		var next = getNext(postId),
            prev = getPrev(postId);

		$('#next-post').attr('data-id', next);
		$('#prev-post').attr('data-id', prev);
	}

	function getPortfolio(postId, dontGet) {

		if(!dontGet)
			dontGet = false;

		var next = getNext(postId),
            prev = getPrev(postId);

		if(dontGet == false) {

			var loader = $('#loading');

			loader.fadeIn(200);

			//Comment out to prevent door closing
			closeDoor();

			magicDoor.find('#magic-door').load(url, {
				id: postId,
				next: next,
				prev: prev
			}, function() {

                portfolioInit();
                openDoor();

                loader.fadeOut(300);

			});

		}

        var $doc = $("html, body");

        $doc.animate({
            scrollTop: 0
        }, 500, 'easeInOutQuart');

	}


    // Closes the door when user selects another item
	function closeDoor() {

        //console.log('closed');

		if(magicDoor.height() !== 0 ) {

			magicDoor.find('.magic-inner').stop(true).animate({
				opacity: 0
			}, 500, 'easeInOutQuart');

			magicDoor.stop(true).animate({
				height: 0
			}, 500, 'easeInOutQuart');
		}

	}

	function openDoor() {

		magicDoor.stop(true).animate({
			height: magicDoor.find('#magic-door').outerHeight()
		}, 500, 'easeInOutQuart', function () {

			magicDoor.css({
                height: 'auto'
			});

            $ctaContainer.slideUp(300, 'easeInOutQuart');

		});
	}

	//openDoor();

	function getNext(postId) {

		var next = $('#portfolio-items li.visible').first().attr('id').split('portfolio-')[1];

		//has next var
		var hasNext = $('#portfolio-' + postId).next();

        //console.log(hasNext);

		//if there is a next object
		if(hasNext.length !== 0) {

			while(hasNext.hasClass('visible') === false && hasNext.length !== 0) {
				hasNext = hasNext.next();
			}

			if(hasNext.length !== 0) {
				next = hasNext.attr('id').split('portfolio-')[1];
			}
		}

        console.log(next);

		return next;
	}

	function getPrev(postId) {

		var prev = $('#portfolio-items li.visible').last().attr('id').split('portfolio-')[1];

		//has next var
		var hasPrev = $('#portfolio-' + postId).prev();

		//if there is a next object
		if(hasPrev.length !== 0) {

			while(hasPrev.hasClass('visible') === false && hasPrev.length !== 0) {
				hasPrev.prev();
			}

			if(hasPrev.length !== 0) {
				hasPrev.attr('id').split('portfolio-')[1];
			}
		}

        console.log(prev);

		return prev;
	}

	//Initialize the portfolio
	function portfolioInit() {

		$('#next-post, #prev-post').click( function() {

			var postId = $(this).attr('data-id');

			portfolioItems.removeClass('active').removeClass('not-active');

			$('#portfolio-' + postId).addClass('active');

            portfolioItems.not('.active').addClass('not-active');

			getPortfolio(postId);

			return false;

		});


        $closeButton = $('.close');

		$closeButton.click( function() {

            $ctaContainer.slideDown(300, 'easeInOutQuart');

			magicDoor.stop().animate({
				height: 0
			}, 500, 'easeInOutQuart', function() {
				portfolioItems.removeClass('active').removeClass('not-active');
			});


			return false;

		});
	}

}());


/*-----------------------------------------------------------------------------------*/
/*	Plugins!
/*-----------------------------------------------------------------------------------*/
$.extend($.easing, {
  def: 'easeInOutQuart',
    easeInOutQuart: function (x, t, b, c, d) {
      if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
      return -c / 2 * ((t -= 2) * t * t * t - 2) + b;
    }
  });
