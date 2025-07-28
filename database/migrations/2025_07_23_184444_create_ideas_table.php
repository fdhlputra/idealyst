<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('category');
            $table->enum('stage', ['idea', 'mvp', 'prototype', 'traction', 'launched'])->default('idea');
            $table->json('team_members')->nullable();
            $table->string('thumbnail')->nullable();
            $table->json('attachments')->nullable();
            $table->enum('status', ['draft', 'published', 'rejected'])->default('draft');
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ideas');
    }
};
