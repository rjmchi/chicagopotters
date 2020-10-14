<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class convertCustomer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$old_customers = DB::connection('mysql')->table('customer')->get();
		$count = 0;
		foreach ($old_customers as $customer) {
			$count++;
			DB::connection('sqlite')->table('customers')->insert([
				'id' => $customer->cstID,
				'first_name' => $customer->cstFirstName,
				'last_name' => $customer->cstLastName,
				'address' => $customer->cstAddress,
				'city' => $customer->cstCity,
				'state' => $customer->cstState,
				'zip' => $customer->cstZip,
				'country' => $customer->cstCountry,
				'email' => $customer->cstEMail,
				'phone' => $customer->cstPhone,	
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),		
				]);
			}
		
        echo 'customers complete - ' . $count . ' customers converted';
    }
}
