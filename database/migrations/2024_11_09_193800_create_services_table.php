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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();             
            $table->text('definition')->nullable();
            $table->longText('description')->nullable();      
            $table->string('seo_title')->nullable();      
            $table->text('seo_description')->nullable();  
            $table->string('seo_keywords')->nullable();  
            $table->boolean('active')->default(false);
            $table->integer('order')->default(0); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};