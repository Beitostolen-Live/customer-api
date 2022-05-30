<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailRecipientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_recipient', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('emaillistid')->notNullable();
            $table->bigInteger('ticketmasterid')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->notNullable();
            $table->timestamps();
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
        Schema::dropIfExists('email_recipient');
    }
}
