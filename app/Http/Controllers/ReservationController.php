<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of reservation.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function getreservation() { 

        return view('reservation'); 
       } 
 
    public function savereservation(Request $request)
    {
        $reservation = new Reservation;
    
        $reservation->nom = $request->nom;
        $reservation->email = $request->email;
        $reservation->téléphone = $request->téléphone;
        $reservation->date = $request->date;
        $reservation->heureFin = $request->heureFin;
        $reservation->heureDeb = $request->heureDeb;
        $reservation->nbr_pers = $request->nbr_pers;
        
       
        $reservation->save();
        return back()->with('success', 'merci de reserver');

    
    }

}
