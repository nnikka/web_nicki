<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- a player skin as usual -->
        <link rel="stylesheet" href="//releases.flowplayer.org/6.0.5/skin/minimalist.css">
        <!-- the quality selector stylesheet for hls level selection -->
        <link rel="stylesheet"
              href="//releases.flowplayer.org/quality-selector/flowplayer.quality-selector.css">
        <!-- Add fancyBox main stylesheet -->
        <link rel="stylesheet"
              href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css">
        <!-- the overlay plugin fancybox vendor stylesheet -->
        <link rel="stylesheet"
              href="//releases.flowplayer.org/overlay/vendors/flowplayer.overlay.fancybox.css">

        <!-- ... -->
        <!-- the jQuery library -->
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <!-- the Flowplayer script as usual -->
        <script src="//releases.flowplayer.org/6.0.5/flowplayer.min.js"></script>
        <!-- The hlsjs plugin for playback of HLS without Flash in modern browsers -->
        <script src="//releases.flowplayer.org/hlsjs/flowplayer.hlsjs.min.js"></script>
        <!-- the fancybox script -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        <!-- the overlay plugin -->
        <script src="//releases.flowplayer.org/overlay/flowplayer.overlay.min.js"></script>
        <!-- the overlay plugin fancybox vendor script -->
        <script src="//releases.flowplayer.org/overlay/vendors/flowplayer.overlay.fancybox.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/hover.css">
        
        <link rel="stylesheet" type="text/css" href="vendors/css/style.css">
        
        <link rel="stylesheet" type="text/css" href="resources/css/style-for-gallery.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        
<!--
        <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
        <script async="" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=088620b277/cloudflare.min.js"></script>
        <script type="text/javascript">
            //<![CDATA[
            try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:1480600817,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"8141e00be16d28a6801e1b0e4576fdd7",petok:"75d05ca72eec26e6ef036b13c6bac6a41d0a1237-1481274281-1800",zone:"clicktorelease.com",rocket:"0",apps:{"ga_key":{"ua":"UA-625393-26","ga_bs":"2"},"abetterbrowser":{"ie":"7"}}}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=088620b277/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
            //]]>
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-625393-26']);
            _gaq.push(['_trackPageview']);

            (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

            (function(b){(function(a){"__CF"in b&&"DJS"in b.__CF?b.__CF.DJS.push(a):"addEventListener"in b?b.addEventListener("load",a,!1):b.attachEvent("onload",a)})(function(){"FB"in b&&"Event"in FB&&"subscribe"in FB.Event&&(FB.Event.subscribe("edge.create",function(a){_gaq.push(["_trackSocial","facebook","like",a])}),FB.Event.subscribe("edge.remove",function(a){_gaq.push(["_trackSocial","facebook","unlike",a])}),FB.Event.subscribe("message.send",function(a){_gaq.push(["_trackSocial","facebook","send",a])}));"twttr"in b&&"events"in twttr&&"bind"in twttr.events&&twttr.events.bind("tweet",function(a){if(a){var b;if(a.target&&a.target.nodeName=="IFRAME")a:{if(a=a.target.src){a=a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);b=0;for(var c;c=a[b];++b)if(c.indexOf("url")===0){b=unescape(c.split("=")[1]);break a}}b=void 0}_gaq.push(["_trackSocial","twitter","tweet",b])}})})})(window);
            /* ]]> */
        </script>
