<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class convertPiece extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$old_pieces = DB::connection('mysql')->table('piece')->get();
		$count = 0;
		foreach ($old_pieces as $piece) {
			DB::connection('sqlite')->table('pieces')->insert([
				'title' => $piece->pceTitle,
				'description' => $piece->pceDescription,
				'dimensions' => $piece->pceDimension,
				'decoration' => $piece->pceDecoration,
				'price' => $piece->pcePrice,
				'weight' => $piece->pceWeight,
				'artist_id' => $piece->artID,				
				'sold' => $piece->ordID > 0,					
				'id'   => $piece->pceID,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),				
			]);	
			$count++;	
		}
        echo 'pieces complete - '. $count . ' Pieces converted';
    }
}
