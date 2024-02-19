window.addEventListener('DOMContentLoaded', (event) => {

    jQuery(function () {
        //jquery start





        //header menu start


        function mmHeaderMenu() {
            function hm() {
                var $headerMenuTrigger = jQuery('.header-menu-trigger');
                var $headerMenu = jQuery('nav#header-menu');

                function compbox() {
                    var $screenWidth = jQuery(window).width();
                    if ($screenWidth > 767) {
                        jQuery('.compbox').hide();
                    } else {
                        jQuery('.compbox').show();
                    }
                }
                compbox();


                //open header menu
                jQuery($headerMenuTrigger).on('click', function () {
                    var $headerMenuClose = '<div class="header-menu-close"><i class="fas fa-times"></i></div>';
                    jQuery($headerMenu).prepend($headerMenuClose);
                    jQuery($headerMenu).addClass('active');
                    jQuery('body').addClass('no-scroll');


                    //close header menu
                    jQuery('.header-menu-close, nav#header-menu.active').on('click', function () {
                        jQuery($headerMenu).removeClass('active');
                        jQuery('.header-menu-close').remove();
                        jQuery('body').removeClass('no-scroll');
                    });




                });
            }
            hm();
            jQuery(window).resize(function () {
                hm();
                compbox();
            });
        }
        mmHeaderMenu();



        //header menu end




        //jquery end

    });


});