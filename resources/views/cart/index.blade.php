  

@extends('layouts.master')
@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')

      @if (Cart::count()>0)
      <div class="px-4 px-lg-0">
        
        
        <div class="pb-5">
            <div class="container">
                    <div class="row">
                        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                            
                
                            <!-- Shopping cart table -->
                            <div class="table-responsive">
                            <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0 bg-light">
                                    <div class="p-2 px-3 text-uppercase">Plat</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Prix</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Quantité</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">total</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">supprimer</div>
                                    </th>
                                </tr>
                            </thead>
                            <?php $count =1;?>
                            <tbody>
                                
                                @foreach (Cart::content() as $plat)
                                    
                                    <tr>
                                    <th scope="row"class="border-0">
                                        <div class="p-2">
                                        <img src="{{$plat->model->image}}" alt="" width="70" class="img-fluid rounded shadow-sm">
                                        <div class="ml-3 d-inline-block align-middle">
                                            <h5 class="mb-0"> <a href="{{ route('plats.show', ['slug' => $plat->model->slug]) }}" class="text-dark d-inline-block align-middle">{{ $plat->model->titre }}</a></h5>
                                        </div>
                                        </div>
                                    </th>
                                        <td class="border-0 align-middle"><strong>{{$plat->model->getFrenshPrice()}}</strong></td>
                                        <td class="border-0 align-middle">
                                            <select class="custom-select" name="qty" id="qty" data-id="{{ $plat->rowId }}">
                                                @for ($i = 1; $i <= 40; $i++)
                                                    <option value="{{ $i }}" {{ $plat->qty == $i ? 'selected' : ''}}>
                                                        {{ $i }}
                                                        
                                                    </option>
                                                @endfor
                                            </select>
                                        </td>
                                        
                                        <td class="border-0 align-middle" id="subtotal"><strong>{{getFrenshPrice($plat->subtotal())}}</strong></td>
                                        <td class="border-0 align-middle">
                                            <form action="{{route('cart.destroy',$plat->rowId)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-dark"><span style="color: #c00;"><i class="fa fa-trash"></i></span></a>
                                                </button>
                                            </form>            
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                            </table>
                            </div>
                           
                        </div>
                    </div>
                      
                        <div class="col-lg-12">
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                <h5 class="font-weight-bold">{{ getFrenshPrice(Cart::subtotal()) }}</h5>
                            </li>                                <div class="p-4">
                              
                                </ul><a href="{{route('checkout.index')}}" class="btn btn-dark rounded-pill py-2 btn-block">payer par carte</a>
                            </ul><a href="{{route('confirmation')}}" class="btn btn-dark rounded-pill py-2 btn-block">confirmer ma commande</a>

                       
                     </div>
            
            </div>
        </div>
</div>

      @else
      <div class="col-md-12">
        
        <h5>Votre panier est vide pour le moment.</h5>
        <p>Mais vous pouvez visiter la <a href="{{ route('plats.index') }}">menu</a> pour ajouter d'autres plats.
        </p>
      </div>
      @endif
@endsection


@section('extra-js')
<script>
  
   var qty = document.querySelectorAll('#qty');
    var subtotal = document.querySelectorAll('#subtotal');
    Array.from(qty).forEach((element) => {
        element.addEventListener('change', function () {
            var rowId = element.getAttribute('data-id');
            var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            fetch(`/commande/${rowId}`,
                {
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json, text-plain",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-TOKEN": token
                    },
                    method: 'PATCH',
                    body: JSON.stringify({
                        qty: this.value
                    })
            }).then((data) => {
                console.log(data);
           location.reload();
            }).catch((error) => {
                console.log(error);
            });
        });
    });

    
    
    </script>

@endsection
