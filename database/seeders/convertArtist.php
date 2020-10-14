<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
Use App\Models\User;

class convertArtist extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$old_artists = DB::connection('mysql')->table('artist')->get();
		$count = 0;
	
		foreach ($old_artists as $artist) {
            $user = User::create(['name'=>$artist->artFirstName,'email'=>$artist->artEMail, 'password'=>Hash::make($artist->artPassword)]);
			DB::connection('sqlite')->table('artists')->insert([
                'user_id' => $user->id,
				'first_name' => $artist->artFirstName,
				'middle_name' => $artist->artMiddle,
				'last_name' => $artist->artLastName,				
				'address' => $artist->artAddress,
				'city'=>$artist->artCity,
				'state'=>$artist->artState,
				'zip' => $artist->artZip,
				'picture'=>$artist->artPicture,
                'id'   => $artist->artID,
                'phone' => '5555555555',
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),			
			]);
			$count++;
		}	
		echo 'artists complete - ';  
		echo $count . ' Artists converted';  
	}
}
