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
        Schema::create('membres_interets', function (Blueprint $table) {
            $table->unsignedBigInteger('membres_id');
            $table->foreign('membres_id')->references('id')->on('membres');
            $table->unsignedBigInteger('ci_id');
            $table->foreign('ci_id')->references('id')->on('centre_interets');    
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
        Schema::dropIfExists('membres_interets');
    }
};
