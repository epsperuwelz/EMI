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
        Schema::create('softwares', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->string('description',144)->nullable();
            $table->string('maker_url',30)->nullable();
            $table->string('icon',50)->nullable();
            $table->boolean('enabled')->default(true);
            $table->timestamps();

            $table->integer('type_id');
            $table->foreign('type_id')->references('id')->on('types');

            $table->integer('version_id');
            $table->foreign('version_id')->references('id')->on('versions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('softwares');
    }
};
