(function ($) {
    $(document).ready(function() {
        $site.init();
    });

    var $site = {
        init: function () {
            this._initFP();
        },
        
        _initFP: function () {
            $('#wrapper').fullpage({
                verticalCentered: false,
                css3: true,
                scrollingSpeed: 800,
                // scrollBar: true
                // ,
                scrollOverflow: true,
                scrollOverflowOptions: {
                    scrollbars: true,
                    mouseWheel: true,
                    hideScrollbars: false,
                    fadeScrollbars: false,
                    disableMouse: true
                }
            });
        }
    };

})(jQuery);