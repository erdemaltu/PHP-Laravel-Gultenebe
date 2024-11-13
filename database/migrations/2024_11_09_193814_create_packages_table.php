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
            $table->string('name_tr');                       
            $table->string('name_en')->nullable();           
            $table->string('slug')->unique();               
            $table->text('description_tr')->nullable();      
            $table->text('description_en')->nullable();      
            $table->decimal('price', 8, 2);                 
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
        Schema::dropIfExists('packages');
    }
};
