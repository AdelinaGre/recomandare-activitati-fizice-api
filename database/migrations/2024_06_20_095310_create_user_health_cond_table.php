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
        Schema::create('user_health_cond', function (Blueprint $table) {
            $table->bigIncrements('id_user_health_cond');
           // $table->unsignedInteger('user_id');
            //$table->unsignedInteger('condition_disease_id');
            $table->foreignId('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            $table->foreignId('condition_disease_id')
                    ->references('id_disease')->on('disease')
                    ->onDelete('cascade');
            $table->timestamps();
        });

        // Schema::table('user_health_cond', function (Blueprint $table) {
        //     $table->dropColumn('id_user_health_cond');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_health_cond');
    }
};
