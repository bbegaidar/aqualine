$(document).ready(function(){
    $(".modalbut").click(function(){
        $(".fancyform2").addClass("fActive");
        $(".fancyform").addClass("fNone");
        $(".modal-content1").addClass("fNone");
    });
})
$(document).ready(function(){
    $(".labelbuttons").click(function(){
        $("#v1").addClass("vActive");
        $(".u1").addClass("uActive");
        $(".labelbuttons").addClass("labelbuttonsActive");
        $("#v2, #v3, #v4, #v5, #v6, #v7, #v8").removeClass("vActive");
        $(".u2, .u3, .u4, .u5, .u6, .u7, .u8").removeClass("uActive");
        $(".labelbuttons2, .labelbuttons3, .labelbuttons4, .labelbuttons5, .labelbuttons6, .labelbuttons7, .labelbuttons8").removeClass("labelbuttonsActive");
    });

    $(".labelbuttons2").click(function(){
        $("#v2").addClass("vActive");
        $(".u2").addClass("uActive");
        $(".labelbuttons2").addClass("labelbuttonsActive");
        $("#v1, #v3, #v4, #v5, #v6, #v7, #v8").removeClass("vActive");
        $(".u1, .u3, .u4, .u5, .u6, .u7, .u8").removeClass("uActive");
        $(".labelbuttons, .labelbuttons3, .labelbuttons4, .labelbuttons5, .labelbuttons6, .labelbuttons7, .labelbuttons8").removeClass("labelbuttonsActive");
    });

    $(".labelbuttons3").click(function(){
        $("#v3").addClass("vActive");
        $(".u3").addClass("uActive");
        $(".labelbuttons3").addClass("labelbuttonsActive");
        $("#v2, #v1, #v4, #v5, #v6, #v7, #v8").removeClass("vActive");
        $(".u2, .u1, .u4, .u5, .u6, .u7, .u8").removeClass("uActive");
        $(".labelbuttons2, .labelbuttons, .labelbuttons4, .labelbuttons5, .labelbuttons6, .labelbuttons7, .labelbuttons8").removeClass("labelbuttonsActive");
    });

    $(".labelbuttons4").click(function(){
        $("#v4").addClass("vActive");
        $(".u4").addClass("uActive");
        $(".labelbuttons4").addClass("labelbuttonsActive");
        $("#v2, #v3, #v1, #v5, #v6, #v7, #v8").removeClass("vActive");
        $(".u2, .u3, .u1, .u5, .u6, .u7, .u8").removeClass("uActive");
        $(".labelbuttons2, .labelbuttons3, .labelbuttons, .labelbuttons5, .labelbuttons6, .labelbuttons7, .labelbuttons8").removeClass("labelbuttonsActive");
    });

    $(".labelbuttons5").click(function(){
        $("#v5").addClass("vActive");
        $(".u5").addClass("uActive");
        $(".labelbuttons5").addClass("labelbuttonsActive");
        $("#v2, #v3, #v4, #v1, #v6, #v7, #v8").removeClass("vActive");
        $(".u2, .u3, .u4, .u1, .u6, .u7, .u8").removeClass("uActive");
        $(".labelbuttons2, .labelbuttons3, .labelbuttons4, .labelbuttons, .labelbuttons6, .labelbuttons7, .labelbuttons8").removeClass("labelbuttonsActive");
    });

    $(".labelbuttons6").click(function(){
        $("#v6").addClass("vActive");
        $(".u6").addClass("uActive");
        $(".labelbuttons6").addClass("labelbuttonsActive");
        $("#v2, #v3, #v4, #v5, #v1, #v7, #v8").removeClass("vActive");
        $(".u2, .u3, .u4, .u5, .u1, .u7, .u8").removeClass("uActive");
        $(".labelbuttons2, .labelbuttons3, .labelbuttons4, .labelbuttons5, .labelbuttons, .labelbuttons7, .labelbuttons8").removeClass("labelbuttonsActive");
    });

    $(".labelbuttons7").click(function(){
        $("#v7").addClass("vActive");
        $(".u7").addClass("uActive");
        $(".labelbuttons7").addClass("labelbuttonsActive");
        $("#v2, #v3, #v4, #v5, #v6, #v1, #v8").removeClass("vActive");
        $(".u2, .u3, .u4, .u5, .u6, .u1, .u8").removeClass("uActive");
        $(".labelbuttons2, .labelbuttons3, .labelbuttons4, .labelbuttons5, .labelbuttons6, .labelbuttons, .labelbuttons8").removeClass("labelbuttonsActive");
    });

    $(".labelbuttons8").click(function(){
        $("#v8").addClass("vActive");
        $(".u8").addClass("uActive");
        $(".labelbuttons8").addClass("labelbuttonsActive");
        $("#v2, #v3, #v4, #v5, #v6, #v7, #v1").removeClass("vActive");
        $(".u2, .u3, .u4, .u5, .u6, .u7, .u1").removeClass("uActive");
        $(".labelbuttons2, .labelbuttons3, .labelbuttons4, .labelbuttons5, .labelbuttons6, .labelbuttons7, .labelbuttons").removeClass("labelbuttonsActive");
    });

    $(".zstr").click(function(){
        $("#v1,#v2, #v3, #v4, #v5, #v6, #v7, #v8").removeClass("vActive");
        $(".labelbuttons, .labelbuttons2, .labelbuttons3, .labelbuttons4, .labelbuttons5, .labelbuttons6, .labelbuttons7, .labelbuttons8").removeClass("labelbuttonsActive");
    });

})
$(document).ready(function(){
    $("#w1").addClass("wActive");
    $("#w2, #w3, #w4, #w5, #w6, #w7, #w8, #w9").removeClass("wActive");
    $("#i1").click(function(){
      if (!$("#w1").hasClass("wActive")) {
        $("#w1").addClass("wActive");
      }
      $("#w2, #w3, #w4, #w5, #w6, #w7, #w8, #w9").removeClass("wActive");
    });
    $("#i2").click(function(){
        $("#w2").addClass("wActive");
        $("#w1, #w3, #w4, #w5, #w6, #w7, #w8, #w9").removeClass("wActive");
    });
    $("#i3").click(function(){
        $("#w3").addClass("wActive");
        $("#w2, #w1, #w4, #w5, #w6, #w7, #w8, #w9").removeClass("wActive");
    });
    $("#i4").click(function(){
        $("#w4").addClass("wActive");
        $("#w2, #w3, #w1, #w5, #w6, #w7, #w8, #w9").removeClass("wActive");
    });
    $("#i5").click(function(){
        $("#w5").addClass("wActive");
        $("#w2, #w3, #w4, #w1, #w6, #w7, #w8, #w9").removeClass("wActive");
    });
    $("#i6").click(function(){
        $("#w6").addClass("wActive");
        $("#w2, #w3, #w4, #w5, #w1, #w7, #w8, #w9").removeClass("wActive");
    });
    $("#i7").click(function(){
        $("#w7").addClass("wActive");
        $("#w2, #w3, #w4, #w5, #w6, #w1, #w8, #w9").removeClass("wActive");
    });
    $("#i8").click(function(){
        $("#w8").addClass("wActive");
        $("#w2, #w3, #w4, #w5, #w6, #w7, #w1, #w9").removeClass("wActive");
    });
    $("#i9").click(function(){
        $("#w9").addClass("wActive");
        $("#w2, #w3, #w4, #w5, #w6, #w7, #w1, #w8").removeClass("wActive");
    });


})
$(function() {
      $('#slides').slidesjs({
        width: 620,
        height: 1250,
          pagination:false,
        navigation: false,
          navigation: {
          effect: "fade"
        },
        pagination: {
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 500
          }
        },
      callback: {
          loaded: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Loaded with slide #' + number);

            // Show start slide in log
            $('#slidesjs-log .slidesjs-slide-number').text(number);
          },
          start: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Start Animation on slide #' + number);
          },
          complete: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Animation Complete. Current slide is #' + number);

            // Change slide number on animation complete
            $('#slidesjs-log .slidesjs-slide-number').text(number);
          }
        }
      });
})



