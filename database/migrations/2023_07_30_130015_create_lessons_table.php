<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("course_id")->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete("cascade");
            $table->string('title', 100);
            $table->text('description');
            $table->text('highlights')->nullable();
            $table->string('duration', 50);
            $table->string('thumbnail', 255)->nullable();
            $table->string('slug', 255)->unique();
            $table->tinyInteger('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('lessons');
    }
};
