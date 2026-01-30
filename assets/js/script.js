/*-----------------------------------------------------------------------------------
    Template Name: Oxence - Web Design Company HTML Template
    Template URI: https://webtend.net/demo/html/oxence/
    Author: WebTend
    Author URI:  https://webtend.net/
    Version: 1.0

    Note: This is Main JS File.
-----------------------------------------------------------------------------------
	CSS INDEX
	===================
    01. Header Style
    02. Dropdown menu
    03. Submenu Dropdown
    04. Menu Hidden
    05. Search Box
    06. Video Popup
    07. Video Btn with text
    08. Main Slider
    09. Team Member
    10. Feedback Slider Two
    11. Project Three Slider
    12. Testimonial Two Slider
    13. Fact Counter
    14. Project Filtering
    15. Team Filtering
    16. Shop Filtering
    17. Team skill Counter
    19. Quantity Number
    20. Scroll to Top
    21. Nice Select
    22. WOW Animation
    23. OnePage Nav
    24. Preloader
-----------------------------------------------------------------------------------*/

(function ($) {

    "use strict";

    $(document).ready(function () {

        // 01. Header Style and Scroll to Top
        function headerStyle() {
            if ($('.main-header').length) {
                var windowpos = $(window).scrollTop();
                var siteHeader = $('.main-header');
                var scrollLink = $('.scroll-top');
                if (windowpos >= 250) {
                    siteHeader.addClass('fixed-header');
                    scrollLink.fadeIn(300);
                } else {
                    siteHeader.removeClass('fixed-header');
                    scrollLink.fadeOut(300);
                }
            }
        }
        headerStyle();
        
        
        // 02. Dropdown menu
        var mobileWidth = 992;
        var navcollapse = $('.navigation li.dropdown');

        navcollapse.on('mouseenter', function () {
            if ($(window).innerWidth() >= mobileWidth) {
                var $this = $(this);
                clearTimeout($this.data('dropdownTimer'));
                $this.children('ul').stop(true, false, true).slideDown(300);
                $this.children('.megamenu').stop(true, false, true).slideDown(300);
            }
        }).on('mouseleave', function () {
            if ($(window).innerWidth() >= mobileWidth) {
                var $this = $(this);
                var timer = setTimeout(function() {
                    $this.children('ul').stop(true, false, true).slideUp(300);
                    $this.children('.megamenu').stop(true, false, true).slideUp(300);
                }, 200);
                $this.data('dropdownTimer', timer);
            }
        });
        
        // 03. Submenu Dropdown Toggle
        if ($('.main-header .navigation li.dropdown ul').length) {
            $('.main-header .navigation li.dropdown').append('<div class="dropdown-btn"><span class="fas fa-chevron-down"></span></div>');

            //Dropdown Button
            $('.main-header .navigation li.dropdown .dropdown-btn').on('click', function () {
                $(this).prev('ul').slideToggle(500);
                $(this).prev('.megamenu').slideToggle(800);
            });
            
            //Disable dropdown parent link
            $('.navigation li.dropdown > a').on('click', function (e) {
                e.preventDefault();
            });
        }
        
        //Submenu Dropdown Toggle
        if ($('.main-header .main-menu').length) {
            $('.main-header .main-menu .navbar-toggle').click(function () {
                $(this).prev().prev().next().next().children('li.dropdown').hide();
            });
        }
        
        
         
        // 04. Menu Hidden Sidebar Content Toggle
        if($('.menu-sidebar').length){
            //Show Form
            $('.menu-sidebar').on('click', function(e) {
                e.preventDefault();
                $('body').toggleClass('side-content-visible');
            });
            //Hide Form
            $('.hidden-bar .inner-box .cross-icon,.form-back-drop,.close-menu').on('click', function(e) {
                e.preventDefault();
                $('body').removeClass('side-content-visible');
            });
            //Dropdown Menu
            $('.fullscreen-menu .navigation li.dropdown > a').on('click', function() {
                $(this).next('ul').slideToggle(500);
            });
        }
         
        
        // 05. Search Box
		$('.nav-search > button').on('click', function () {
			$('.nav-search form').toggleClass('hide');
		});
        
        
        // Hide Box Search WHEN CLICK OUTSIDE
		if ($(window).width() > 767){
			$('body').on('click', function (event) {
				if ($('.nav-search > button').has(event.target).length == 0 && !$('.nav-search > button').is(event.target)
					&& $('.nav-search form').has(event.target).length == 0 && !$('.nav-search form').is(event.target)) {
					if ($('.nav-search form').hasClass('hide') == false) {
						$('.nav-search form').toggleClass('hide');
					};
				}
			});
		}
        
        
        // 06. Video Popup
        if ($('.video-play').length) {
            $('.video-play').magnificPopup({
                type: 'video',
            });
        } 
        
        
        // 07. Video Btn with text
        if ($('.video-play-text').length) {
            $('.video-play-text').magnificPopup({
                type: 'video',
            });
        } 
         
        
        // 08. Main Slider
        if ($('.main-slider-active').length) {
            $('.main-slider-active').slick({
                infinite: true,
                arrows: false,
                dots: true,
                fade: true,
                autoplay: true,
                autoplaySpeed: 5000,
                pauseOnHover: false,
                slidesToScroll: 1,
                slidesToShow: 1,
                appendDots: '.main-slider-dots',
            });
        }
          
        
        // 09. Team Member
        if ($('.team-slider-active').length) {
            $('.team-slider-active').slick({
                dots: true,
                infinite: true,
                autoplay: false,
                autoplaySpeed: 2000,
                arrows: false,
                speed: 1000,
                focusOnSelect: false,
                slidesToShow: 4,
                slidesToScroll: 2,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });
        }
        
        
        
        // 10. Feedback Slider Two
        if ($('.feedback-active').length) {
            $('.feedback-active').slick({
                dots: true,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 5000,
                arrows: false,
                centerMode: false,
                speed: 1000,
                slidesToShow: 3,
                slidesToScroll: 2,
                responsive: [
                    {
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });
        }
        
        
        // 11. Project Three Slider
        if ($('.project-three-active').length) {
            $('.project-three-active').slick({
                dots: true,
                infinite: true,
                autoplay: false,
                autoplaySpeed: 5000,
                arrows: false,
                centerMode: false,
                speed: 1000,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });
        }
        
        $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
          $('.project-three-active').slick('setPosition');
        })
        
        
        // 12. Testimonial Two Slider
        if ($('.testimonial-two-active').length) {
            $('.testimonial-two-active').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                speed: 400,
                autoplay: false,
                autoplaySpeed: 5000,
                prevArrow: $('.work-prev'),
                nextArrow: $('.work-next'),
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
        }
        
        
         /* 13. Fact Counter + Text Count - Our Success */
        if ($('.counter-text-wrap').length) {
            // IntersectionObserver para ativar contadores quando visíveis
            var counterObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var $t = $(entry.target),
                            n = $t.find(".count-text").attr("data-stop"),
                            r = parseInt($t.find(".count-text").attr("data-speed"), 10) || 1000;
                        if (!$t.hasClass("counted")) {
                            $t.addClass("counted");
                            $({countNum: 0}).animate({countNum: n}, {
                                duration: r,
                                easing: "linear",
                                step: function() { $t.find(".count-text").text(Math.floor(this.countNum)); },
                                complete: function() { $t.find(".count-text").text(this.countNum); }
                            });
                        }
                        counterObserver.unobserve(entry.target);
                    }
                });
            }, {threshold: 0.5});
            $('.counter-text-wrap').each(function() { counterObserver.observe(this); });
        }
        
        
        // 14. Project Filtering
        $(".project-filter li").on('click', function () {
            $(".project-filter li").removeClass("current");
            $(this).addClass("current");

            var selector = $(this).attr('data-filter');
            $('.project-active').imagesLoaded(function () {
                $(".project-active").isotope({
                    itemSelector: '.item',
                    filter: selector,
                });
            });

        });
        
        
        // 15. Team Filtering
        $(".team-filter li").on('click', function () {
            $(".team-filter li").removeClass("current");
            $(this).addClass("current");

            var selector = $(this).attr('data-filter');
            $('.team-active').imagesLoaded(function () {
                $(".team-active").isotope({
                    itemSelector: '.item',
                    filter: selector,
                });
            });

        });
        
        // 16. Shop Filtering
        $(".shop-filter li").on('click', function () {
            $(".shop-filter li").removeClass("current");
            $(this).addClass("current");

            var selector = $(this).attr('data-filter');
            $('.shop-active').imagesLoaded(function () {
                $(".shop-active").isotope({
                    itemSelector: '.item',
                    filter: selector,
                });
            });

        });
        
        
        /* 17. Team skill Counter */
		// Circle Progress - usando IntersectionObserver em vez de appear.js
		if ($.fn.circleProgress) {
			var progressConfigs = [
				{selector: '.one.progress-content', value: 0.8, fill: "#3180fc", emptyFill: "#eaf2ff", percent: 89},
				{selector: '.two.progress-content', value: 0.76, fill: "#f1b000", emptyFill: "#fdf3d9", percent: 76},
				{selector: '.three.progress-content', value: 0.63, fill: "#16b4f2", emptyFill: "#e7f7fe", percent: 63},
				{selector: '.four.progress-content', value: 0.58, fill: "#c400fc", emptyFill: "#f9e5ff", percent: 58}
			];
			var progressObserver = new IntersectionObserver(function(entries) {
				entries.forEach(function(entry) {
					if (entry.isIntersecting && !$(entry.target).data('animated')) {
						$(entry.target).data('animated', true);
						var cfg = $(entry.target).data('cfg');
						$(entry.target).circleProgress({
							value: cfg.value, size: 130, thickness: 7, fill: cfg.fill,
							lineCap: 'square', emptyFill: cfg.emptyFill, startAngle: -Math.PI / 4 * 2, animation: {duration: 2000}
						}).on('circle-animation-progress', function(event, progress) {
							$(this).find('h3').html(Math.round(cfg.percent * progress) + '<span>%</span>');
						});
						progressObserver.unobserve(entry.target);
					}
				});
			}, {threshold: 0.5});
			progressConfigs.forEach(function(cfg) {
				$(cfg.selector).each(function() {
					$(this).data('cfg', cfg);
					progressObserver.observe(this);
				});
			});
		}
        
        
        // 19. Quantity Number js
        $('.quantity-down').on('click', function(){
            var numProduct = Number($(this).next().val());
            if(numProduct > 1) $(this).next().val(numProduct - 1);
        });
        $('.quantity-up').on('click', function(){
            var numProduct = Number($(this).prev().val());
            $(this).prev().val(numProduct + 1);
        });
        

        
        // 20. Scroll to Top
        if ($('.scroll-to-target').length) {
            $(".scroll-to-target").on('click', function () {
                var target = $(this).attr('data-target');
                // animate
                $('html, body').animate({
                    scrollTop: $(target).offset().top
                }, 1000);

            });
        }
        
        
        // 21. Nice Select
        $('.select').niceSelect();
        
        
        // 22. WOW Animation - REMOVIDO para melhorar PageSpeed
        
        
        // 23. OnePage Nav Scroll - apenas para links com âncora (#)
        $(".onepage a").on('click', function(e){
            var hash = this.hash;
            if (hash && $(hash).length) {
                e.preventDefault();
                var position = $(hash).offset().top;
                $("html").animate({
                    scrollTop : position
                },1000);
            }
        });
        
 
    });
    
    
    /* ==========================================================================
       When document is resize, do
       ========================================================================== */

    $(window).on('resize', function () {
        var mobileWidth = 992;
        var navcollapse = $('.navigation li.dropdown');
        navcollapse.children('ul').hide();
        navcollapse.children('.megamenu').hide();

    });


    /* ==========================================================================
       When document is scroll, do
       ========================================================================== */

    $(window).on('scroll', function () {

        // Header Style and Scroll to Top
        function headerStyle() {
            if ($('.main-header').length) {
                var windowpos = $(window).scrollTop();
                var siteHeader = $('.main-header');
                var scrollLink = $('.scroll-top');
                if (windowpos >= 100) {
                    siteHeader.addClass('fixed-header');
                    scrollLink.fadeIn(300);
                } else {
                    siteHeader.removeClass('fixed-header');
                    scrollLink.fadeOut(300);
                }
            }
        }

        headerStyle();

    });

    /* ==========================================================================
       When document is loaded, do
       ========================================================================== */

    $(window).on('load', function () {

        // 24. Preloader
        function handlePreloader() {
            if ($('.preloader').length) {
                $('.preloader').delay(200).fadeOut(500);
            }
        }
        handlePreloader();
        
        
        
        // 14. Project Filtering
        if ($('.project-active').length) {
            $(this).imagesLoaded(function () {
                $('.project-active').isotope({
                    // options
                    itemSelector: '.item',
                });
            });
        }
          
        
        // 15. Team Filtering
        if ($('.team-active').length) {
            $(this).imagesLoaded(function () {
                $('.team-active').isotope({
                    // options
                    itemSelector: '.item',
                });
            });
        }
          
        
        // 16. Shop Filtering
        if ($('.shop-active').length) {
            $(this).imagesLoaded(function () {
                $('.shop-active').isotope({
                    // options
                    itemSelector: '.item',
                });
            });
        }
          
        
    });

})(window.jQuery);
