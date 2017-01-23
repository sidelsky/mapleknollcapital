(function(){

    "use strict";

    $.extend($.easing, {
      def: 'easeInOutQuart',
        easeInOutQuart: function (x, t, b, c, d) {
          if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
          return -c / 2 * ((t -= 2) * t * t * t - 2) + b;
        }
      });

    var $postContainer,
        $postLink,
        //spinLoader,
        post_link,
        $ctaContainer,
        $closeIcon;

        $closeIcon = $('.close');

        console.log($closeIcon);

        $ctaContainer = $('.cta');

        // Spin loader icon
        //spinLoader = $("<div class='loader-wrap'><span class='ajax-loader'><img src='/wp-content/themes/mapleknollcapital/assets/build/img/preloader.gif' alt='Loading...' class='ajax-loader__image'></span></div>");

        // Container loads the post content into it
        $postContainer = $('[data-post-container]');

        // Link to post content
        $postLink = $('[data-post-link]');

        $.ajaxSetup({
            cache: false,
            // When success
            success: function() {
                //console.log('success');
                scrollToTop();
                hideCta();
                //getPostSlug();
            },
            // When error
            error: function() {
              //console.log('error');
            },
            // When complete
            complete: function() {
                 //console.log('complete');
             }
        });

        // $postLink.click(function() {
        //
        //     post_link = $(this).attr("href");
        //     //console.log(post_link);
        //     $postContainer.html(spinLoader);
        //     $postContainer.load(post_link);
        //
        // return false;
        //
        // });

        $postLink.on('click', handlePostLink);

        $(document).on('click', '.close', function(event){
            event.preventDefault();
            showCta();
            hidePostContent();
        });

        function handlePostLink() {
            post_link = $(this).attr("href");
            //$postContainer.html(spinLoader);
            $postContainer.load(post_link);
            $postContainer.removeClass('js-hide');
            showPostContent();
            return false;
        }

        function getPostSlug() {
            if(history.replaceState) {
                //history.replaceState(null, null, '#' + post_slug);
                history.replaceState(null, null, '' + post_slug);
            } else {
                location.hash = '#' + post_slug;
            }
        }

        function scrollToTop() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
        }

        function hideCta() {
            $ctaContainer.slideUp(600, 'easeInOutQuart', function() {
                console.log('complete');
            });
        }

        function showCta() {
            console.log('showCta');
            $ctaContainer.slideDown(600, 'easeInOutQuart', function() {
                console.log('complete');
            });
        }

        function showPostContent() {
            $postContainer.slideDown(600, 'easeInOutQuart', function() {
                console.log('complete');
            });
        }

        function hidePostContent() {
            $postContainer.slideUp(600, 'easeInOutQuart', function() {
                console.log('complete');
            });
        }


}());
