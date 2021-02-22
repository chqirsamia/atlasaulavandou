@extends('layouts.master')

@section('content')
  @foreach ($plats as $plat)
    <div class="col-md-6">
      <div class="row no-gutters border rounded d-flex align-items-center flex-md-row mb-4 shadow-sm position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <small class="d-inline-block text-info mb-2">
            @foreach ($plat->categories as $category)
                {{ $category->name }}{{ $loop->last ? '' : ', '}}
            @endforeach
          </small>
          <h5 class="mb-0">{{ $plat->titre }}</h5>
          <p class="mb-3 text-muted">{!!$plat->description!!}</p>
          <strong class="display-4 mb-4 text-secondary">{{ $plat->getFrenshPrice() }}</strong>
          <a href="{{ route('plats.show', $plat->slug) }}" class="stretched-link btn btn-info"><i class="fa fa-location-arrow" aria-hidden="true"></i> Consulter le plat</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="{{ asset('storage/' . $plat->image) }}" alt="">
        </div>
      </div>
    </div>
  @endforeach
  {{ $plats->appends(request()->input())->links() }}
@endsection