<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        $categories = [
            ["catID"=>"1","catName"=>"Bowls"],
            ["catID"=>"2","catName"=>"Vases"],
            ["catID"=>"3","catName"=>"Misc"],
            ["catID"=>"4","catName"=>"Stoneware"],
            ["catID"=>"5","catName"=>"Raku"],
            ["catID"=>"6","catName"=>"Soda Fired"],
            ["catID"=>"7","catName"=>"Porcelain"],
            ["catID"=>"8","catName"=>"Terra Cotta"],
            ["catID"=>"9","catName"=>"Lamps"],
            ["catID"=>"10","catName"=>"Plates And Platters"],
            ["catID"=>"11","catName"=>"Tiles"]
        ];
        foreach ($categories as $category) {
            // dd($category);
            $c = new Category;
            $c->name = $category["catName"];
            $c->slug = Str::slug($category["catName"]);
            $c->save();
        }
    }
}
