<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('specializations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("instructor_id")->unsigned();
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete("cascade");
            $table->bigInteger("topic_id")->unsigned();
            $table->foreign('topic_id')->references('id')->on('topics');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('specializations');
    }
};
