$(function(){

   $('.material-button-toggle').on("click", function () {
        $(this).toggleClass('open');
        $('.option').toggleClass('scale-on');
    });

  $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 3,
          nav: false
        },
        1000: {
          items: 5,
          nav: true,
          loop: false,
          margin: 20
        }
      }
    });


    $('.carousel').carousel({
        interval: 5000
    });


    var waitForFinalEvent = (function () {
      var timers = {};
      return function (callback, ms, uniqueId) {
        if (!uniqueId) {
          uniqueId = "twice";
        }
        if (timers[uniqueId]) {
          clearTimeout (timers[uniqueId]);
        }
        timers[uniqueId] = setTimeout(callback, ms);
      };
    })();
        
    function checkPosition() {
      if ( $('html').attr('lang') == 'ar' ){
        var list = $('ul.navbar-nav');
        var listItems = list.children('li');
        list.append(listItems.get().reverse());   
      }
    }

    var win = $(window); //this = window
    if (win.width() >= 767) {
      checkPosition();
    }

    checkPosition();

    $(window).resize(function () {
      var win = $(this); //this = window
      if (win.width() >= 767) {
        waitForFinalEvent(function(){
          checkPosition();
        }, 300, "string");
      }
  });
    
});    

