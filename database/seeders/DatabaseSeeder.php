<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
 		$this->call(convertArtist::class);
         $this->call(convertCategory::class);
         $this->call(convertPiece::class);
         $this->call(convertCategoryPiece::class);
         $this->call(convertPicture::class);
         $this->call(convertCustomer::class);
         $this->call(convertOrder::class);
        $this->call([AlbumSeeder::class,]);
		echo 'done!';
    }
}


