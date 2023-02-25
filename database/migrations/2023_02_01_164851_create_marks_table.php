<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->string('subject_id');
            $table->string('class_id');
            $table->string('student_id');
            $table->string('marks');
            $table->string('subject')->nullable();
            $table->string('studentName')->nullable();
            $table->string('terminal_id')->nullable();
            $table->string('terminalTypes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marks');
    }
};
