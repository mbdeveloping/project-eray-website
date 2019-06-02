'use strict';

;$(function () {
    //Hamburger menu
    var $hamburger = $('.hamburger');
    var $menu = $('.menu');
    var $pageBody = $('body');

    $hamburger.on('click', function () {
        $hamburger.toggleClass('is-active');
        $menu.toggleClass('active');
        $pageBody.toggleClass('menu-active');
    });

    // new SimpleBar(document.getElementById(''), {
    //     autoHide: true,
    //     classNames: {
    //         // defaults
    //         content: 'simplebar-content',
    //         scrollContent: 'simplebar-scroll-content',
    //         scrollbar: 'simplebar-scrollbar',
    //         track: 'simplebar-track'
    //     }
    // });

    // new SimpleBar($('.custom-scrollbar')[1]);

    // $('.custom-scrollbar').each(element, new SimpleBar);
});
'use strict';

;$(function () {
    var $w = $(window);
    var scene = document.getElementById('scene');

    if (scene) {
        var checkScreenWidth = function checkScreenWidth() {
            if ($w.width() < 992) {
                parallaxInstance.disable();
            } else {
                parallaxInstance.enable();
            }
        };

        var parallaxInstance = new Parallax(scene, {});

        checkScreenWidth();

        $w.on('resize', function () {

            checkScreenWidth();
        });
    }
});
//# sourceMappingURL=../maps/main.js.map
