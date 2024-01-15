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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name',30); 
            $table->string('icon',255)->nullable(); 
            $table->boolean('enabled')->default(true);
            $table->timestamps();
            //Pour l'auto-jointure:
            $table->integer('topcategory_id')->unsigned()->nullable();
            $table->foreign('topcategory_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
