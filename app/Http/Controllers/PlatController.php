<?php

namespace App\Http\Controllers;
use App\Plat;
use Illuminate\Http\Request;

class PlatController extends Controller
{
    public function index()
    {if (request()->categorie) {
        $plats = Plat::with('categories')->whereHas('categories', function ($query) {
            $query->where('slug', request()->categorie);
        })->orderBy('created_at','DESC')->paginate(6);
    } else {
        $plats = Plat::with('categories')->paginate(10);
    }

    return view('plats.index')->with('plats', $plats);
    }
    public function show($slug)
    {
       
        $plat = Plat::where('slug',$slug)->firstOrFail();
        return view('plats.show')->with ('plat',$plat);
    }
    public function search()
    {
        request()->validate([
            'cle' => 'required|min:1'
        ]);

        $cle = request()->input('cle');

        $plats = Plat::where('titre', 'like', "%$cle%")
                ->orWhere('description', 'like', "%$cle%")
                ->paginate(6);

        return view('plats.search')->with('plats', $plats);
    }
    


}
