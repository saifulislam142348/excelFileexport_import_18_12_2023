<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSciencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sciences', function (Blueprint $table) {
            $table->id();
            $table->string('student_id');
            $table->string('user_id');
            $table->string('guardian_id');
            $table->string('relation');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('dob');
            $table->string('gender');
            $table->string('phone');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('photo');
            $table->string('created_by');
            $table->string('updated_by');
            $table->string('status');
            $table->string('deleted_at');
            $table->string('deleted_by');
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
        Schema::dropIfExists('sciences');
    }
}
