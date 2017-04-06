<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_info_tb', function (Blueprint $table) {
            $table->integer('id_nu')->primary;
            $table->string('f_name');
            $table->string('s_name');
            $table->string('t_name');
            $table->string('l_name');
            $table->date('date_of_birth');
            $table->integer('gender_cd');
            $table->integer('social_status_cd');
            $table->integer('region_cd');
            $table->integer('local_cd');
            $table->integer('section_cd');
            $table->integer('mosque_cd');
            $table->string('full_address');
            $table->string('blood_type');
            $table->string('original_town');
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
        Schema::dropIfExists('personal_info_tb');
    }
}
