<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Album;
use App\Models\Photo;

class PhotoAlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Photo::truncate();
        Album::truncate();        
        $faker = \Faker\Factory::create();        
        for ($i=0;$i<10;$i++) {
            $a = Album::create(['name'=>$faker->word,'description'=>$faker->sentence]);
            for($j=0;$j<10;$j++){
                $p = $a->photos()->create([
                    'filename'=>$faker->imageUrl($width = 640, $height = 480),
                    'caption'=>$faker->sentence,
                    'width' => 640,
                    'height'=> 480
                ]);
            }
        }
    }
}
