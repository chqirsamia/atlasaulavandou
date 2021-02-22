<?php

use Illuminate\Database\Seeder;
use App\Plat;

class PlatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plat::create([
            "titre"=>"Couscous Légumes ",

            "description"=>"pomme de terre, petits pois, carottes et olives",
            "slug"=>"Couscous Légumes",
            "prix"=>1400,
            "image"=>"couscous_legumes.png"

        ])->categories()->attach(2);
        Plat::create([
            "titre"=>"Couscous Boulettes",

            "description"=>"Boulettes de boeuf avec ses légumes",
            "slug"=>"Couscous Boulettes",
            "prix"=>1500,
            "image"=>"Couscous Boulettes.png"

        ])->categories()->attach(2);
        
    }
}
