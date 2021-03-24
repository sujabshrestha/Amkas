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
            $table->date('date_of_dep')->nullable();
            $table->date('date_of_arr')->nullable();
            $table->date('date_of_reg')->nullable();
            $table->string('name')->nullable();
            $table->date('dob')->nullable();
            $table->string('passportno')->nullable();
            $table->text('originaladdress')->nullable();
            $table->unsignedBigInteger('contact_no')->nullable();
            $table->text('Education')->nullable();
            $table->text('foreignemployment')->nullable();
            $table->string('transitcountry')->nullable();
            $table->string('durationofstay')->nullable();
            $table->integer('age')->nullable();
            $table->text('document')->nullable();
            $table->text('parentialname')->nullable();
            $table->string('natureofjobs')->nullable();
            $table->enum('maritialstatus',['married','single'])->default('single');
            $table->unsignedInteger('no_of_children')->nullable();
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
