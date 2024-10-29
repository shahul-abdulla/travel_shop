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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->string('slug');
            $table->string('detail_heading')->nullable();
            $table->string('location')->nullable();
            $table->string('price')->nullable();
            $table->string('date')->nullable();
            $table->string('pickup')->nullable();
            $table->string('reviews')->nullable();
            $table->string('date_time')->nullable();
            $table->string('offer')->nullable();
            $table->integer('status')->defualt(1);
            $table->string('image')->nullable();
            $table->json('tour_includes')->nullable();
            $table->text('location_map')->nullable();
             $table->json('price_exclude')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
