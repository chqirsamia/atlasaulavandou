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
    <meta name="author" content="atlas" />
    <meta name="description" content="atlas Description" />
    <meta name="keywords"  content="atlas Keyword" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
    <link rel="icon" href="img/icone.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/atlas.css') }}">
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
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
    function initialize() {
      //add cordinate here http://www.mapcoordinates.net/en
      var myLatlng = new google.maps.LatLng(40.7389348,-73.7008329);
      var mapOptions = {
        zoom: 15,
        center: myLatlng
      }

      var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

      var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Atlas Au Lavandou'
      });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
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
</head>

<body>
    <!-- Menu -->
    <nav class="menu menu-left">
      <div class="close-menu-btn icon-menu active">&nbsp;</div>    
      <ul>
        <li><a href="{{ route('welcome') }}" class="scroll-link">acceuil</a></li>
        <li><a href="{{ route('plats.index') }}" class="scroll-link">menu</a></li>
        <li><a href="{{ route('home') }}" class="scroll-link">mes commandes</a></li>
        <li><a href="{{ route('reservation') }}" class="scroll-link">reservez une table</a></li>
        <li><a href="{{ route('contact') }}" class="scroll-link">contactez nous</a></li>
        <li><a href="{{ route('login') }}" class="scroll-link">login</a></li>
      </ul>
  </nav>
<div class="menu-btn"><span class="icon-menu">&nbsp;</span>Menu</div>

    
    <!-- Site Overlay -->
    <div class="site-overlay"></div>

    <!-- Your Content -->
    <div id="container">

        <div id="full-width-header" class="full-width">
            <div class="triangle top"></div>
            <div class="inner">
                <div class="slide">
                    <div class="inner-slide">
                        <div id="map-canvas"></div>
                    </div>
                </div>
            </div>
            <div class="triangle bottom"></div>
        </div>
        
        <div class="clear"></div>

        <div class="container full-page">
            <div id="contact-us" class="main-container">
                <div class="row">
                    <div class="main-content col">
                        <div class="title">
                            <h1>Contactez nous</h1>
                        </div>
                        <div class="card-body">
                          @if(Session::has('success'))
                             <div class="alert alert-success">
                               {{ Session::get('success') }}
                              </div>
                          @endif 
                        </div>
                    </div>
                </div>
                
                    <div class="contact-address col">
                        <div class="contact-address-container">
                            <span class="dot dot-left-top">&nbsp;</span><span class="dot dot-right-top">&nbsp;</span><span class="dot dot-left-bottom">&nbsp;</span><span class="dot dot-right-bottom">&nbsp;</span>
                            Atlas Au Lavandou<br/>
                            29 quai Gabriel Péri 83980 Le Lavandou<br/><br/>
                            +33 4 94 64 73 10<br/>
                            contact@latlasaulavandou.fr<br/>
                        </div>
                    </div>
                    
                  <form method="post" action="contact">
                    {{csrf_field()}}
                    <div class="row">
                    <div class="contact-form-input-data col">
                        <div class="contact-form-input-container">
                            <div class="contact-form-input-icon"><span class="input-icon icon-name">&nbsp;</span></div>
                            <input type="text" class="contact-form-input-text @error('nom') is-invalid @enderror" placeholder="Nom..." name="nom">
                            @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>
                      <div class="contact-form-input-data col">
                        <div class="contact-form-input-container">
                            <div class="contact-form-input-icon"><span class="input-icon icon-email">&nbsp;</span></div>
                            <input type="text" class="contact-form-input-text @error('email') is-invalid @enderror" placeholder="Email..." name="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="contact-form-input-message col">
                        <div class="contact-form-input-container">
                            <div class="contact-form-input-icon"><span class="input-icon icon-message">&nbsp;</span></div>
                            <textarea class="contact-form-input-text" @error('message') is-invalid @enderror placeholder="message" name="msg"></textarea>
                            @error('msg')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="button-container">
                            <input type="submit" value="envoyer le message" class="button grey-button contact-form-input-submit"/>
                        </div>
                    </div>
                  </form>  
                </div>
            </div>
        </div>
        
        <div class="clear space-area"></div>
        
        <div class="triangle top footer"></div>
        <div class="container footer">
            <div id="footer" class="main-container">
                <div class="footer-top row">
                    <div class="footer-info col">
                        <div class="footer-logo">
                            <div class="logo-icon"><img src="img/footer-logo.png" /></div>
                        </div>
                        <div class="footer-address">
                          Atlas Au Lavandou</br>29 quai Gabriel Péri 83980 Le Lavandou
                      </div>
                      <div class="footer-contact">
                        +33 4 94 64 73 10<br/>contact@latlasaulavandou.fr</a>
                      </div>
                    </div>
                   
                    <div class="clear"></div>
                </div>


                  <div class="footer-bottom row">
                      <div class="footer-copyright col">
                          <div class="footer-copyright-text">Copyright ©2020 All rights reserved <a href="https://feen-tech.com/">FeenTech </a>. </div>
                      </div>
                  </div>
                  </ul>
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