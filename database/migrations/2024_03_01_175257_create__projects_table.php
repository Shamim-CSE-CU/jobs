<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Projects', function (Blueprint $table) {
            $table->id();          
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('category_id');
            $table->string('title');
            $table->text('description');
            $table->string('Location')->nullable();

            // Add payment column
            $table->integer('payment')->nullable();
            $table->timestamps();
            $table->integer('status')->nullable();  
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('Projects');
    }
};
