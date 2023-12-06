<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("instructor_id")->unsigned();
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete("cascade");
            $table->string('designation');
            $table->string('organization');
            $table->text('description')->nullable();
            $table->date('join_date');
            $table->date('leave_date')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('experiences');
    }
};
