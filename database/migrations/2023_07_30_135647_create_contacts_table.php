<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade");
            $table->string('email_alt')->unique()->nullable();
            $table->string('phone_alt')->unique()->nullable();
            $table->string('address_one')->nullable();
            $table->string('address_two')->nullable();
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('postal_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('contacts');
    }
};
