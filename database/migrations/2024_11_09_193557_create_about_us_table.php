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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();               
            $table->longText('content_tr');                  
            $table->longText('content_en')->nullable();      
            $table->string('seo_title')->nullable();        
            $table->text('seo_description')->nullable();    
            $table->string('seo_keywords')->nullable();     
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
