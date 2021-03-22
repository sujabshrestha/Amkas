<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmkasMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amkas_metas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('amkas_form_id');
            $table->longText('key');
            $table->longText('value');
            $table->foreign('amkas_form_id')->references('id')->on('amkas_forms')->onDelete('cascade');
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
        Schema::dropIfExists('amkas_metas');
    }
}
