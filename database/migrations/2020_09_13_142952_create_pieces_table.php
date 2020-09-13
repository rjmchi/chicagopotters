<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pieces', function (Blueprint $table) {
            $table->id();
			$table->string('title');
			$table->string('description');			
			$table->string('dimensions')->nullable();
			$table->string('decoration')->nullable();
            $table->decimal('price',5,2)->default(0.00);
			$table->float('weight')->nullable();                        
            $table->foreignId('artist_id')->onDelete('cascade')->constrained();            
            $table->foreignId('order_id')->nullable()->constrained();            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pieces');
    }
}
