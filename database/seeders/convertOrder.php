<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class convertOrder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$old_orders = DB::connection('mysql')->table('custorder')->get();
		$count = 0;
		foreach ($old_orders as $order) {
			DB::connection('sqlite')->table('orders')->insert([
				'id' => $order->ordID,
				'customer_id' => $order->cstID,
				'order_date' => $order->ordDate,
				'piece_id' => $order->pceID,
				'special_instructions' => $order->ordSpecial,	
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),						
				]);
				$count++;
			}		
        echo 'orders complete - '. $count . ' Orders converted';
    }
}
