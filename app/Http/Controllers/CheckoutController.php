<?php

namespace App\Http\Controllers;

use DateTime;
use App\Order;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        if (Cart::count() <= 0) {
            return redirect()->route('plats.index');
        }

        Stripe::setApiKey('sk_test_3WteeitM6Wi4AK3SdJzBrm7300qGrAamxX');

        $intent = PaymentIntent::create([
            'amount' => round(Cart::subtotal()),
            'currency' => 'eur'
        ]);

        $clientSecret = Arr::get($intent, 'client_secret');

        return view('checkout.index', [
            'clientSecret' => $clientSecret
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
       
        $data = $request->json()->all();

        //dd($data);

        $order = new Order();

        $order->payment_intent_id = $data['paymentIntent']['id'];
        $order->amount = $data['paymentIntent']['amount'];

        $order->payment_created_at = (new DateTime())
            ->setTimestamp($data['paymentIntent']['created'])
            ->format('Y-m-d H:i:s');

        $plats = [];
        $i = 0;

        foreach (Cart::content() as $plat) {
            $plats['plat_' . $i][] = $plat->model->titre;
            $plats['plat_' . $i][] = $plat->model->prix;
            $plats['plat_' . $i][] = $plat->qty;
            $i++;
        }

        $order->plats = serialize($plats);
        $order->nom= Auth()->user()->nom;
        $order->email= Auth()->user()->email;
        $order->téléphone= Auth()->user()->téléphone;
        $order->adresse= Auth()->user()->adresse;
        $order->ville= Auth()->user()->ville;
        $order->user_id = Auth()->user()->id;
        $order->save();
     
        

        if ($data['paymentIntent']['status'] === 'succeeded') {
            Cart::destroy();
            Session::flash('success', 'Votre commande a été traitée avec succès.');
            return response()->json(['success' => 'Payment Intent Succeeded']);
        } else {
            return response()->json(['error' => 'Payment Intent Not Succeeded']);
        }
    }
    
    public function thankyou()
    {
        return Session::has('success') ? view('checkout.thankYou') : redirect()->route('cart.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
