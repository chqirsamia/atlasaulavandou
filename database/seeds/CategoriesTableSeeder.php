<?php
use App\Category;
use Illuminate\Database\Seeder;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'boissons',
            'slug' => 'boissons'
        ]);

        Category::create([
            'name' => 'couscous',
            'slug' => 'couscous'
        ]);

        Category::create([
            'name' => 'salades',
            'slug' => 'salades'
        ]);

        Category::create([
            'name' => 'tagines',
            'slug' => 'tagines'
        ]);

        Category::create([
            'name' => 'chicha',
            'slug' => 'chicha'
        ]);
    }
}
