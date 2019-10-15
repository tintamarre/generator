<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Term extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('terms', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->integer('registry_id');
           $table->string('name');
           $table->string('gender')->nullable()->default(null);
           $table->integer('order');
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
       Schema::dropIfExists('terms');

     }
}
