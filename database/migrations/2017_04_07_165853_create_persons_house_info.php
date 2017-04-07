<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsHouseInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons_house_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id');
            $table->string('ownership');
            $table->string('structure');
            $table->string('furniture');
            $table->integer('rent');
            $table->text('description');
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
        Schema::drop('persons_house_info');
    }
}
