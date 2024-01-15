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
          Schema::create('suppliers', function (Blueprint $table) {
              $table->id();
              $table->string('name',30); 
              $table->string('description',144)->nullable(); 
              $table->string('contact_name',30)->nullable();
              $table->string('phone_number',15)->nullable(); 
              $table->string('email',30)->nullable(); 
              $table->string('url',100)->nullable();
              $table->boolean('enabled')->default(true);
              $table->timestamps();
          });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
