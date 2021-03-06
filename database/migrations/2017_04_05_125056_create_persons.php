<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {

            $table->increments('id');

            $table->string('first_name');
            $table->string('second_name');
            $table->string('third_name');
            $table->string('last_name');
            $table->string('full_name');

            $table->date('birth_date');

            $table->integer('national_id')->default(0);

            $table->string('gender_cd');
            $table->string('social_status_cd');

            $table->string('region_cd')->nullable();
            $table->string('section_cd')->nullable();
            $table->string('mosque_cd')->nullable();
            $table->string('full_address')->nullable();

            $table->string('blood_type')->nullable();

            $table->string('current_degree');

            $table->string('original_town')->nullable();

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
        Schema::drop('persons');
    }
}
