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
        Schema::create('subcategories', function (Blueprint $table) {
             $table->increments('id');
            $table->string('name');
            $table->string('slug')->index();
            $table->integer('category_id')->index();
            $table->text('image')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_decription')->nullable();
    
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcategories');
    }
};
