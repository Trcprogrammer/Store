<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('users');
            $table->string('title');
            $table->string('slug');
            $table->string('body');
            $table->string('image_url');
            $table->timestamps();
        });
    }














    
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
