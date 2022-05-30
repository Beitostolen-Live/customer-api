<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('emaillistid')->notNullable();
            $table->string('subject')->notNullable();
            $table->longText('body')->notNullable();
            $table->timestamps()->useCurrent();
            $table->foreign('emaillistid')->references('id')->on('email_list');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('email');
    }
}
