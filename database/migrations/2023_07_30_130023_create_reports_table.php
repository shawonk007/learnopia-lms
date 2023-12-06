<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade");
            $table->bigInteger("instructor_id")->unsigned()->nullable();
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete("cascade");
            $table->bigInteger("course_id")->unsigned()->nullable();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete("cascade");
            $table->string('report_text');
            $table->tinyInteger('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('reports');
    }
};
