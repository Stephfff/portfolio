var slickSettings={arrows:!1,dots:!0,infinite:!1,slidesToShow:1,slidesToScroll:1}
function slickResize(selector,settings){if($(window).width()>=768){if($(selector).hasClass('slick-initialized')){$(selector).slick('unslick')}
return}
if(!$(selector).hasClass('slick-initialized')){return $(selector).slick(slickSettings)}}
$(document).ready(function(){scrollNav();scaleVideoContainer();initBannerVideoSize(posterImg);scaleBannerVideoSize(posterImg);prepAnimations();mainMenuAnimation();$('.two-block .container > div > div.right').inview({removeClass:!1});if($('svg').length){scrollAnimate()}
if($('[id*="-chart"]').length){$('.chart-view').css('display','block');dataCharts()}
if($('.datacontainer').length){dataContainerClick()}
if(isMobile){if($(window).width()<768){$('.slider').slick(slickSettings)}
$(window).on('resize',slickResize('.slider'))}
$('[tabindex]:not(a)').keypress(function(e){if(e.which==13){$(this).click()}});if($(window).width()<768){slickResize('.chart-display.slider')}
$(window).on('resize',function(){scaleVideoContainer();scaleBannerVideoSize(posterImg);slickResize('.chart-display.slider')})});window.onload=function(){initBannerVideoSize(posterImg);scaleBannerVideoSize(posterImg);if(!isPhone){prepImages()}