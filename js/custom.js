jQuery(document).ready(function() {
	// Tooltip
//	 $('[data-toggle="tooltip"]').tooltip()

	 // Navigation Slider
	//  jQuery('.nav').menu({'effect' : 'slide'});


//	 //Function to animate slider captions
//	function doAnimations( elems ) {
//		//Cache the animationend event in a variable
//		var animEndEv = 'webkitAnimationEnd animationend';
//
//		elems.each(function () {
//			var $this = $(this),
//				$animationType = $this.data('animation');
//			$this.addClass($animationType).one(animEndEv, function () {
//				$this.removeClass($animationType);
//			});
//		});
//	}
//
//	//Variables on page load
//	var $myCarousel = $('#carousel-example-generic'),
//		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
//
//	//Initialize carousel
//	$myCarousel.carousel();
//
//	//Animate captions in first slide on page load
//	doAnimations($firstAnimatingElems);
//
//	//Pause carousel
//	$myCarousel.carousel('pause');
//
//
//	//Other slides to be animated on carousel slide event
//	$myCarousel.on('slide.bs.carousel', function (e) {
//		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
//		doAnimations($animatingElems);
//	});
//    $('#carousel-example-generic').carousel({
//        interval:3000,
//        pause: "false"
//    });
    
    $('#news-box-slide').owlCarousel( {
		loop: true,
		center: true,
        lazyLoad: true,
		items: 3,
		margin: 30,
		autoplay: true,
		dots:true,
        nav:false,
		autoplayTimeout: 8500,
		smartSpeed: 450,
        //navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			1170: {
				items: 3
			}
		}
	});
    
    var owl = $('.owl-carousel');
        owl.owlCarousel();
        // Go to the next item
        $('.owl-nextbtn').click(function() {
            owl.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('.owl-prevbtn').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl.trigger('prev.owl.carousel', [300]);
        })

}); // End Jquery User
