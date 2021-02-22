<?php

namespace App\Http\Controllers;

use DateTime;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;


class confirmation extends Controller
{
    public function confirmer()
    {
        

        //dd($data);

        $order = new Order();

        $order->amount =Cart::subtotal();


        $plats = [];
        $i = 0;
        $commande="";
        foreach (Cart::content() as $plat) {
            $plats[ $i][] = $plat->model->titre;
            $plats[ $i][] = $plat->model->prix;
            $plats[ $i][] = $plat->qty;
           // $commande.="le  ".$i. "ème plat est" .$plats[$i][0]." de quantité ".$plats[$i][2]."\n";
            $i++;
        };
        $commande.='le 1er plat est: ' .$plats[0][0].' de quantité:  '.$plats[0][2]." ";
       
        for($j=2;$j<(count($plats)+1);$j++)
        
       {  
                $commande.='le  '.$j. 'ème plat est:    ' .$plats[$j-1][0].' de quantité '.$plats[$j-1][2]." ";
               
            }
        
    
        $order->plats =$commande;
        
        $order->nom=Auth()->user()->nom;
        $order->email=Auth()->user()->email;
        $order->adresse=Auth()->user()->adresse;
        $order->téléphone=Auth()->user()->téléphone;
        $order->ville=Auth()->user()->ville;
        //$order->plats = serialize($plats);
        $order->user_id = Auth()->user()->id;

        $order->save();
        Cart::destroy();
        return  view('checkout.confirmer') ;
    }
}
