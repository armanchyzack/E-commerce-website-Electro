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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Categories_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('sub_categories_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('brand_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('product_title')->require;
            $table->string('product_slug')->unique()->nullable();
            $table->float('price')->require;
            $table->float('disc_price')->nullable();
            $table->string('disc_price_date_start')->nullable();
            $table->string('disc_price_date_end')->nullable();
            $table->boolean('status');
            $table->float('quantity')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->require;
            $table->string('thumbnail_image')->require;
            $table->string('thumbnail_image_url')->require;
            $table->string('details')->require;
            $table->string('desc')->require;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
