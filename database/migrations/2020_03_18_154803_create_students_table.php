<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('dob');
            $table->string('gender');
            $table->string('details');
            $table->string('admnumber');
            $table->string('stype');
            $table->string('father');
            $table->string('fphone');
            $table->string('mother');
            $table->string('mphone');
            $table->string('occupation');
            $table->string('address');
            $table->string('admDate');
            $table->string('classAdm');
            $table->string('photo')->default('profile.png');
            $table->string('userid');
            $table->string('status');
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
        Schema::dropIfExists('students');
    }
}