$(function() {
      $('#slides2').slidesjs({
        width: 620,
        height: 1250,
       navigation: false,
          navigation: {
          effect: "fade"
        },
        pagination: {
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 500
          }
        },
      callback: {
          loaded: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Loaded with slide #' + number);

            // Show start slide in log
            $('#slidesjs-log2 .slidesjs-slide-number2').text(number);
          },
          start: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Start Animation on slide #' + number);
          },
          complete: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Animation Complete. Current slide is #' + number);

            // Change slide number on animation complete
            $('#slidesjs-log2 .slidesjs-slide-number2').text(number);
          }
        }
      });
})

$(function() {
      $('#slides3').slidesjs({
        width: 600,
          margin:100,
        height: 1250,
       navigation: false,
          navigation: {
          effect: "fade"
        },
        pagination: {
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 500
          }
        },
      callback: {
          loaded: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Loaded with slide #' + number);

            // Show start slide in log
            $('#slidesjs-log3 .slidesjs-slide-number3').text(number);
          },
          start: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Start Animation on slide #' + number);
          },
          complete: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Animation Complete. Current slide is #' + number);

            // Change slide number on animation complete
            $('#slidesjs-log3 .slidesjs-slide-number3').text(number);
          }
        }
      });
})

$(function() {
      $('#slides4').slidesjs({
        width: 600,
          margin:100,
        height: 1250,
       navigation: false,
          navigation: {
          effect: "fade"
        },
        pagination: {
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 500
          }
        },
      callback: {
          loaded: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Loaded with slide #' + number);

            // Show start slide in log
            $('#slidesjs-log4 .slidesjs-slide-number4').text(number);
          },
          start: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Start Animation on slide #' + number);
          },
          complete: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Animation Complete. Current slide is #' + number);

            // Change slide number on animation complete
            $('#slidesjs-log4 .slidesjs-slide-number4').text(number);
          }
        }
      });
})

