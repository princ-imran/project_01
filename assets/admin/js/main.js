/**
* ---------------------------------------------------------------------------
Author: princ-imran
Version: 1.0
* --------------------------------------------------------------------------- 
*/

(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {

        /*---------------------------------------------------
                    Session Alert
        ---------------------------------------------------*/
        $(document).ready(function () {
            $('.alert').delay(2000).fadeOut(1000, function () {
                $(this).alert('close');
            });
        });

        /*---------------------------------------------------
                    ScrollTop
        ---------------------------------------------------*/

        $('#scrollTop').on('click', function () {
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
            return false;
        });

        /*---------------------------------------------------
                    Slicknav
        ---------------------------------------------------*/

        $('#nav').slicknav({
            prependTo: ".responsive-menu-wrap"
        });

    });

    jQuery(window).load(function () {


    });

}(jQuery));