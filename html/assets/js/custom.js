(function ($) {
    "use strict";
    


    window.onscroll = function() {myFunction()};

      var navbar = document.getElementById("navbar");
      var sticky = navbar.clientHeight;

      function myFunction() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky")
        } else {
          navbar.classList.remove("sticky");
        }

    }

    /* Counter */
    $('.count').each(function () {
        $(this).prop('Counter',0).animate({
          Counter: $(this).text()
        },  {
          duration: 10000,
          easing: 'swing',
          step: function (now) {
              $(this).text(Math.ceil(now));
            }
        });
    });

    /* ---- Owl Carousel ----- */

    /* Home Page One Slider */

    $('#owl-demo').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:true,
        autoplaySpeed:1000,
        navText : ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"], 
        responsive:{
            0:{
                items:1,
                nav:false,
                dots:true
            },
            600:{
                items:1,
                nav:false,
                dots:true
            },
            1000:{
                items:1
            }
        }
    })
 
    /* Logistics Slider for */

    $('#logistics-carousel-one').owlCarousel({
        loop:true,
        margin:20,
        dots:false,
        autoplay:false,
        responsiveClass:true,
        autoplaySpeed:1000,
        navText : ["<span class='flaticon-left-arrow'></span>","<span class='flaticon-right-arrow'></span>"],
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:true
            },
            1000:{
                items:3,
                nav:true,
                loop:false,
                autoplay:false,
                autoplaySpeed:1000
            }
        }
    })

    $('#logistics-carousel-two').owlCarousel({
        loop:true,
        margin:20,
        dots:false,
        autoplay:false,
        responsiveClass:true,
        autoplaySpeed:1000,
        navText : ["<span class='flaticon-left-arrow'></span>","<span class='flaticon-right-arrow'></span>"],
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:true
            },
            1000:{
                items:3,
                nav:true,
                loop:false,
                autoplay:false,
                autoplaySpeed:1000
            }
        }
    })

    $('#logistics-carousel-three').owlCarousel({
        loop:true,
        margin:20,
        dots:false,
        autoplay:false,
        responsiveClass:true,
        autoplaySpeed:1000,
        navText : ["<span class='flaticon-left-arrow'></span>","<span class='flaticon-right-arrow'></span>"],
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:true
            },
            1000:{
                items:3,
                nav:true,
                loop:false,
                autoplay:false,
                autoplaySpeed:1000
            }
        }
    })



    $('#content-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        autoplay:true,
        autoplaySpeed:1000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

    /* Testimonial Slider */

    $('#testimonial-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:true,
        autoplaySpeed:1000,
        navText : ["<i class='fas fa-arrow-left fa-2x'></i>","<i class='fas fa-arrow-right fa-2x'></i>"], 
        responsive:{
            0:{
                items:1,
                nav:false,
                dots:true
            },
            600:{
                items:1
            },
            1000:{
                items:2
            }
        }
    })

    /* Feature Slider */

    $('#feature-carousel').owlCarousel({
        loop:true,
        margin:50,
        nav:true,
        dots:true,
        autoplay:true,
        autoplaySpeed:1000,
        navText : ["<i class='fas fa-angle-left fa-2x'></i>","<i class='fas fa-angle-right fa-2x'></i>"], 
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:2
            }
        }
    });

    /* Team Slider */
    
    $('#team-carousel').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        dots:false,
        autoplay:true,
        autoplaySpeed:1000,
        navText : ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"], 
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

})(jQuery);