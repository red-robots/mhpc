/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	
	/*
	*
	*	Current Page Active
	*
	------------------------------------*/
	$("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("active");
        }
	});

	/*
	*
	*	Responsive iFrames
	*
	------------------------------------*/
	var $all_oembed_videos = $("iframe[src*='youtube']");
	
	$all_oembed_videos.each(function() {
	
		$(this).removeAttr('height').removeAttr('width').wrap( "<div class='embed-container'></div>" );
 	
 	});
	
	/*
	*
	*	Flexslider
	*
	------------------------------------*/
	

	$('.flexslider').imagesLoaded( function() {
		$('.flexslider').flexslider({
			animation: "fade"
		}); // end register flexslider
	});
	
	
	/*
	*
	*	Isotope with Images Loaded
	*
	------------------------------------*/
	// var $container = $('#container').imagesLoaded( function() {
 //  	$container.isotope({
 //    // options
	//  itemSelector: '.item',
	// 	  masonry: {
	// 		gutter: 15
	// 		}
 // 		 });
	// });

	/*
	*
	*	Smooth Scroll to Anchor
	*
	------------------------------------*/
	 $('a').click(function(){
	    $('html, body').animate({
	        scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top
	    }, 500);
	    return false;
	});

	
	$('.read-bio').click(function() {
		if($(this).hasClass('toggled-bio')) {
			$(this).prev('.leadership-bio').animate({'max-height': '100'},'fast');
			$(this).removeClass('toggled-bio');
		} else {
			$(this).prev('.leadership-bio').animate({'max-height': '1000'},'fast');
		
			$(this).addClass('toggled-bio');
		}
		
	});
	// $('.read-bio').click(function() {
	// 	$(this).parent('.leadership-bio').animate({'max-height': '100'},'fast');
	// 	$(this).removeClass('hide-bio');
	// 	$(this).addClass('read-bio');
	// });
	


	// $('.read-bio').click(
	// function(){
	//   $(this).parent('.leadership-bio').animate({ "max-height": "1000" }, 'fast');
	// },
	// function() {
	//   $(this).parent('.leadership-bio').animate({ "max-height": "100" }, 'fast');
	// });

	
	/*
	*
	*	Equal Heights Divs
	*
	------------------------------------*/
	$('.blocks').matchHeight();
	$('.js-blocks').matchHeight();

	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();


	

// splash page hovers 

$('#mhpc').mouseenter(function() {
   $(this).animate({marginTop : '0px'}, 'fast');
});
$('#mhpc').mouseleave(function() {
   $(this).animate({marginTop : '5px'}, 'fast');
});
$('#smat').mouseenter(function() {
   $(this).animate({marginTop : '0px'}, 'fast');
});
$('#smat').mouseleave(function() {
   $(this).animate({marginTop : '5px'}, 'fast');
});





        $('#location-map area').each(function() {
            var id = $(this).attr('id');
            $(this).mouseover(function() {
                $('#overlay'+id).show();

            });

            $(this).mouseout(function() {
                var id = $(this).attr('id');
                $('#overlay'+id).hide();
            });

        });
		
	/*	
		$('a#burke').mouseenter(function() {
    			$(this).css({'display' : "none"});
		});
		
		
		$('li').click(function() {
	
		$(this).addClass('needred');
	});
	*/
	
	
	
	
	// colorbox	
	$(".inline").colorbox({inline:true, width:"90%"});
	
	
	
	$('#map').mapster({
    fillOpacity: 0.5,
    render_highlight: {
        fillColor: 'ffffff',
        stroke: false,
        //altImage: 'examples/images/usa_map_720_alt_4.jpg'
    }});
	
	
$('#countyburke').mouseover(function(e) {
$('#burke').mouseover();
}).mouseout(function(e) {
$('#burke').mouseout();
 }).click(function(e) { e.preventDefault(); });

	


	
// this is dfor the isotope jquery for the blog roll
  // we load it int eh alpha container and spit it out in the beta container
  var $alpha = $('#alpha');
  var $container = $('#beta');
  var $checkboxes = $('#filters input');
  
  // init isotope, then insert all items from hidden #alpha
 
 
  $container.isotope({
  	itemSelector: '.blog-square',
	  masonry: {
  			//columnWidth: 310
		},
		filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
  })
  
  .isotope( 'insert', $alpha.find('.blog-square') );
  
  $('.filter a').click(function(){
        $('.filter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    });
			
/*	$container.append(divs).isotope('appended', divs, function () {
    $container.isotope('reLayout');
	});	*/

	

	

	

});// END #####################################    END