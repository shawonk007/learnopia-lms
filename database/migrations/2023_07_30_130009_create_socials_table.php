<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("instructor_id")->unsigned();
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete("cascade");
            $table->string('facebook', 100)->nullable();
            $table->string('twitter', 100)->nullable();
            $table->string('linkedin', 100)->nullable();
            $table->string('youtube', 100)->nullable();
            $table->string('instagram', 100)->nullable();
            $table->string('github', 100)->nullable();
            $table->string('behance', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('socials');
    }
};
