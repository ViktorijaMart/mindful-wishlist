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
        Schema::create('wishlists', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name');
            $table->decimal('price', $precision = 10, $scale = 2)->nullable();
            $table->string('store_name')->nullable();
            $table->string('store_url')->nullable();
            $table->string('category');
            $table->string('tags');
            $table->time('reminder')->nullable();
            $table->text('reflection')->nullable();
            $table->boolean('bought')->default(0);
            $table->boolean('graveyard')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlists');
    }
};
