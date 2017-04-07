<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsContactInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons_contact_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id');
            $table->string('type');
            $table->string('value');
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
        Schema::drop('persons_contact_infos');
    }
}
