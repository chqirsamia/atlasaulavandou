<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    public function getFrenshPrice()
    { $prix= $this->prix/100;
     return number_format($prix,2,',',' ').'€';
    }
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
   
}
