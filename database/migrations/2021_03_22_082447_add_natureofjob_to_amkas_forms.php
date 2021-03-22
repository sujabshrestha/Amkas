<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNatureofjobToAmkasForms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('amkas_forms', function (Blueprint $table) {
            $table->string('natureofjobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('amkas_forms', function (Blueprint $table) {
            $table->dropColumn('natureofjobs');
        });
    }
}
