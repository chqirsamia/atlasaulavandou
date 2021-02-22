
@extends('layouts.master')

@section('content')
  @foreach ($plats as $plat)
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <small class="d-inline-block mb-2">
            @foreach ($plat->categories as $category)
                {{ $category->name }}{{ $loop->last ? '' : ', '}}
            @endforeach
          </small>
          <h5 class="mb-0">{{ $plat->titre }}</h5>
          <p class="mb-auto text-muted">{{ $plat->description }}</p>
          <strong class="mb-auto font-weight-normal text-secondary">{{ $plat->getFrenshPrice() }}</strong>
          <a href="{{ route('plats.show', $plat->slug) }}" class="stretched-link btn btn-info" >voir le plat</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="{{ asset('storage/'.$plat->image)}}" alt="">
        </div>
      </div>
    </div>
  @endforeach
  {{ $plats->appends(request()->input())->links() }}
@endsection