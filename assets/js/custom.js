function startCounterOnScroll(s,e,t){var o=$(s),n=o.offset().top-window.innerHeight,i=!1;function l(){var s=$(window).scrollTop()>n;s&&!i?(o.jQuerySimpleCounter({end:e,duration:t}),i=!0):s||(i=!1,o.text(settings.start))}l(),$(window).on("scroll",l)}$(document).ready(function(){var s="Read More";$(".more").each(function(){var e=$(this).html();if(e.length>87){var t=e.substr(0,87),o=e.substr(87,e.length-87);$(this).html(t+'<span class="moreellipses">&nbsp;</span><span class="morecontent"><span>'+o+'</span>&nbsp;&nbsp;<a href="" class="morelink">'+s+"</a></span>")}}),$(".morelink").click(function(){return $(this).hasClass("less")?($(this).removeClass("less"),$(this).html(s)):($(this).addClass("less"),$(this).html("Read Less")),$(this).parent().prev().toggle(),$(this).prev().toggle(),!1})}),$(document).ready(function(){$(".btn-close").click(function(){$("#getqoute").modal("hide")}),setTimeout(function(){$("body").hasClass("thank-you-page")||$("#getqoute").modal("show")},5e3)}),window.addEventListener("scroll",function(){var s=document.querySelector(".pt-section"),e=document.getElementById("stickyy"),t=s.offsetTop+s.offsetHeight;window.pageYOffset+window.innerHeight>=t?e.classList.remove("stickyy"):e.classList.add("stickyy")}),$(document).ready(function(){$("#owl_slidr").owlCarousel({loop:!0,nav:!1,stopOnHover:!1,autoplayHoverPause:!1,dots:!1,margin:20,responsiveClass:!0,autoplay:!0,autoplayTimeout:2e3,autoplaySpeed:800,responsive:{0:{items:1},600:{items:4},1e3:{items:6},360:{items:2}}}),$(".port-slider-two").owlCarousel({loop:!0,nav:!1,rtl:!0,stopOnHover:!1,autoplayHoverPause:!1,dots:!1,margin:20,responsiveClass:!0,autoplay:!0,autoplayTimeout:2e3,autoplaySpeed:800,responsive:{0:{items:1},600:{items:4},1e3:{items:6},360:{items:2}}})}),jQuery(function(s){s(window).scroll(function(){var e=s(".sticky");s(window).scrollTop()>=100?e.addClass("fixed"):e.removeClass("fixed")})}),$(document).ready(function(){$(".clint-logo-slider-main").slick({dots:!1,arrows:!1,infinite:!0,speed:300,slidesToShow:1,slidesToScroll:1,responsive:[{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:1,infinite:!0,dots:!0}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]})}),$.fn.jQuerySimpleCounter=function(s){var e=$.extend({start:0,end:100,easing:"swing",duration:400,complete:""},s),t=$(this);$({count:e.start}).animate({count:e.end},{duration:e.duration,easing:e.easing,step:function(){var s=Math.ceil(this.count);t.text(s)},complete:e.complete})},startCounterOnScroll("#number1",20,6e3),startCounterOnScroll("#number2",900,1e4),startCounterOnScroll("#number3",100,8e3),jQuery(function(s){s(window).scroll(function(){var e=s(".sticky");s(window).scrollTop()>=100?e.addClass("fixed"):e.removeClass("fixed")})});