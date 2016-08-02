(function ($) {
    $(document).ready(function() {
        $site.init();

        $(window).resize(function () {
            $site._initNewsPage();
        });
    });

    var $site = {
        init: function () {
            this._initFP();
            this._initGMap();
            this._initMenuPage();
            this._initEventCountDown();
            this._initNewsPage();
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

            $(".fa-bars").click(function(){
                $("#main").css("left") == "0px" ? $("body").css({overflow: "hidden"}) :  $("body").css({overflow: "auto"});
            });
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
                if (!$(this).hasClass('active')){
                    $menu.removeClass("active");
                    var $item_show = $(".item-list.hidden");
                    $(this).addClass("active");
                    $item_show.animate({
                        opacity : 1
                    },300);
                    $item_list.toggleClass('hidden');
                    $(".item-list.hidden").animate({
                        opacity : 0
                    },200,"linear");
                }

            });
        },

        _initEventCountDown : function () {
            var $event = $('.event-cover');
            var $time = $event.data('time');

            $event.countdown($time, function(event)
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
                        //$this.fadeTo('slow', .5);
                        break;
                }
            });
    },

        _initNewsPage: function() {

            setTimeout(function () {
                var $page = $("#newsPage, .post-page");

                if($page.length > 0) {

                    var marginTop = 0;
                    try {
                        marginTop = parseFloat($page.css('marginTop').replace("px"));
                    } catch(e) {}

                    $page.css({
                        minHeight: $(window).height() - 480 - marginTop - $("#wpadminbar").height()
                    });
                }
            }, 300);
        }
    };

})(jQuery);