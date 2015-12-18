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
    $('span[data-target=#' + active + ']').html("<i class='fa fa-minus-square'>");

    $('.collapse').on('show.bs.collapse', function () {
        $('span[data-target=#' + $(this).attr('id') + ']').html("<i class='fa fa-minus-square'></i>");
    });
    $('.collapse').on('hide.bs.collapse', function () {
        $('span[data-target=#' + $(this).attr('id') + ']').html("<i class='fa fa-plus-square'></i>");
    });

    $(function () {
        $('#product_tabs1859047402 a:first').tab('show');
    })
    $('.tabcarousel1859047402').carousel({interval: 3000, pause: 'hover'});

    jQuery(document).ready(function ($) {

        var jssor_1_options = {
            $AutoPlay: true,
            $AutoPlaySteps: 5,
            $SlideDuration: 160,
            $SlideWidth: 150,
            $SlideSpacing: 3,
            $Cols: 5,
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 1,
                $SpacingY: 1
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizing
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 809);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
});
