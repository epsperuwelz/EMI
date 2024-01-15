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
        Schema::create('participants', function (Blueprint $table) {
            
            $table->id();
            $table->integer('external_id');
            $table->foreign('external_id')->references('id')->on('externals');           
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('fonction_id');
            $table->foreign('fonction_id')->references('id')->on('fonctions');
            $table->integer('ticket_id');
            $table->foreign('ticket_id')->references('id')->on('tickets');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
