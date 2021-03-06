<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up(){
      Schema::create('portfolios', function(Blueprint $table){
         $table->increments('id');
         $table->string('alias', 150)->unique();
         $table->string('title');
         $table->text('text');
         $table->string('customer', 150);
         $table->string('images');
         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down(){
      Schema::dropIfExists('portfolios');
   }
}
