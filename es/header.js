;$(() => {
    //Hamburger menu
    const $hamburger = $('.hamburger');
    const $menu = $('.menu');
    const $pageBody = $('body');

    $hamburger.on('click', () => {
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
