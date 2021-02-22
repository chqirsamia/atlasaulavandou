<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9"> <![endif]-->
<!--[if IE 9 ]> <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->

<head>
    <!-- Load Google font on the first <head> to prevent error in IE -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600,800,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>atlas</title>
	
  	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
      <link href="css/font-awesome.css" rel="stylesheet" type="text/css"> 
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <!-- Using IE Conditional to load stylesheet, Load style.less for all browser except lower than IE 9. Lower than IE9 using style.css -->
    <!--[if !IE]><!-->
    <link rel="stylesheet/less" type="text/css" href="css/style.less" />
    <!--<![endif]-->
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <![endif]-->
    <!--[if gte IE 9]>
    <link rel="stylesheet/less" type="text/css" href="css/style.less" />
    <![endif]-->
	<style type="text/css" media="screen">

        /* custom css theme panel */
        .fa {
            padding: 20px;
            font-size: 30px;
            width: 70px;
            text-align: center;
            text-decoration: none;
        }
        
        /* Add a hover effect if you want */
        .fa:hover {
            opacity: 0.7;
        }
        
        /* Set a specific color for each brand */
        
        /* Facebook */
        .fa-facebook {
            background: #eff0f300;
            color: rgb(16, 13, 230);
        }
        .fa-instagram {
            background: #f2f5f700;
            color: rgb(243, 3, 3);
            }
        </style>
    <!-- Option for Less JS -->
    <script>
      less = {
        env: "development",
        async: false,
        fileAsync: false,
        poll: 1000,
        functions: {},
        dumpLineNumbers: "comments",
        relativeUrls: false
      };
    </script>

    <script type="text/javascript" src="js/less.min.js"></script>
    <script type="text/javascript" src="js/retina.min.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.71422.js"></script>
</head>

