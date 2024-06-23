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
        Schema::create('activities', function (Blueprint $table) {
            $table->bigIncrements('activity_id');
            $table->string('activity_name');
            $table->string('activity_description');
            $table->float('recomend_temp');
            $table->float('recomend_humidity');
            $table->float('recomend_wind_speed');
            $table->float('recomend_precipitation');
            $table->float('recomend_atmo_pressure');
           // $table->foreignId('id_desease')->constrained('diseases','id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
