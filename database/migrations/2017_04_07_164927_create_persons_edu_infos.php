<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsEduInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons_edu_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id');
            $table->string('type');
            $table->string('speciality');
            $table->string('university');
            $table->date('graduation_year');
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
        Schema::drop('persons_edu_infos');
    }
}
