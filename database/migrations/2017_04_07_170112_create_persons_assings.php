<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsAssings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons_assings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id');
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('description');
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
        Schema::drop('persons_assings');
    }
}
