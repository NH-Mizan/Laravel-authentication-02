<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hotline')->length('50')->nullable();
            $table->string('hotmail')->length('50')->nullable();
            $table->string('phone')->length('50');
            $table->string('email')->length('50');
            $table->string('address');
            $table->string('maplink')->nullable();
            $table->tinyInteger('status');
            $table->timestamps();
            ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
