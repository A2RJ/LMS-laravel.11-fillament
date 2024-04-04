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
        Schema::create('class_attachements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('session_id')
                ->references('id')
                ->on('sessions')
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
        Schema::dropIfExists('class_attachements');
    }
};
