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
        Schema::create('test_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_room_id')
                ->references('id')
                ->on('class_rooms')
                ->cascadeOnUpdate()
                ->noActionOnDelete();
            $table->foreignId('session_id')
                ->references('id')
                ->on('sessions')
                ->cascadeOnUpdate()
                ->noActionOnDelete();
            $table->foreignId('pre_test_id')
                ->nullable()
                ->references('id')
                ->on('tests')
                ->nullOnDelete();
            $table->foreignId('post_test_id')
                ->nullable()
                ->references('id')
                ->on('tests')
                ->nullOnDelete();
            $table->foreignId('question_id')
                ->references('id')
                ->on('questions')
                ->cascadeOnUpdate()
                ->noActionOnDelete();
            $table->foreignId('answer_id')
                ->nullable()
                ->references('id')
                ->on('answers')
                ->cascadeOnUpdate()
                ->noActionOnDelete();
            $table->foreignId('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnUpdate()
                ->noActionOnDelete();
            $table->text('answer');
            $table->string('score')->nullable();
            $table->string('notes')->nullable();
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
