<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        $this->call([
            AlbumSeeder::class,
        ]);

        $u = [
            'name'=>'robert', 
            'email'=>'robert@rjmchicago.com',
            'password'=>Hash::make('password'),
        ];
        $user = \App\Models\User::create($u);

        $a = [
            'first_name'=>'Robert',
            'middle_name'=>'J.',
            'last_name'=>'Milanowski',
            'phone'=>'7738025167',
            'address'=>'2735 N. Richmond St.',
            'city'=>'Chicago',
            'state'=> 'IL',
            'zip'=>'60647',
            'picture'=>'rjm.jpg',
            ] ;
        $user->artist()->create($a);
    }
}


