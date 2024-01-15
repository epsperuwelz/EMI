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
        Schema::create('tickets', function (Blueprint $table) {

            $table->id();
            $table->string('code',60);
            $table->decimal('cost', 8,2)->nullable();
            $table->string('description',144)->nullable();
            $table->integer('urgency')->nullable();
            $table->boolean('enabled')->default(true);
            $table->timestamps();

            $table->unsignedBigInteger('material_id');
            $table->foreign('material_id')->references('id')->on('materials');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
