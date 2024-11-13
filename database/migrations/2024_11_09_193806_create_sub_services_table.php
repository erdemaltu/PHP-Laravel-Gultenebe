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
        Schema::create('sub_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained()->onDelete('cascade'); 
            $table->string('name_tr');                      
            $table->string('name_en')->nullable();          
            $table->string('slug')->unique();             
            $table->text('definition_tr')->nullable();      
            $table->text('definition_en')->nullable();      
            $table->longText('description_tr')->nullable(); 
            $table->longText('description_en')->nullable(); 
            $table->string('image', 100)->nullable();     
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
        Schema::dropIfExists('sub_services');
    }
};
