<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etre_amis', function (Blueprint $table) {
            $table->unsignedBigInteger('membres_id');
            $table->foreign('membres_id')->references('id')->on('membres');
            $table->unsignedBigInteger('amis_id');
            $table->foreign('amis_id')->references('id')->on('membres');    
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
        Schema::dropIfExists('etre_amis');
    }
};
