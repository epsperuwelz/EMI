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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name',30); 
            $table->string('description',144)->nullable(); 
            $table->string('plan',7)->nullable(); 
            $table->string('photo',255)->nullable(); 
            $table->boolean('enabled')->default(true);
            $table->timestamps();
        });
   }
        
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};