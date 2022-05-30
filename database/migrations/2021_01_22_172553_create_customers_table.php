<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('name');
            $table->string('address');
            $table->string('email')->unique();
            $table->integer('municipality_id');
            $table->integer('postalcode_id');
            $table->integer('region_id');
            $table->timestamps();
            $table->foreign('municipality_id')->references('municipalityid')->on('municipalities');
            $table->foreign('postalcode_id')->references('postalcode')->on('postalcodes');
            $table->foreign('region_id')->references('regionid')->on('regions');
            $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
