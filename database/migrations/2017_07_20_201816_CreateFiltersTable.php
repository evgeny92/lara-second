<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiltersTable extends Migration{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up(){
      Schema::create('filters', function(Blueprint $table){
         $table->increments('id');
         $table->timestamps();
         $table->string('alias', 150)->unique();
         $table->string('title');
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down(){
      Schema::dropIfExists('filters');
   }
}
