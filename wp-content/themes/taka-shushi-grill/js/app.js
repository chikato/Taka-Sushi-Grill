(function ($) {
    $(document).ready(function() {
        $site.init();
    });

    var $site = {
        init: function () {
            this._initFP();
        },
        
        _initFP: function () {
            $('#fullpage').fullpage({
                verticalCentered: false,
                css3: true,
                scrollingSpeed: 1000,
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