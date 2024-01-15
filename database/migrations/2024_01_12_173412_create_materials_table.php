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
        Schema::create('materials', function (Blueprint $table) {

            $table->id();
            $table->string('code',20);
            $table->string('name',30);
            $table->string('description',144)->nullable();
            $table->date('purchase_date')->nullable();
            $table->decimal('purchase_price',8,2)->nullable();
            $table->boolean('enabled')->default(true);
            $table->string('image_url',255)->nullable();
            $table->timestamps();
            $table->integer('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('supplier_id');
            $table->foreign('supplier_id')->references('id')->on('suppliers');
            $table->integer('location_id');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->integer('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands');           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
