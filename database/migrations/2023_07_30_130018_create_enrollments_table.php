<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("student_id")->unsigned();
            $table->foreign('student_id')->references('id')->on('students')->onDelete("cascade");
            $table->bigInteger("course_id")->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete("cascade");
            $table->tinyInteger('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('enrollments');
    }
};
