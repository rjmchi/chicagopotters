<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Piece;

class convertCategoryPiece extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $old_pieces_categories = DB::connection('mysql')->table('piececategory')->get();
        $count=0;
        $bad = 0;
		foreach ($old_pieces_categories as $piece_category) {
            $p = Piece::find($piece_category->pceID);
            if ($p){
                $count++;
    			DB::connection('sqlite')->table('category_piece')->insert([
	    			'piece_id'=> $piece_category->pceID,				
		    		'category_id'=> $piece_category->catID,					
                ]);
            } else {
                $bad++;
            }
		}
        echo 'pieces-categories complete - ';
        echo $count . ' category-piece converted ';
        echo $bad . ' category-piece bad';
    }
}
