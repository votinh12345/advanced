$(document).ready(function () {
    jQuery('#sliderlayer330983624').revolution(
            {
                delay: 9000,
                startheight: 640,
                startwidth: 1620,
                hideThumbs: 200,
                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 5,
                navigationType: "bullet",
                navigationArrows: "verticalcentered",
                navigationStyle: "round",
                navOffsetHorizontal: 0,
                navOffsetVertical: 20,
                touchenabled: "off",
                onHoverStop: "off",
                shuffle: "off",
                stopAtSlide: -1,
                stopAfterLoops: -1,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                hideSliderAtLimit: 0,
                fullWidth: "off",
                shadow: 0
            });
    jQuery("#offcanvasmenu").html($("#bs-megamenu").html());
    var active = $('.collapse.in').attr('id');
//    $('span[data-target=#' + active + ']').html("&lt;i class='fa fa-minus-square'&gt;&lt;/i&gt;");

    $('.collapse').on('show.bs.collapse', function () {
//        $('span[data-target=#' + $(this).attr('id') + ']').html("&lt;i class='fa fa-minus-square'&gt;&lt;/i&gt;");
    });
    $('.collapse').on('hide.bs.collapse', function () {
//        $('span[data-target=#' + $(this).attr('id') + ']').html("&lt;i class='fa fa-plus-square'&gt;&lt;/i&gt;");
    });

    $(function () {
        $('#product_tabs1859047402 a:first').tab('show');
    })
    $('.tabcarousel1859047402').carousel({interval: 3000, pause: 'hover'});
});
