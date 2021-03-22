<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmkasFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amkas_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sheltercase_no');
            $table->date('date_of_dep');
            $table->date('date_of_arr');
            $table->date('date_of_reg');
            $table->string('name');
            $table->date('dob');
            $table->string('passportno');
            $table->text('originaladdress');
            $table->unsignedBigInteger('contact_no');
            $table->text('Education');
            $table->text('foreignemployment');
            $table->string('transitcountry');
            $table->string('durationofstay');
            $table->integer('age');
            $table->text('document');
            $table->text('parentialname');
            $table->enum('maritialstatus',['married','single'])->default('single');
            $table->unsignedBigInteger('no_of_children');
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
        Schema::dropIfExists('amkas_forms');
    }
}
