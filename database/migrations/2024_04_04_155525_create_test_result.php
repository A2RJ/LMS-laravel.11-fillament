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
        Schema::create('test_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('session_id')
                ->references('id')
                ->on('sessions')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('question_id')
                ->references('id')
                ->on('questions')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('answer_id')
                ->references('id')
                ->on('answers')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->text('answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_results');
    }
};
