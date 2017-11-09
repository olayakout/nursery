<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('fullname');
            $table->text('address');
            $table->string('phone');
            $table->string('birthday');
            $table->boolean('use_bus');
            $table->text('sleep');
            $table->integer('number_of_wc');
            $table->enum('clean_level', ['fair', 'good','very good','excellent']);
            $table->enum('mood', ['happy','sad']);
            $table->text('food');

            $table->integer('class_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('students', function (Blueprint $table) { 
            $table->foreign('class_id')->references('id')->on('classes');
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
