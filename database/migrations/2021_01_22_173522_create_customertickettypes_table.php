<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomertickettypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customertickettypes', function (Blueprint $table) {
            $table->bigInteger('customer_id');
            $table->unsignedBigInteger('tickettype_id');
            $table->integer('numberoftickets');
            $table->double('priceprticket', 8, 2);
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('tickettype_id')->references('id')->on('tickettypes');
            $table->primary(['customer_id','tickettype_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customertickettypes');
    }
}
