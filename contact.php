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
        
        <link rel="stylesheet" type="text/css" href="resources/css/style-for-contact.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
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
                        <a href="#section-contact" class="btn hvr-bounce-in english-lang-btn">-CONTINUE-</a>
                        <a href="#section-contact" class="btn hvr-bounce-in georgian-lang-btn">-gaagrZele-</a>
                    </div>
                  </div>
                </div>
            </header>

            <section id="section-contact" class="contact">
                
                 <div class="animate-background1 row1 col1">
                    <img src="resources/img/kitxvabrdzaneba.png">
                </div>
                <div class="animate-background2 row2 col1">
                    <img src="resources/img/kitxvisnishani.png">
                </div>
                <div class="animate-background3 row3 col1">
                    <img src="resources/img/brdzanebisnishani.png">
                </div>
                
                <div class="animate-background2 row1 col2">
                    <img src="resources/img/brdzanebisnishani.png">
                </div>
                <div class="animate-background3 row2 col2">
                    <img src="resources/img/kitxvabrdzaneba.png">
                </div>
                <div class="animate-background1 row3 col2">
                    <img src="resources/img/kitxvisnishani.png">
                </div>
                
                <div class="animate-background4 row1 col3">
                    <img src="resources/img/kitxvisnishani.png">
                </div>
                <div class="animate-background3 row2 col3">
                    <img src="resources/img/brdzanebisnishani.png">
                </div>
                <div class="animate-background2 row3 col3">
                    <img src="resources/img/kitxvabrdzaneba.png">
                </div>
                
                <div class="animate-background1 row1 col4">
                    <img src="resources/img/kitxvisnishani.png">
                </div>
                <div class="animate-background2 row2 col4">
                    <img src="resources/img/brdzanebisnishani.png">
                </div>
                <div class="animate-background5 row3 col4">
                    <img src="resources/img/kitxvabrdzaneba.png">
                </div>
                
                <div class="animate-background2 row1 col5">
                    <img src="resources/img/kitxvabrdzaneba.png">
                </div>
                <div class="animate-background1 row2 col5">
                    <img src="resources/img/kitxvisnishani.png">
                </div>
                <div class="animate-background4 row3 col5">
                    <img src="resources/img/brdzanebisnishani.png">
                </div>
                
                 
                 
                
                <div class="row underline">
                    <h3>CONTACT</h3>
                    <p>Feel free to contact, I am available 24/7</p>
                </div>
                <div class="row contact-form">
                    <form method="post" action="#" class="contact-form">
                        
                        <div class="row">
                            <div class="col span-1-of-2 rev1">
                                <label for="name" class="name-label">-Name-</label>
                            </div>
                            <div class="col span-1-of-2 rev1input">
                                <input class="name-input" type="text" name="name" id="name" placeholder="Your name" required>
                            </div>
                        </div>
                        
                    <div class="row">
                        <div class="col span-1-of-2 rev2">
                            <label for="email" class="email-label">-Email-</label>
                        </div>
                        <div class="col span-1-of-2 rev2input">
                            <input class="email-input" type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="col span-1-of-2  rev3">
                            <label class="find-label" for="find-me">-How did you find me?-</label>
                        </div>
                        <div class="col span-1-of-2 rev3input">
                            <select type="find" class="find-input" name="find-us" id="find-me">
                                <option value="friends" selected>-Friends-</option>
                                <option value="search">-Search engine-</option>
                                <option value="ad">-Advertisement-</option>
                                <option value="other">-Other-</option>
                            </select>
                        </div>
                    </div>
              
                    <div class="row">
                        <div class="col span-1-of-2 rev4">
                            <label class="text-label" >-Drop us a line-</label>
                        </div>
                        <div class="col span-1-of-2 rev4input">
                            <textarea type="text" class="text-input" name="message" placeholder="Your message"></textarea>
                        </div>
                    </div>
                        
                    <div class="row rev5input">
                        <input class="submit-contact" type="submit"  name="submit" value="Send it!">
                    </div>
                    
                </form>
                </div>
                
                <?php 
                
                    if(isset($_POST['submit'])){   
                        
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $find_info = $_POST['find-us'];
                        $text = $_POST['message'];
                        
                    }
                
                ?>

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
    <script src="resources/js/script-for-contact.js"></script>
    
    </body>  
    
</html>