jQuery(document).ready(function ($) {
    $('.image-scrolling').addClass("hidden-img").viewportChecker({
        classToAdd: 'visible-img animated fadeIn', // Class to add to the elements when they are visible
        repeat: true,
        removeClassAfterAnimation: false,
        offset: 200
    });
});

