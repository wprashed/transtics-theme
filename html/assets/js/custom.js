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

    /* Gallery */
    $('.main-iso').isotope({
        itemSelector: '.item',
        layoutMode: 'fitRows'
    });
    // Isotope click function
    $('.iso-nav ul li').click(function(){
        $('.iso-nav ul li').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $('.main-iso').isotope({
            filter: selector
        });
        return false;
    });

    //Video popup
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        preloader: true
    });

    /* Map */
    var locations = [
    ['City Hill', -35.2809657, 149.128028, 'Canberra ACT 2601, Australia'],
    ['The Barracks Games & Tech Centre', -35.2795037, 149.1284295, 'Canberra ACT 2601, Australia'],
    ['Waldorf Canberra Apartment Hotel', -35.2813263, 149.1306576, 'Canberra ACT 2601, Australia'],
    ['Llewellyn Hall', -35.280574, 149.1234286, 'Canberra ACT 2601, Australia'],
    ['ANU School of Art & Design', -35.2808368, 149.1223682, 'Canberra ACT 2601, Australia']
    ];

    function initialize() {

        var myOptions = {
            center: new google.maps.LatLng(33.890542, 151.274856),
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [{
                "featureType": "all",
                "elementType": "geometry.fill",
                "stylers": [{
                    "weight": "2.00"
                }]
            },
                {
                    "featureType": "all",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#9c9c9c"
                    }]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text",
                    "stylers": [{
                        "visibility": "on"
                    }]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [{
                        "color": "#f2f2f2"
                    }]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#ffffff"
                    }]
                },
                {
                    "featureType": "landscape.man_made",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#ffffff"
                    }]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [{
                        "saturation": -100
                    },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#eeeeee"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#7b7b7b"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "color": "#ffffff"
                    }]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "simplified"
                    }]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#e3e3e3"
                    }]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#bbbbbb"
                    }]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [{
                        "color": "#46bcec"
                    },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#ffdcdc"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#070707"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "color": "#ffffff"
                    }]
                }
            ]

        };
        var map = new google.maps.Map(document.getElementById("default-2"),
                myOptions);

        setMarkers(map, locations)

    }



    function setMarkers(map, locations) {

        var marker, i

        for (i = 0; i < locations.length; i++) {

            var loan = locations[i][0]
            var lat = locations[i][1]
            var long = locations[i][2]
            var add = locations[i][3]

            latlngset = new google.maps.LatLng(lat, long);

            var marker = new google.maps.Marker({
                map: map,
                title: loan,
                position: latlngset
            });
            map.setCenter(marker.getPosition())


            // var content = "<p><b>" + loan + "</b><br>" + "" + add + "<br><small>Australia</small></p>";
            var content = `<div class="loca-card">
                    <div class="card-img">
                    <img src="assets/images/map-img.jpg" alt="Map Image"/>
                    </div>
            <div class="map-img-content d-flex justify-content-between">
                    <div class="local-para">
                    <h2>T-Class</h2>
                    <h4>Torrente</h4>
                    <p class="mp">Vessel Detail Information </p class="mp">
            <p class="kg">  
    17.4 kn (32.2 km/h)</p>
           <p> Heading: West</a></p>
            </div>
            <div class="local-info">
                    <p>(2/19)</p>
            </div>
            </div>
            </div>`;

            var infowindow = new google.maps.InfoWindow()

            google.maps.event.addListener(marker, 'click', (function (marker, content, infowindow) {
                return function () {
                    infowindow.color = 'red';
                    infowindow.setContent(content);
                    infowindow.open(map, marker);
                };
            })(marker, content, infowindow));

        }
    }

    document.addEventListener('DOMContentLoaded', initialize);

})(jQuery);