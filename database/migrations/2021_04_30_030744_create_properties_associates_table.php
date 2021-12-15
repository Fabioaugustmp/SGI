<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesAssociatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties_associates', function (Blueprint $table) {
            $table->id();
            /*$table->foreignId('associate_id')->constrained();
            $table->foreignId('propertie_id')->constrained();
            $table->string('partial_value');*/            
            $table->unsignedBigInteger('properties');
            $table->unsignedBigInteger('associates');
            $table->bigInteger('partial_value');
            $table->boolean('manager');

            $table->foreign('properties')->references('id')->on('properties');
            $table->foreign('associates')->references('id')->on('associates');
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
        Schema::dropIfExists('properties_associates');
    }
}
