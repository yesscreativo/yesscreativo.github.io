  // INICIALIZACION SLIDE DETALLE
jQuery(document).ready(function ($) {

            var jssor_1_options = {
              $AutoPlay: true,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 5,
                $SpacingX: 20,
                $SpacingY: 20,
                $Orientation: 2,
                $Align: 0
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1024);
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
            /*responsive code end*/
        });
// INICIALIZACION SLIDE DETALLE FIN

$(function(){
    SyntaxHighlighter.all();
    });
    $(window).load(function(){
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider){
          $('body').removeClass('loading');
        }
    });
});


// INICIALIZACION SLIDE SERVICIOS
$(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.c-marcas').flexslider({
        animation: "slide",
        animationLoop: true,
        itemWidth: 120,
        itemMargin: 20,
        minItems: 3,
        maxItems: 6,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
});

$(window).load(function() {
  $('.slide-ultimos').flexslider({
    animation: "slide",
    controlNav: "thumbnails",
    minItems: 3,
  });
});
// INICIALIZACION SLIDE SERVICIOS FIN




