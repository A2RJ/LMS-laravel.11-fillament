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
        Schema::create('session_attachements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_session_id')
                ->references('id')
                ->on('class_sessions')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('attachment');
            $table->text('url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_attachements');
    }
};
