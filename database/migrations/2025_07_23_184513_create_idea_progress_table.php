<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('idea_progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idea_id')->constrained()->onDelete('cascade');
            $table->string('milestone');
            $table->text('description');
            $table->json('attachments')->nullable();
            $table->date('target_date')->nullable();
            $table->date('completed_date')->nullable();
            $table->enum('status', ['pending', 'in_progress', 'completed'])->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('idea_progress');
    }
};
