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
        Schema::create('operatingsystem_version', function (Blueprint $table) {

            $table->primary(['version_id', 'operatingsystem_id']);
            $table->unsignedBigInteger('operatingsystem_id');
            $table->foreign('operatingsystem_id')->references('id')->on('operatingsystems');
            $table->unsignedBigInteger('version_id');
            $table->foreign('version_id')->references('id')->on('versions');
     
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operatingsystem_version');
    }
};
