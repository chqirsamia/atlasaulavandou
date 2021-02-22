@extends('layouts.master')

@section('content')
  <div class="col-md-12">
    <div class="row no-gutters p-3 border rounded d-flex align-items-center flex-md-row mb-4 shadow-sm position-relative">
      <div class="col p-3 d-flex flex-column position-static">
        <muted class="d-inline-block mb-2 text-info">
          @foreach ($plat->categories as $category)
              {{ $category->name }}{{ $loop->last ? '' : ', '}}
          @endforeach
        </muted>
        <h3 class="mb-4">{{ $plat->title }}</h3>
        <span>{!! $plat->description !!}</span>
        <strong class="mb-4 display-4 text-secondary">{{ $plat->getFrenshPrice() }}</strong>
        <form action="{{ route('cart.store') }}" method="POST">
          @csrf
          <input type="hidden" name="plat_id" value="{{ $plat->id }}">
          <button type="submit" class="btn btn-success mb-2"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Ajouter à mon panier</button>
        </form>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="{{ asset('storage/' . $plat->image) }}" alt="">
      </div>
    </div>
  </div>
@endsection