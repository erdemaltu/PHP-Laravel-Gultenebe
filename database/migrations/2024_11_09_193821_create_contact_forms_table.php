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
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('email',50)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('subject',100)->nullable();
            $table->string('message')->nullable();
            $table->string('note',100)->nullable();
            $table->string('IP',20)->nullable();
            $table->enum('status', ['Yeni','Okundu'])->default('Yeni');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_forms');
    }
};
