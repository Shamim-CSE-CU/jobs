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
        Schema::table('Services', function (Blueprint $table) {
            //
            // Add Location column
            $table->string('Location')->nullable();

            // Add payment column
            $table->integer('payment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Services', function (Blueprint $table) {
            //
            
            // Drop Location column
            $table->dropColumn('Location');

            // Drop payment column
            $table->dropColumn('payment');
            
        });
    }
};
