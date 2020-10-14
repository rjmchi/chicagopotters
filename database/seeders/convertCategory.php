<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class convertCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $old_categories = DB::connection('mysql')->table('category')->get();
        $count = 0;		
		foreach ($old_categories as $category) {
			DB::connection('sqlite')->table('categories')->insert([
				'name' => $category->catName,
                'slug' => Str::slug($category->catName),
				'id'   => $category->catID,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),						
            ]);
            $count ++;
		}			
		
        echo 'categories complete - ';   
		echo $count . ' categories converted';  
    }
}
