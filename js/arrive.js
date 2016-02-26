$(function () {
    $('[data-toggle="popover"]').popover();
});

$(document).ready(function () {
    'use strict'
    $('.media-left').on('mouseenter', function () {
        $(this).find('.drop-photo').slideToggle();
    });
});