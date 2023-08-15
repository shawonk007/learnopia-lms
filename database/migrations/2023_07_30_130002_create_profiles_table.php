<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade");
            $table->string('avatar', 255)->nullable();
            $table->text('biography')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->tinyInteger('religion')->nullable();
            $table->tinyInteger('marital')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('profiles');
    }
};
