<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsInformalCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons_informal_courses', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('person_id');

            $table->string('type');
            $table->string('name');

            $table->date('from_date');
            $table->date('to_date');

            $table->integer('hours_count');

            $table->string('place_name');

            $table->text('notes');

            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('persons_informal_courses');
    }
}
