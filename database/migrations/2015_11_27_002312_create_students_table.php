<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            // Foreign key from schools table
            $table->integer('school_id')->unsigned();
            // Add foreign key constraint
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');

            $table->string('firstname');
            $table->string('lastname');

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
        Schema::drop('students');
    }
}
