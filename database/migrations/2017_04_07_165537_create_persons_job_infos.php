<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsJobInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons_job_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id');
            $table->string('type');
            $table->string('description');
            $table->string('name');
            $table->string('place');
            $table->integer('real_salary');
            $table->integer('paid_salary');
            $table->integer('wife_work');
            $table->integer('wife_salaray');
            $table->integer('other_take');
            $table->integer('other_salary');
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
        Schema::drop('persons_job_infos');
    }
}
