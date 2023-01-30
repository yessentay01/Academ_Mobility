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
        Schema::create('applies', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('full_name');
            $table->string('full_name2');
            $table->string('phone');
            $table->string('iin');
            $table->string('birth');
            $table->string('passport_id');
            $table->string('issue');
            $table->string('expiration_date');
            $table->string('passport_scan');
            $table->string('course');
            $table->string('speciality');
            $table->string('group');
            $table->string('student_id');
            $table->string('gpa');
            $table->string('level');
            $table->string('university');
            $table->string('transcript');
            $table->string('motivation');
            $table->string('confirmation');
            $table->string('letter');
            $table->string('responsible_person')->nullable();;
            $table->string('responsible_contact')->nullable();;
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
        Schema::dropIfExists('applies');
    }
};
