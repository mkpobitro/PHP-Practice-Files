//model js
(function($) {
    "use strict";
    //NIVO LIGHTBOX
    var ibox = $(".iso-box-section a");
    ibox.nivoLightbox({
        effect: 'fadeScale',
    });

    //ISOTOPE FILTER
    if ($('.iso-box-wrapper').length > 0) {

        var $container = $('.iso-box-wrapper'),
            $imgs = $('.iso-box img');

        $container.imagesLoaded(function() {

            $container.isotope({
                layoutMode: 'fitRows',
                itemSelector: '.iso-box'
            });
        });


        //filter items on button click
        var fwpr = $(".filter-wrapper li a");
        fwpr.on("click", function() {

            var $this = $(this),
                filterValue = $this.attr('data-filter');

            $container.isotope({
                filter: filterValue,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            });


            // don't proceed if already selected 
            if ($this.hasClass('selected')) {
                return false;
            }

            var filter_wrapper = $this.closest('.filter-wrapper');
            filter_wrapper.find('.selected').removeClass('selected');
            $this.addClass('selected');

            return false;
        });
    }

    //Google Map
    var gm = $("#google-map");
    var get_latitude = gm.data('latitude');
    var get_longitude = gm.data('longitude');

    function initialize_google_map() {
        var myLatlng = new google.maps.LatLng(get_latitude, get_longitude);
        var mapOptions = {
            zoom: 14,
            scrollwheel: false,
            center: myLatlng
        };
        var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize_google_map);

})(jQuery);