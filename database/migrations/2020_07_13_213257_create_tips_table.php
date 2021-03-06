<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tips', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('user_id')->nullable()->unsigned();

            $table->date('date');
            $table->string('day');
           
            $table->decimal('amount', 8, 2);
            
            $table->timestamps();
            //$table->foreign('user_id')->references('id')->on('users');
        });     
            
    }
       
       
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tips');
    }
}
