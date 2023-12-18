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
            $table->increments('id');
            $table->string('student_id', 50)->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('guardian_id')->unsigned()->nullable();
            $table->string('relation', 50)->nullable();
            $table->string('first_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->date('dob')->nullable();
            $table->string('gender', 10)->comment('Male, Female')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('father_name', 100)->nullable();
            $table->string('mother_name', 100)->nullable();
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('photo', 255)->nullable();
            $table->timestamps();
            $table->string('created_by', 100)->nullable();
            $table->string('updated_by', 100)->nullable();
            $table->tinyInteger('status')->default(1)->comment('Active=1, Inactive=0');
            $table->softDeletes();  
            $table->string('deleted_by', 100)->nullable();   
            
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