$(function() {
      $('#slides5').slidesjs({
        width: 600,
          margin:100,
        height: 1250,
       navigation: false,
          navigation: {
          effect: "fade"
        },
        pagination: {
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 500
          }
        },
      callback: {
          loaded: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Loaded with slide #' + number);

            // Show start slide in log
            $('#slidesjs-log3 .slidesjs-slide-number3').text(number);
          },
          start: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Start Animation on slide #' + number);
          },
          complete: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Animation Complete. Current slide is #' + number);

            // Change slide number on animation complete
            $('#slidesjs-log5 .slidesjs-slide-number5').text(number);
          }
        }
      });
})

$(function() {
      $('#slides6').slidesjs({
        width: 600,
          margin:100,
        height: 1250,
       navigation: false,
          navigation: {
          effect: "fade"
        },
        pagination: {
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 500
          }
        },
      callback: {
          loaded: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Loaded with slide #' + number);

            // Show start slide in log
            $('#slidesjs-log3 .slidesjs-slide-number3').text(number);
          },
          start: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Start Animation on slide #' + number);
          },
          complete: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Animation Complete. Current slide is #' + number);

            // Change slide number on animation complete
            $('#slidesjs-log6 .slidesjs-slide-number6').text(number);
          }
        }
      });
})

$(function() {
      $('#slides7').slidesjs({
        width: 600,
          margin:100,
        height: 1250,
       navigation: false,
          navigation: {
          effect: "fade"
        },
        pagination: {
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 500
          }
        },
      callback: {
          loaded: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Loaded with slide #' + number);

            // Show start slide in log
            $('#slidesjs-log3 .slidesjs-slide-number3').text(number);
          },
          start: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Start Animation on slide #' + number);
          },
          complete: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Animation Complete. Current slide is #' + number);

            // Change slide number on animation complete
            $('#slidesjs-log7 .slidesjs-slide-number7').text(number);
          }
        }
      });
})

$(function() {
      $('#slides8').slidesjs({
        width: 600,
          margin:100,
        height: 1250,
       navigation: false,
          navigation: {
          effect: "fade"
        },
        pagination: {
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 500
          }
        },
      callback: {
          loaded: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Loaded with slide #' + number);

            // Show start slide in log
            $('#slidesjs-log3 .slidesjs-slide-number3').text(number);
          },
          start: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Start Animation on slide #' + number);
          },
          complete: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Animation Complete. Current slide is #' + number);

            // Change slide number on animation complete
            $('#slidesjs-log8 .slidesjs-slide-number8').text(number);
          }
        }
      });
})

$(function() {
      $('#slides9').slidesjs({
        width: 600,
          margin:100,
        height: 1250,
       navigation: false,
          navigation: {
          effect: "fade"
        },
        pagination: {
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 500
          }
        },
      callback: {
          loaded: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Loaded with slide #' + number);

            // Show start slide in log
            $('#slidesjs-log3 .slidesjs-slide-number3').text(number);
          },
          start: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Start Animation on slide #' + number);
          },
          complete: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Animation Complete. Current slide is #' + number);

            // Change slide number on animation complete
            $('#slidesjs-log9 .slidesjs-slide-number9').text(number);
          }
        }
      });
})

