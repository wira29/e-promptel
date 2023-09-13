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
        Schema::create('poll_answers', function (Blueprint $table) {
            $table->id();
            $table->integer('answer');
            $table->date('date');
            $table->foreignId('question_id')->constrained();
            $table->foreignId('respondent_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poll_answers');
    }
};
