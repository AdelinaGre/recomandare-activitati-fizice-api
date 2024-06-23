<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('disease_weather_condition', function (Blueprint $table) {
            $table->bigIncrements('id_disease_weather_condition');
            $table->unsignedBigInteger('id_disease');
            $table->unsignedBigInteger('id_weather_condition');
           

            // // Definirea cheilor străine
            // $table->foreign('id_disease')
            //     ->references('id_disease')->on('disease')
            //     ->onDelete('cascade');

            // $table->foreign('id_weather_condition')
            //     ->references('id')->on('weather_conditions')
            //     ->onDelete('cascade');
        });
        
        
      
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_health_conditions');
    }
};
