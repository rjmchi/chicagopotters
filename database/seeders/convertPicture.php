<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class convertPicture extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $old_pictures = DB::connection('mysql')->table('picture')->get();
        $count = 0;
		foreach ($old_pictures as $picture) {
            $count++;

			$piece = DB::connection('mysql')->table('piece')->where('pceID', $picture->pceID)->first();
			
			$main_image = ($picture->picFile == $piece->pcePicture)?true:false;            
			
            $main_image = ($picture->picFile == $piece->pcePicture)?true:false;

            DB::connection('sqlite')->table('pictures')->insert([
				'id' => $picture->picID,
				'piece_id' => $picture->pceID,
				'file_name' => $picture->picFile,
				'original_name' => $picture->picOriginalName,
				'main_image' => $main_image,	
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),						
			]);
		}
        echo 'pictures complete - '. $count . ' Pictures converted';
    }
}
