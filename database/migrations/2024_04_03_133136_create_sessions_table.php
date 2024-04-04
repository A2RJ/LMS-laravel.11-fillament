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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_room_id')
                ->references('id')
                ->on('class_rooms')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
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
            $table->string('title');
            $table->text('content');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->softDeletesTz('deleted_at', precision: 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