<body>
    <nav class="menu menu-left">
        <div class="close-menu-btn icon-menu active"></div>    
        <ul>
          
          <li><a href="{{ route('plats.index') }}" class="scroll-link">menu</a></li>
          <li><a href="{{ route('home') }}" class="scroll-link">mes commandes</a></li>
          <li><a href="{{ route('reservation') }}" class="scroll-link">reservez une table</a></li>
          <li><a href="{{ route('contact') }}" class="scroll-link">contactez nous</a></li>
          <li><a href="{{ route('login') }}" class="scroll-link">login</a></li>
        </ul>
    </nav>
    <!-- Menu Button -->
    <div class="menu-btn"><span class="icon-menu"></span> Menu</div>
    <div class="container">
        <div class="main-container row">
            <div id="logo">
                <a href="{{ route('plats.index') }}">
                   
                    <h1> Restaurant ATLAS </h1>

                   
                </a>
                <div class="logo-slogan">vous souhaite la bienvenue</div> 
            </div>
        </div>
    </div>
    <div class="site-overlay"></div>

    <div id="container">

       

        <div id="full-width-slider" class="full-width">

            <div class="triangle top"></div>

            <div class="inner">
                <div class="slide">
                    <div class="inner-slide">
                        <div class="slide-desc">
                            <h1>L'ATLAS</h1>
                            <span class="sub-title">
                                <span class="sub-title-line">&nbsp;</span>
                                <h2>spécialité marocaine</h2>
                                <span class="sub-title-line">&nbsp;</span>
                                <div class="clear"></div>
                            </span>
                            
                        </div>
                        <!-- Image width and height automatically adjust depends on window width in js/slider.js -->
                        <img src="img/slider/2.jpg" width="1980" height="1040">
                    </div>
                </div>
                <div class="slide">
                  <div class="inner-slide">
                      <div class="slide-desc">
                          <h1>Maroc Au Lavandou</h1>
                          <span class="sub-title">
                              <span class="sub-title-line">&nbsp;</span>
                              <h2>plus de 19 ans </h2>
                              <span class="sub-title-line">&nbsp;</span>
                              <div class="clear"></div>
                          </span>
                          <h1>d'expérience</h1>
                      </div>
                      <img src="img/slider/1001.jpg" width="1980" height="1040">
                  </div>
              </div>
          
                <div class="slide">
                    <div class="inner-slide">
                        <div class="slide-desc">
                            <h1> </h1>
                            <span class="sub-title">
                                <span class="sub-title-line">&nbsp;</span>
                                <h2></h2>
                                <span class="sub-title-line">&nbsp;</span>
                                <div class="clear"></div>
                            </span>
                            <h1> l'ATLAS</h1>
                        </div>
                        <img src="img/slider/1008.jpg" width="1980" height="1040">
                    </div>
                </div>
                
              </div>
            <!-- Slider Control, next and previous button -->
            <div class="controls">
                <a href="#" class="left"><span class="icon-slider prev">&nbsp;</span></a>
                <a href="#" class="right"><span class="icon-slider prev">&nbsp;</span></a>
            </div>

            <!-- Slider navigation, bullet -->
            <div class="slide-nav"></div>

            <!-- Triangle bottom area for slider -->
            <div class="triangle bottom"></div>
        </div>
        
        <!-- Clear used in everypage to fix float problem -->
        <div class="clear"></div>

        <!-- Container for featured content -->
        <div class="container">
            <div id="featured" class="main-container">
                <div class="row">
                    <div class="featured-left col">
                        <div class="title">
                            <h1>Atlas </h1>
                            <h2 class="sub-title">Restaurant</h2>
                        </div>
                        <div class="content">
                            <p>Envie d’un thé à la menthe, un petit repas, un moment de détente, une chicha et tout ça à la fois, c’est ici que ça se passe... </p>
                        </div>
                        
                    </div>
                    <div class="featured-right col">
                        <div class="featured-image">
                            <img src="img/mainimg.jpg" class="zoomIn wow animated" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clear"></div>

        <div class="triangle top promotion"></div>
        <!-- Container for promotion content -->
        <div class="container promotion">
            <div id="promotion" class="main-container">
                <div class="row">
                    <div class="promotion-title col">
                        <div class="title">
                            <h1>Nos services</h1>
                            
                        </div>
                    </div>
                    
                </div>

                <div class="clear"></div>

                <ul id="promotion-product" class="row">
                    <li class="product col">
                        <div class="promotion-product-container">
                            <!-- Four dot in promotion box, also used in contact address box in contact page -->
                            <span class="dot dot-left-top">&nbsp;</span><span class="dot dot-right-top">&nbsp;</span><span class="dot dot-left-bottom">&nbsp;</span><span class="dot dot-right-bottom">&nbsp;</span>
                            
                            <!-- Main image for promotion content -->
                            <div class="promotion-product-image"><img src="img/annif.jpg"/></a></div>
                            <div class="promotion-product-desc">
                                <div class="promotion-product-title"><h4>Fête d'anniversaire</a></h4></div>
                                <div class="promotion-product-content content"><p>pour organiser un oubliable anniversaire .</p></div>
                            </div>
                            
                        </div>
                    </li>
                    <li class="product col">
                        <div class="promotion-product-container">
                            <div class="promotion-product-container">
                            <span class="dot dot-left-top">&nbsp;</span><span class="dot dot-right-top">&nbsp;</span><span class="dot dot-left-bottom">&nbsp;</span><span class="dot dot-right-bottom">&nbsp;</span>
                            <div class="promotion-product-image"><img src="img/marriage.jpg" /></a></div>
                            <div class="promotion-product-desc">
                                <div class="promotion-product-title"><h4>Mariage</a></h4></div>
                                <div class="promotion-product-content content"><p>afin de marquer votre grand jour</p></div>
                            </div>
                           
                        </div>
                    </li>
                    <li class="product col">
                        <div class="promotion-product-container">
                            <span class="dot dot-left-top">&nbsp;</span><span class="dot dot-right-top">&nbsp;</span><span class="dot dot-left-bottom">&nbsp;</span><span class="dot dot-right-bottom">&nbsp;</span>
                            <div class="promotion-product-image"><img src="img/traiteur.jpg" /></a></div>
                            <div class="promotion-product-desc">
                                <div class="promotion-product-title"><h4>Traiteur</a></h4></div>
                                <div class="promotion-product-content content"><p>Animer vos fetes.</p></div>
                            </div>
                            
                        </div>
                    </li>
                    <div class="clear"></div>
                </ul>
            </div>

            <!-- For fix float problem and give space area with height 90px -->
            <div class="clear space-area"></div>
        </div>
     
        <div class="clear"></div>

       
        <!-- Footer Area -->
        <div class="container footer">
            <div id="footer" class="main-container">
                <div class="footer-top row">
                    <div class="footer-info col">
                        
                        <div class="col-md-6 col-lg-3">
                            <div class="ftco-footer-widget mb-4">
                              <h2 class="ftco-heading-2">Horaire</h2>
                              <ul class="list-unstyled open-hours">
                                  
                                <div class="d-flex"><span style="font-size: medium; font-weight: normal;">lundi</span><span style="font-size: medium; font-weight: normal;"> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;10:00 - 15:00</span></div>
                                <div class="d-flex"><span style="font-size: medium; font-weight: normal;">Mardi</span><span style="font-size: medium; font-weight: normal;">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  10:00 - 15:00</span></div>
                                <div class="d-flex"><span style="font-size: medium; font-weight: normal;">Mercredi</span><span style="font-size: medium; font-weight: normal;">&nbsp; &nbsp;&nbsp;10:00 - 15:00</span></div>
                                <div class="d-flex"><span style="font-size: medium; font-weight: normal;">Jeudi &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </span><span style="font-size: medium; font-weight: normal;">10:00 - 15:00</span></div>
                                <div class="d-flex"><span style="font-size: medium; font-weight: normal;">Vendredi&nbsp; &nbsp; </span><span style="font-size: medium; font-weight: normal;">10:00 - 15:00 / 18:00 - 23:00</span></div>
                                <div class="d-flex"><span style="font-size: medium; font-weight: normal;">Samedi&nbsp; &nbsp; &nbsp; </span><span style="font-size: medium; font-weight: normal;">10:00 - 15:00 / 18:00 - 23:00</span></div>
                                <div class="d-flex"><span style="font-size: medium; font-weight: normal;">Dimanche&nbsp; &nbsp; </span><span style="font-size: medium; font-weight: normal;">10:00 - 18:00</span></div>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-3">
                            <div class="ftco-footer-widget mb-4">
                              <h2 class="ftco-heading-2">Abonnez-vous</h2>
                              <p style="font-size: medium; font-weight: normal;">abonnez-vous sur nos comptes Facebook et Instagram pour ne plus rien rater .</p>
                              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                    
                                <a href="https://www.facebook.com/latlasaulavandou/" class="fa fa-facebook"></a>
                                <a href="https://www.instagram.com/latlasaulavandou/" class="fa fa-instagram"></a>
                              </ul>
                            </div>
                          </div>
                        
                           
                        
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="ftco-footer-widget mb-4">
                         <h2 class="ftco-heading-2">Galerie</h2>
                         <div class="thumb d-sm-flex">
                           <a href="https://www.instagram.com/latlasaulavandou/" class="thumb-menu img" > <img src="img/traiteur.jpg" alt="">
                           </a>
                          
                         </div>
                    
                           
                            <div class="footer-bottom row">
                                <div class="footer-copyright col">
                                    <div class="footer-bottom" Align="Center" style="font-size: medium; font-weight: medium;">Copyright ©2020 All rights reserved <a href="https://feen-tech.com/">FeenTech </a>. </div>
                                </div>
                            
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
       
    </div>


    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/pushy.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <script type="text/javascript" src="js/fastclick.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>