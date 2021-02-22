<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="restaurant l'ATLAS">
    <meta name="author" content="Samia CHQIR">
    @yield('extra-meta')

    <title>L'ATLAS</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('extra-script')

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- FontAwesome 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ecommerce App CSS -->
    <link rel="stylesheet" href="{{ asset('css/atlas.css') }}">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
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
          <a class="blog-header-logo text-dark" href="{{ route('plats.index') }}"> L'ATLAS</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          @include('partials.search')
          @include('partials.auth')
        </div>
      </div>
    </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      @foreach (App\Category::all() as $category)
      <a class="p-2 text-muted" href="{{ route('plats.index', ['categorie' => $category->slug]) }}"><strong>{{ $category->name }}</strong></a>
      @endforeach
    </nav>
  </div>

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
  <div class="row mb-2">
  @yield('content')
  </div>
</div>


<footer class="blog-footer">
  <p>

    <a href="http://127.0.0.1:8000/" style="color:#f705cb">L'ATLAS RESTAURANT</a> -  L'ATLAS
  </p>
  <p>
    <a href="" style="color:#f705cb">Revenir en haut</a>
  </p>
</footer>

@yield('extra-js')
</body>
</html>