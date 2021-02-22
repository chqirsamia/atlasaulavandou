@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">mes commandes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach (Auth()->user()->orders as $order)
                        <div class="card mb-3">
                            <div class="card-header">
                                Commande passée le {{ Carbon\Carbon::parse($order->payment_created_at)->format('d/m/Y à H:i')}} d'un montant de <strong>{{ getFrenshPrice($order->amount) }}</strong>
                            </div>
                            <div class="card-body">
                                <h6>Liste des plats</h6>
                               {{--}} @foreach (unserialize($order->plats) as $plat)
                                    <div>Nom du produit: {{ $plat[0] }}</div>
                                    <div>Prix: {{ getFrenshPrice($plat[1]) }}</div>
                                    <div>Quantité: {{ $plat[2] }}</div>
                                @endforeach--}}
                                
                                  
                                    <div> {{$order->plats}}</div> 
                                    
                                
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection