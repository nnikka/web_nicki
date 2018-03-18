$(window).on('load', function() {
    setTimeout(function(){
        $('#loader-wrapper').fadeOut('slow'); 
        $('.after-loader').delay(1150).css({'visibility':'visible'});
    },1000);
});

document.addEventListener('DOMContentLoaded', function () {
  particleground(document.getElementById('particles'), {
    dotColor: '#ff3179',
    lineColor: '#ff3179'
  });
}, false);



$(document).ready(function() {
    
        
    
    //modzravi backgroundi
    var movementStrength = 25;
    var height = movementStrength / $(window).height();
    var width = movementStrength / $(window).width();
    $(document).mousemove(function(e){
              var pageX = e.pageX - ($(window).width() / 2);
              var pageY = e.pageY - ($(window).height() / 2);
              var newvalueX = width * pageX * -1 - 25;
              var newvalueY = height * pageY * -1 - 50;
              $('#particles').css("background-position", newvalueX+"px     "+newvalueY+"px");
    });
});

$(document).ready(function() {
     //menus dacheraze rac xdeba
     $( ".mouse-click" ).click(function() {
         
       if($('.language-bar').is(':visible')) {
            $( ".language-bar" ).slideUp( "slow");
          }
        if($('.social-links').is(':visible')) {
            $( ".social-links" ).slideUp( "slow");
            $( "#intro" ).animate({
                 top:'2%',
            });
          }
                  $( ".main-nav" ).animate({
                        opacity: 0,
                      }, 500, function() {
                  });
         
                  $( ".overlay" ).delay(500).fadeIn( "slow");
                  $( ".modal" ).delay(500).fadeIn( "slow");
    });    
    
    $( ".close-menu" ).click(function() {
         
                  $( ".overlay" ).delay(100).fadeOut( "slow");
                  $( ".modal" ).delay(100).fadeOut( "slow");
        
                  $( ".main-nav" ).animate({
                        opacity: 1,
                      }, 2000, function() {
                  });
    });    
});



$(document).ready(function() {
     $( ".ion-earth" ).click(function() {
         if($('.social-links').is(':visible')) {
            $( ".social-links" ).slideUp( "slow");
            $( "#intro" ).animate({
                 top:'2%',
            });
          }
            $( ".language-bar" ).slideDown( "slow");
    });    
    
    $( ".close-language" ).click(function() {
            $( ".language-bar" ).slideUp( "slow");
    }); 
}); 

$(document).ready(function() {
     $( ".ion-android-share-alt" ).click(function() {
          if($('.language-bar').is(':visible')) {
            $( ".language-bar" ).slideUp( "slow");
          }
            $( "#intro" ).animate({
                top:'100px',
            });
            $( ".social-links" ).slideDown( "slow");
    });    
    
    $( ".social-links" ).click(function() {
            $( ".social-links" ).slideUp( "slow");
            $( "#intro" ).animate({
                 top:'2%',
            });
    }); 
    
});

$(document).ready(function(){
	
    $( ".ion-ios-play" ).click(function() {
          if($('.language-bar').is(':visible')) {
            $( ".language-bar" ).slideUp( "slow");
          }
         if($('.social-links').is(':visible')) {
            $( ".social-links" ).slideUp( "slow");
              $( "#intro" ).animate({
                 top:'2%',
            });
          }
        $( "#intro" ).animate({
            opacity: 0,
        });
        $( ".main-video" ).fadeIn( "slow");
        
    });    
    
    $( ".close-video" ).click(function() {
            $( ".main-video" ).fadeOut( "slow");
            $( "#intro" ).animate({
                opacity: 1,
            });
    }); 
    
    
});


$(document).ready(function(){
    $( "#georgian" ).click(function() {
        $( ".georgian-lang" ).slideDown( "slow");
        $( ".georgian-lang-2" ).slideDown( "slow");
        $( ".georgian-lang-btn" ).show( "slow");
        $( ".english-lang" ).slideUp( "slow");
        $( ".english-lang-btn" ).hide( "slow");
    }); 
    
     $( "#english" ).click(function() {
        $( ".english-lang" ).slideDown( "slow");
        $( ".english-lang-btn" ).show( "slow");
        $( ".georgian-lang" ).slideUp( "slow");
         $( ".georgian-lang-2" ).slideUp( "slow");
        $( ".georgian-lang-btn" ).hide( "slow");
    }); 
});


$(document).ready(function(){
    (function () {
        var follower, init, mouseX, mouseY, positionElement, printout, timer;
        follower = document.getElementById('follower');
        printout = document.getElementById('printout');
        mouseX = function (_this) {
            return function (event) {
                return event.clientX;
            };
        }(this);
        mouseY = function (_this) {
            return function (event) {
                return event.clientY;
            };
        }(this);
        positionElement = function (_this) {
            return function (event) {
                var mouse;
                mouse = {
                    x: mouseX(event),
                    y: mouseY(event)
                };
                follower.style.top = mouse.y + 'px';
                return follower.style.left = mouse.x + 'px';
            };
        }(this);
        timer = false;
        window.onmousemove = init = function (_this) {
            return function (event) {
                var _event;
                _event = event;
                return timer = setTimeout(function () {
                    return positionElement(_event);
                }, 1);
            };
        }(this);
    }.call(this));   
});


