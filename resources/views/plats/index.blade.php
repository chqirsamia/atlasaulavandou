<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600,800,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
   
    


    <title>L'ATLAS</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="icon" href="img/icone.png" type="image/png">
   

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- FontAwesome 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ecommerce App CSS -->
    <link rel="stylesheet" href="{{ asset('css/atlas.css') }}">
    <link rel="stylesheet/less" type="text/css" href="css/style.less" />

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <style>
      /* Orange text gradient only for Webkit (Chrome and Safari) */
      .webkit #our-team h4.sub-title, .webkit #foods h4.sub-title {
          background: #ef9e10; /* Old browsers */
          background: -moz-linear-gradient(left,  #ef9e10 40%, #ef6910 60%); /* FF3.6+ */
          background: -webkit-gradient(linear, left top, right top, color-stop(40%,#ef9e10), color-stop(60%,#ef6910)); /* Chrome,Safari4+ */
          background: -webkit-linear-gradient(left,  #ef9e10 40%,#ef6910 60%); /* Chrome10+,Safari5.1+ */
          background: -o-linear-gradient(left,  #ef9e10 40%,#ef6910 60%); /* Opera 11.10+ */
          background: -ms-linear-gradient(left,  #ef9e10 40%,#ef6910 60%); /* IE10+ */
          background: linear-gradient(to right,  #ef9e10 40%,#ef6910 60%); /* W3C */
          filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ef9e10', endColorstr='#ef6910',GradientType=1 ); /* IE6-9 */
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
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
   
    
  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <a class="text-muted" href="{{ route('cart.index') }}">Panier <span class="badge badge-pill badge-info text-white">{{ Cart::count() }}</span></a>
        </div>
        <div class="col-4 text-center">
          <i class="fa fa-cutlery fa-2x"></i>
          <a class="blog-header-logo text-dark" href="{{ route('welcome') }}"> L'ATLAS</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          @include('partials.search')
          @include('partials.auth')
        </div>
      </div>
      <nav class="menu menu-left">
        <div class="close-menu-btn icon-menu active"></div>    
        <ul>
            <li><a href="{{ route('welcome') }}" class="scroll-link">acceuil</a></li>
          <li><a href="{{ route('plats.index') }}" class="scroll-link">menu</a></li>
          <li><a href="{{ route('home') }}" class="scroll-link">mes commandes</a></li>
          <li><a href="{{ route('reservation') }}" class="scroll-link">reservez une table</a></li>
          <li><a href="{{ route('contact') }}" class="scroll-link">contactez nous</a></li>
          <li><a href="{{ route('login') }}" class="scroll-link">login</a></li>
        </ul>
    </nav>
  <div class="menu-btn"><span class="icon-menu"></span>Menu</div>
    </header>
    

    <div id="full-width-header" class="full-width">
      <div class="triangle top"></div>
      <div class="inner">
          <div class="slide">
              <div class="inner-slide">
                  <img src="img/slider/2.jpg" width="1980" height="560">
                  

              </div>
          </div>
      </div>
      <div class="triangle bottom"></div>
  </div>

  <div class="clear"></div>
<div class="container full-page">
    <div id="our-food" class="main-container">
        <div class="row">
            <div class="main-content col">
                <div class="title">
                    
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                <h1>notre menu</h1>
                </div>  
                <div class="clear"></div>
                <div id="filter-foods">  
                    @foreach (App\Category::all() as $category)
                    <div class="filter button .grey-button" data-filter="all"><a href="{{ route('plats.index', ['categorie' => $category->slug]) }}"><strong>{{ $category->name }} ({{$category->nbr()}})</strong></a></div>
                    @endforeach
                </div>
            </div>   
        </div>   
                <div class="clear"></div>
                <div class="row">
                    <div id="foods">
                        @foreach ($plats as $plat)
                        <div class="food mix col sandwiches">
                            <div class="food-picture">
                                <img src="{{ asset('storage/'.$plat->image)}}" alt="">
                            </div>
                            <div class="food-name">
                                <h4>
                                    @foreach ($plat->categories as $category)
                                    {{ $category->name }}{{ $loop->last ? '' : ', '}}
                                    @endforeach
                                </h4>
                                <h3>{{ $plat->titre }}</h3>
                        
                                <p class="mb-auto text-muted">{!! $plat->description !!}</p>
                                <a href="{{ route('plats.show', $plat->slug) }}" class="stretched-link btn btn-info" >voir le plat</a>
                            </div>
                        </div>
                        @endforeach
            
                        
                    </div>
                </div>
 
    </div>
</div>         
@if (count($errors) > 0)
<div class="alert alert-danger">
<ul class="mb-0 mt-0">
  @foreach ($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
</div>
@endif
  
  @if (request()->input('cle'))
  <h6>{{ $plats->total() }} résultat(s) pour la recherche "{{ request()->cle }}"</h6>
@endif
{{ $plats->appends(request()->input())->links() }}

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/pushy.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="js/browser.selector.js"></script>
<script type="text/javascript" src="js/fastclick.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
    $('#foods').mixItUp();
</script>
</body>
</html>