-->
        
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="vendors/js/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="vendors/js/jquery.jplayer.min.js"></script>
        <script src="vendors/js/jquery.waypoints.min.js"></script>
        <script src="vendors/js/jquery.particleground.js"></script>
        <script src="vendors/js/demo.js"></script>
        
        
        <title>NiCKi</title>
    </head>
    
    <body>
        

        <div id="follower">
          <div id="circle1"></div>
          <div id="circle2"></div>
        </div>

        
        <div id="loader-wrapper">
            <div id="loader"></div>
        </div>
        
        <div class="after-loader">
            
            <div class="overlay"></div>
            <div class="modal">
                <div class="row">
                    <h1>NiCKi</h1>
                </div>
                <div class="row">
                    <div class="col span-1-of-4">
                        <a href="index.php" class="btn-little  hvr-bounce-in english-lang">-MAIN-</a>
                        <a href="index.php" class="btn-little  hvr-bounce-in georgian-lang">-mTavari-</a>
                    </div>
                     <div class="col span-1-of-4">
                        <a href="work.php#how-works" class="btn-little  hvr-bounce-in english-lang">-WORK-</a>
                        <a href="work.php#how-works" class="btn-little  hvr-bounce-in georgian-lang">-galerea-</a>
                    </div>
                     <div class="col span-1-of-4">
                        <a href="contact.php#section-contact" class="btn-little  hvr-bounce-in english-lang">-CONTACT-</a>
                        <a href="contact.php#section-contact" class="btn-little  hvr-bounce-in georgian-lang">-kontaqti-</a>
                    </div>
                     <div class="col span-1-of-4">
                        <a href="moreInfo.php#section-more-info" class="btn-little hvr-bounce-in english-lang">-OTHER-</a>
                        <a href="moreInfo.php#section-more-info" class="btn-little hvr-bounce-in georgian-lang">-sxva-</a>
                    </div>
                </div>
                <div class="row" style="display:inline-block;">
                    <a class="ion-close-round footer-icon hvr-grow-rotate close-menu"></a>
                </div>
            </div>
            
            <div class="main-video">
                <div class="row">
                    <a class="ion-close-round footer-icon hvr-grow-rotate close-video"></a>
                </div>
                <video id="my_video_1" class="video-js vjs-default-skin" 
                  controls preload="none" data-setup='{}'
                  poster='http://video-js.zencoder.com/oceans-clip.jpg'>
                <source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4' />
                <source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
              </video>
            </div>
            
            <div class="language-bar">
                <div class="row">
                    <h4 class="english-lang">CHOOSE YOUR LANGUAGE</h4>
                    <h4 class="georgian-lang">airCie Seni ena</h4>
                </div>
                <div class="row margin-top-60px">
                    <a id="english" class="btn-language hvr-bounce-in">-ENGLISH-</a>
                </div>
                <div class="row margin-top-40px">
                    <a id="georgian" class="btn-language hvr-bounce-in">-qarTuli-</a>
                </div>
                <div class="row">
                    <a class="ion-close-round footer-icon hvr-grow-rotate close-language"></a>
                </div>
            </div>
            
            <div class="social-links">
                <div class="row">
                    <div class="row-3">
                        <h4 class="english-lang">SOCIAL LINKS</h4>
                        <h4 class="georgian-lang">socialuri qseli</h4>
                    </div>
                    <div class="row-3">
                        <div class="row-3-3">
                            <a href="https://facebook.com/" class="ion-social-facebook icon-social hvr-pulse-grow"></a>
                        </div>
                        <div class="row-3-3">
                            <a href="https://plus.google.com/" class="ion-social-googleplus icon-social hvr-pulse-grow"></a>
                        </div>
                        <div class="row-3-3">
                            <a href="https://www.linkedin.com/" class="ion-social-linkedin-outline icon-social hvr-pulse-grow"></a>
                        </div>
                    </div>
                    <div class="row-3">
                        <a href="#" class="ion-close-round footer-icon hvr-grow-rotate close-social"></a>
                    </div>
                </div>
            </div>
            
            
            <header>
                <div id="particles">
                  <div id="intro">
                    <div class="row">
                        <ul class="main-nav">
                            <li>
                                <a class="ion-navicon icon-big nav-a-first hvr-grow-rotate mouse-click"></a>
                            </li>
                            <li>
                                <h1>NiCKi</h1>
                            </li>
                            <li>
                                <a href="#" class="ion-earth icon-big nav-a-third hvr-pulse-grow"></a>
                                <a href="#" class="ion-android-share-alt icon-big nav-a-third hvr-pulse-grow"></a>
                                <a href="#" class="ion-ios-play icon-big nav-a-third hvr-pulse-grow"></a>
                            </li>
                        </ul>  
                    </div>
                    <div class="row margin-top-60px header-cont">
                        <h2 class="english-lang">HELLO</h2>  
                        <h2 class="georgian-lang">gamarjoba</h2>  
                        <h3 class="english-lang">WANT TO SEE MORE?!</h3>
                        <h3 class="georgian-lang">ginda naxo meti?!</h3>
                        <a href="#how-works" class="btn hvr-bounce-in english-lang-btn">-CONTINUE-</a>
                        <a href="#how-works" class="btn hvr-bounce-in georgian-lang-btn">-gaagrZele-</a>
                    </div>
                  </div>
                </div>
            </header>
            
            <section id="how-works" class="work">

                 <div class="row underline">
                    <h3>WHY ME?</h3>
                    <h4>SIMPLE AS 2 X 2 = 4</h4>
                </div>
                <div class="row margin-top-60px">
                    <div class="col span-1-of-4">
                        <div class="row">
                            <div class="spin">
                                <span class="ion-ios-infinite icon-work"></span>
                            </div>
                        </div>
                        <div class="row">
                            <h4>UP TO 365 DAYS/YEAR</h4>
                        </div>
                    </div>
                    <div class="col span-1-of-4">
                        <div class="row">
                            <div class="spin">
                                <span class="ion-android-time icon-work"></span>
                            </div>
                        </div>
                        <div class="row">
                            <h4>READY<br> IN TIME</h4>
                        </div>
                    </div>
                    <div class="col span-1-of-4">
                        <div class="row">
                            <div class="spin">
                                <span class="ion-compose icon-work"></span>
                            </div>
                        </div>
                        <div class="row">
                            <h4>CLEAR<br> CODING</h4>
                        </div>
                    </div>
                    <div class="col span-1-of-4">
                        <div class="row">
                            <div class="spin">
                                <span class="ion-checkmark-circled icon-work"></span>
                            </div>
                        </div>
                        <div class="row">
                            <h4>CREATE <br> FOR YOU</h4>
                        </div>
                    </div>
                </div>
                <div class="row margin-top-60px">
                    <a href="#section-other" class="btn-work hvr-bounce-in">-CLICK ON ME-</a>
                </div>
            </section>
            <div class="row" style="height:10px; background-color:#f6ffa9;"></div>
            <section id="section-other" class="my-other">
                <div class="row underline">
                    <h3>RESPONSIVE WEBSITES</h3>
                </div>         
                <div id="container-for-3dmotion" class="row container-for-3dmotion margin-top-60px">
                    
                    <div id="viewport" >
                            <div id="comp">
                                <img class="laptop-container" src="resources/img/Macbook-my.png">
                                <img class="ipad-container" src="resources/img/ipad-my.png">
                            </div>
                    </div>
                </div>
                  <div class="row">
                        <div class="col span-1-of-2">
                            <a id="btn-next-left" class="btn-next hvr-backward"><</a>
                        </div>
                        <div class="col span-1-of-2">
                            <a id="btn-next-right" class="btn-next hvr-forward">></a>
                        </div>
                    </div>
            </section>

            <footer>
                <div class="row">
                    <h1 class="color-change">--    --</h1>
                </div>
                <div class="row">
                    <div class="col span-1-of-2">
                        <div class="row"><h5 class="english-lang color-change">TBILISI</h5></div>
                        <div class="row"><h5 class="georgian-lang color-change">tbilisi</h5></div>
                        <div class="row"><h6 class="english-lang color-change">TSERETELI AVN</h6></div>
                        <div class="row"><h6 class="georgian-lang color-change">wereTlis gamziri</h6></div>
                        <div class="row"><h6 class="english-lang color-change">1ST CAMPUS</h6></div>
                        <div class="row"><h6 class="georgian-lang color-change">pirveli korp.</h6></div>
                        <div class="row"><h5 class="english-lang color-change">(+995) 593 944 250</h6></div>
                        <div class="row"><h5 class="georgian-lang color-change">(+995) 593 944 250</h6></div>
                        <div class="row"><h5 class="color-change">nikakhurashvili@gmail.com</h6></div>
                    </div>
                    <div class="col span-1-of-2">
                        <div class="row">
                            <h4 class="color-change">SOCIAL</h4>
                        </div>
                        <div class="row padding-top-40px">
                            <div class="col span-1-of-4">
                                <a href="https://facebook.com/" class="ion-social-facebook-outline footer-icon hvr-wobble-vertical color-change"></a>
                            </div>
                            <div class="col span-1-of-4">
                                <a href="https://www.instagram.com/" class="ion-social-instagram-outline footer-icon hvr-wobble-vertical color-change"></a>
                            </div>
                            <div class="col span-1-of-4">
                                <a href="https://www.linkedin.com/" class="ion-social-linkedin footer-icon hvr-wobble-vertical color-change"></a>
                            </div>
                            <div class="col span-1-of-4">
                                <a href="https://plus.google.com/" class="ion-social-googleplus-outline footer-icon hvr-wobble-vertical color-change"></a>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="row  padding-top-40px">
                    <p class="english-lang">This webpage was created by Nikoloz Khurashvili ( <span class="color-change"> NiCKi </span> ) for users to introduce myself.</p>
                     <p class="georgian-lang-2">ეს ვებსაიტი შექმნილია ნიკოლოზ ყურაშვილის ( <span class="color-change"> NiCKi </span> ) -მიერ მომხმარებლისთვის, რომ წარვუდგინო ჩემი თავი.</p>
                </div>
                <div class="row  padding-top-20px">
                    <p class="english-lang">Build with <span class="ion-heart color-change"></span> in 2016 by Nikoloz Khurasvili ALL RIGHTS RESERVED</p>
                    <p class="georgian-lang-2">შეიქმნა <span class="ion-heart color-change"></span> -ით 2016 წელს ნიკოლოზ ყურაშვილის მიერ ALL RIGHTS RESERVED</p>
                </div>
            </footer>
            
        </div>
     
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script-for-gallery.js"></script>
    
    </body>  
    
</html>