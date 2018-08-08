

$(window).load(function (){
  $('.makeusfly-load').fadeOut(1000);
});



$( document ).ready(function() {
  //console.log( "document ready!" );

  var $sticky = $('.sticky');
  var $stickyrStopper = $('.footer');
  if (!!$sticky.offset()) { // make sure ".sticky" element exists

    var generalSidebarHeight = $sticky.innerHeight();
    var stickyTop = $sticky.offset().top;
    var stickOffset = 100;
    var stickyStopperPosition = $stickyrStopper.offset().top;
    var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
    var diff = stopPoint + stickOffset;

    $(window).scroll(function(){ // scroll event
      var windowTop = $(window).scrollTop(); // returns number

      if (stopPoint < windowTop) {
          $sticky.css({ position: 'relative', top: 'inherit' });
      } else if (stickyTop < windowTop+stickOffset) {
          $sticky.css({ position: 'fixed', width: $sticky.parent().width(), top: stickOffset });

      } else {
          $sticky.css({position: 'relative', top: 'inherit'});
      }
    });

  }
});



$(document).ready(function(){

 


var topHead= $(".top-header").outerHeight();
var navHead= $(".main-nav").outerHeight();
var winHeight= $(window).height();
var winWidth= $(window).width();
var mainLog = (parseInt(winHeight) - parseInt(navHead));
// var affixHieght = (parseInt(productHight) + parseInt(topHead));
// var lftsec=$(".abt-left-block2").outerHeight();
// $('.error-section').css('height', mainLog);
// $(".main-banner").css("margin-top", -navHead);
if(winWidth < 767){
// alert('ert');
    $(".main-banner").css("min-height", mainLog);
    //$("#navbar").css('height', (parseInt(winHeight) - parseInt(navHead)));
}
  
       $(window).on("load scroll", function() {    
            var scroll = $(window).scrollTop();

            if (scroll >= 1) {
                $(".main-nav").addClass("navbar-fixed-top").animate(2000);
               // $(".top-header").css("margin-bottom", navHead);

            } else {
                $(".main-nav").removeClass("navbar-fixed-top").animate(800);
                 // $(".top-header").css("margin-bottom", 0);
            }
        });

$(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $('.scrollup').fadeIn();
    } else {
        $('.scrollup').fadeOut();
    }
}); 
$('.scrollup').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
});

$(".form-air-sticket input").focus(function() {
   $(this).parents('.input-group').addClass('focus');
});
$(".form-air-sticket input").blur(function() {
   $('input').parents('.input-group').removeClass('focus');
});

$(".form-air-sticket select").focus(function() {
   $(this).addClass('focus');
});
$(".form-air-sticket select").blur(function() {
   $('select').removeClass('focus');
});

 $("#owl-home").owlCarousel({

        autoPlay: 6000, //Set AutoPlay to 3 seconds
        dots: true,
        items:1,
        pagination : false,
        paginationNumbers: false,  
        navigation : true,
         loop:true,
        // itemsDesktop: [1199, 3],
        // itemsDesktopSmall: [979, 3]
    });

$("#deal-slider").owlCarousel({
        autoPlay: 6000, //Set AutoPlay to 3 seconds
        dots: true,
        items:3,
        pagination : false,
        paginationNumbers: false,  
        navigation : true,
        loop:true,
         itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsTablet:[768,2],
        itemsMobile:[600,2],
        itemsMobile:[599,1],
    });


$("#ticket-slider").owlCarousel({
        autoPlay: 6000, //Set AutoPlay to 3 seconds
        dots: true,
        items:2,
        pagination : false,
        paginationNumbers: false,  
        navigation : true,
        loop:true,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [979, 2],
        itemsTablet:[768,1],
        itemsMobile:[650,1],
    });
  $("#testimonials-slider").owlCarousel({
        items:2,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,1],
        itemsMobile:[650,1],
        pagination:true,
        navigation:false,
        slideSpeed:1000,
        autoPlay:true
    });





// $('#fromBookingTime').datetimepicker({
//    format: 'LT'
// });
// $('#reserveTime').datetimepicker({
//    format: 'LT'
// });

// $('#fromBookingTime').datetimepicker({
//    format: 'DD/MM/YYYY',
//    // inline: true,
//    // sideBySide: true,
//    // Default:false,
//    //numberOfMonths: 2,
//    minDate: new Date()
// });

// $('#toBookingDate').datetimepicker({
//    format: 'DD/MM/YYYY',
//    minDate: new Date()
// });


   $('#fromBookingTime').datetimepicker({  format: 'DD/MM/YYYY', minDate: new Date(),});
        $('#toBookingDate').datetimepicker({
              format: 'DD/MM/YYYY',
              minDate: new Date(),
            useCurrent: false //Important! See issue #1075
        });
        $("#fromBookingTime").on("dp.change", function (e) {
            $('#toBookingDate').data("DateTimePicker").minDate(e.date);
        });
        $("#toBookingDate").on("dp.change", function (e) {
            $('#fromBookingTime').data("DateTimePicker").maxDate(e.date);
        });



});




$(document).ready(function(){

  $('.venobox').venobox({
    infinigall: true,
     numeratio: true,
     border: '10px',  
}); 
$("ul.menu-tag-form li>a").on('click', function(){
                $('ul.menu-tag-form li>a').parent("li").removeClass("choose");
                $(this).parent("li").addClass("choose");
});



$(".emergency-info").click(function(){
   $(this).parent().find(".emergency-detail").toggle();
});


var res1 = $("#ex1").val().split(",");

$("#ex1").bootstrapSlider().on('slideStop', function (ev) { 
  
var res = $(this).val().split(",");

$("#mindis").text(res[0]);
$("#maxdis").text(res[1]); 
 
   // alert(res);
});

});