$(function() {
      $('#slides10').slidesjs({
        width: 600,
          margin:100,
        height: 1250,
       navigation: false,
          navigation: {
          effect: "fade"
        },
        pagination: {
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 500
          }
        },
      callback: {
          loaded: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Loaded with slide #' + number);

            // Show start slide in log
            $('#slidesjs-log3 .slidesjs-slide-number3').text(number);
          },
          start: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Start Animation on slide #' + number);
          },
          complete: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Animation Complete. Current slide is #' + number);

            // Change slide number on animation complete
            $('#slidesjs-log10 .slidesjs-slide-number10').text(number);
          }
        }
      });
})

$(function() {
      $('#slides11').slidesjs({
        width: 600,
          margin:100,
        height: 1250,
       navigation: false,
          navigation: {
          effect: "fade"
        },
        pagination: {
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 500
          }
        },
      callback: {
          loaded: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Loaded with slide #' + number);

            // Show start slide in log
            $('#slidesjs-log3 .slidesjs-slide-number3').text(number);
          },
          start: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Start Animation on slide #' + number);
          },
          complete: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Animation Complete. Current slide is #' + number);

            // Change slide number on animation complete
            $('#slidesjs-log11 .slidesjs-slide-number11').text(number);
          }
        }
      });
})

$(function() {
      $('#slides12').slidesjs({
        width: 600,
          margin:100,
        height: 1250,
       navigation: false,
          navigation: {
          effect: "fade"
        },
        pagination: {
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 500
          }
        },
      callback: {
          loaded: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Loaded with slide #' + number);

            // Show start slide in log
            $('#slidesjs-log3 .slidesjs-slide-number3').text(number);
          },
          start: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Start Animation on slide #' + number);
          },
          complete: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Animation Complete. Current slide is #' + number);

            // Change slide number on animation complete
            $('#slidesjs-log12 .slidesjs-slide-number12').text(number);
          }
        }
      });
})

$('.partner').owlCarousel({
    loop:true,
    margin:10,
    nav: true,
    dots:false,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav: true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$(document).ready(function () {
    homeAnimate();
    var aboutAnimateStart = true;
    var portfolioAnimateStart = true;
    var servicesAnimateStart = true;
    var contactsAnimateStart = true;
    $('.pt-trigger').click(function () {
        var page = $(this).attr('href');

//        if(page === "#portfolio"){
//            if(portfolioAnimateStart){
//                portfolioAnimateStart = false;
//                portfolioAnimate()
//            }
//        }
        if(page === "#services"){
            if(servicesAnimateStart){
                servicesAnimateStart = false;
                servicesAnimate()
            }
        }

    });

    function homeAnimate() {
        setTimeout(function () {

        }, 1000);
    }

    function servicesAnimate() {
        setTimeout(function () {
            var time = 0;
            $('.left').each(function () {
                var thisB = $(this);
                setTimeout(function () {
                    $(thisB).addClass('active animated fadeInLeft')
                }, time);
                time = time;

            });
            var time2 = 0;
            $('.right').each(function () {
                var thisB = $(this);
                setTimeout(function () {
                    $(thisB).addClass('active animated fadeInRight')
                }, time2);
                time2 = time2;
            })
        }, 1000);
}




//    function portfolioAnimate() {
//        setTimeout(function () {
//            var time = 0;
//            $('.img31, .img33').each(function () {
//                var thisB = $(this);
//                setTimeout(function () {
//                    $(thisB).addClass('active animated fadeInLeft')
//                }, time);
//                time = time;
//            });
//            var time2 = 0;
//            $('.img32, .img34').each(function () {
//                var thisB = $(this);
//                setTimeout(function () {
//                    $(thisB).addClass('active animated fadeInRight')
//                }, time2);
//                time2 = time2;
//            })
//        }, 1000);
//}

   function homeAnimate() {
        setTimeout(function () {

        }, 1000);
    }
})

$('body').on('click', '.submitModal', function(e) {
  e.preventDefault()
  var modal = $('.fancybox-container');
  var form = $(this).parents('form')
  $.ajax({
    type: 'POST',
    url: '/mail/mail.php',
    data: $(form).serialize(),
    beforeSend: function () {
      if (modal != 'undefined') {
        $(modal).hide();
      }
       $('.black_loader').show();
    },
    success: function (data) {
       $('.black_loader').hide();
        if (modal != 'undefined') {
            $(modal).show();
          }
      // $('#thank_modal').modal();
    }
  })
})

/*
var video =$('#bgvideo').clone();
$('section[data-id="about_me"] #aboutvideo').append(video);
*/
$(".fullscreen-bg__video").clone().appendTo("#aboutvideo");
$(".fullscreen-bg__video").clone().appendTo("#aboutvideo2");
$(".fullscreen-bg__video").clone().appendTo("#aboutvideo3");