$(document).ready(function(){
    $('header').waypoint(function(direction) {
            if (direction == "down") {
                $('.mouse-click').addClass('sticky');
            } else {
                $('.mouse-click').removeClass('sticky');
            }
        }, {
          offset: '-10px;'
        });
});

$(document).ready(function(){
     $("header").hover(function () {
        $(".mouse-click").removeClass("color-change");
        $(".mouse-click").css("color", "#ff3179");
      },
      function () {
        $(".mouse-click").addClass("color-change");
      }
    );
    
    
    function loop(){ 
         setTimeout(function(){
            $( ".color-change" ).css('color','#c75353');
        },0);
          setTimeout(function(){
            $( ".color-change" ).css('color','#e5910a');
        },5000);
         setTimeout(function(){
            $( ".color-change" ).css('color','#d8d849');
        },10000);
         setTimeout(function(){
            $( ".color-change" ).css('color','#5f955f');
        },15000);
    }
        loop();
        window.setInterval(loop, 20000);

});

$(document).ready(function(){
     function loop2(){ 
     setTimeout(function(){
        $( ".html5, .css3, .illustrator, .photoshop, .javascript, .jquery, .ajax, .php" ).animate({
            opacity: 0.25,
          }, 5000, function() {
            // Animation complete.
          });
     });
     setTimeout(function(){
        $( ".html5, .css3, .illustrator, .photoshop, .javascript, .jquery, .ajax, .php" ).animate({
            opacity: 1,
          }, 5000, function() {
            // Animation complete.
          });
     },5000);
          }
        loop2();
        window.setInterval(loop2, 5000);
    
    
    
//    function loop3(){ 
//         setTimeout(function(){
//           $( ".illustrator" ).css('transform','scale(1)');
//           $( ".css3" ).css('transform','scale(1.5)');
//            $( ".javascript" ).css('transform','scale(1)');
//           $( ".php" ).css('transform','scale(1.5)');
//         });
//         setTimeout(function(){
//            $( ".css3" ).css('transform','scale(1)');
//            $( ".html5" ).css('transform','scale(1.5)');
//             $( ".php" ).css('transform','scale(1)');
//           $( ".ajax" ).css('transform','scale(1.5)');
//         },1000);
//         setTimeout(function(){
//            $( ".html5" ).css('transform','scale(1)');
//            $( ".photoshop" ).css('transform','scale(1.5)');
//             $( ".ajax" ).css('transform','scale(1)');
//           $( ".jquery" ).css('transform','scale(1.5)');
//         },2000);
//         setTimeout(function(){
//            $( ".photoshop" ).css('transform','scale(1)');
//            $( ".illustrator" ).css('transform','scale(1.5)');
//             $( ".jquery" ).css('transform','scale(1)');
//           $( ".javascript" ).css('transform','scale(1.5)');
//         },3000);
//        }
//    loop3();
//        window.setInterval(loop3, 5000);
//    
//});

// function loop4(){ 
//         setTimeout(function(){
//           $( ".illustrator" ).css('font-size','40px');
//           $( ".css3" ).css('font-size','60px)');
//            $( ".javascript" ).css('font-size','40px');
//           $( ".php" ).css('font-size','60px');
//         });
//         setTimeout(function(){
//            $( ".css3" ).css('font-size','40px');
//            $( ".html5" ).css('font-size','60px');
//             $( ".php" ).css('font-size','40px');
//           $( ".ajax" ).css('font-size','60px');
//         },1000);
//         setTimeout(function(){
//            $( ".html5" ).css('font-size','40px');
//            $( ".photoshop" ).css('font-size','60px');
//             $( ".ajax" ).css('font-size','40px');
//           $( ".jquery" ).css('font-size','60px');
//         },2000);
//         setTimeout(function(){
//            $( ".photoshop" ).css('font-size','40px');
//            $( ".illustrator" ).css('font-size','60px');
//             $( ".jquery" ).css('font-size','40px');
//           $( ".javascript" ).css('font-size','60px');
//         },3000);
//        }
//    loop4();
//        window.setInterval(loop4, 5000);
//    
//});


//$(document).ready(function(){
///* Navigation scroll */
//    $(function() {
//      $('a[href*=#]:not([href=#])').click(function() {
//        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
//          var target = $(this.hash);
//          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
//          if (target.length) {
//            $('html,body').animate({
//              scrollTop: target.offset().top
//            }, 1000);
//            return false;
//          }
//        }
//      });
//    });
//});
    
//$(document).ready(function(){
//    
//    $('header').waypoint(function(direction) {
//            if (direction == "down") {
//               $('html, body').animate({scrollTop: $('#section-motivation').offset().top}, 1000);
//            } 
//        }, {
//          offset: '-100px;'
//        });
//    
//    $('#section-motivation').waypoint(function(direction) {
//            if (direction == "up") {
//               $('html, body').animate({scrollTop: $('header').offset().top}, 1000);
//            } 
//        }, {
//          offset: '100px;'
//        });
//    
//    $('#section-motivation').waypoint(function(direction) {
//            if (direction == "down") {
//               $('html, body').animate({scrollTop: $('footer').offset().top}, 1000);
//            } 
//        }, {
//          offset: '-100px;'
//        });
//   
//    $('footer').waypoint(function(direction) {
//            if (direction == "up") {
//               $('html, body').animate({scrollTop: $('#section-motivation').offset().top}, 1000);
//            } 
//        }, {
//          offset: '100px;'
//        });
//      
//       
//});






























