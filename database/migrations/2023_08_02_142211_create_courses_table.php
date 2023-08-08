<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade");
            $table->string('title', 100)->unique();
            $table->text('description');
            $table->string('course_code', 100)->unique();
            $table->string('thumbnail', 255)->nullable();
            $table->decimal('regular_price', 10, 2);
            $table->decimal('offer_price', 10, 2)->nullable();
            $table->string('highlights', 255)->nullable();
            $table->string('slug', 255)->unique();
            $table->tinyInteger('status')->default(0);
            $table->boolean('featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('courses');
    }
};
