(function ($) {
    $(document).ready(function() {
        $site.init();
    });

    var $site = {
        init: function () {
            this._initFP();
            this._initGMap();
            this._initMenuPage();
            this._initEventCountDown();
        },
        
        _initFP: function () {
            $(document).on("scroll",function(){
                if($(document).scrollTop()>1){
                    $("header").addClass("header-stick");
                } else{
                    $("header").removeClass("header-stick");
                }
            });
            var $menuItems = $(".menu li a");

            $.each($menuItems,function () {
                $(this).attr('data',this.innerHTML);
            });

            // $('#wrapper').fullpage({
            //     verticalCentered: false,
            //     css3: true,
            //     scrollingSpeed: 800,
            //     // scrollBar: true
            //     // ,
            //     scrollOverflow: true,
            //     scrollOverflowOptions: {
            //         scrollbars: true,
            //         mouseWheel: true,
            //         hideScrollbars: false,
            //         fadeScrollbars: false,
            //         disableMouse: true
            //     }
            // });
        },

        _initGMap: function () {
            function addMarker(location, map) {
                // Add the marker at the clicked location, and add the next-available label
                // from the array of alphabetical characters.
                new google.maps.Marker({
                    position: location,
                    //label: labels[labelIndex++ % labels.length],
                    map: map
                });
                //inforbunle
                new google.maps.InfoWindow({
                    disableAutoPan: true
                });
            }

            function getLocation() {
                return {
                    lat: parseFloat($(this).attr("data-lat")),
                    lng : parseFloat($(this).attr("data-lng"))
                };
            }

            function initMap() {
                var option = {
                    zoom: 12,
                    scrollwheel: false,
                    center: getLocation.call($("#gMap")[0])
                };


                var map = new google.maps.Map($("#gMap")[0], option);
                addMarker(option.center, map);
            }

            // check if exists
            if(typeof google != 'undefined'){
                google.maps.event.addDomListener(window, 'load', initMap);
            }
        },

        _initMenuPage: function () {
            var $menu = $(".mn-food, .mn-drink");
            var $item_list = $(".item-list");
            $menu.click(function () {
                $menu.removeClass("active");
                var $item_show = $(".item-list.hidden");
                $(this).addClass("active");
                $item_show.animate({
                  opacity : 1
                },400);
                $item_list.toggleClass('hidden');
                $(".item-list.hidden").animate({
                    opacity : 0
                },300,"linear");
            });
        },

        _initEventCountDown : function () {
            $('.event-cover').countdown("2016/07/31/12:00:00", function(event)
            {
                var $this = $(this);
                switch(event.type) {
                    case "seconds":
                    case "minutes":
                    case "hours":
                    case "days":
                    case "weeks":
                    case "daysLeft":
                        $this.find('p.'+event.type).html(event.value);
                        break;
                    case "finished":
                        $this.fadeTo('slow', .5);
                        break;
                }
            });
    }
    };

})(jQuery);