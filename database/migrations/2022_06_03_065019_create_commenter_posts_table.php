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
        Schema::create('commenter_posts', function (Blueprint $table) {
            $table->unsignedBigInteger('membres_id');
            $table->foreign('membres_id')->references('id')->on('membres');
            $table->unsignedBigInteger('posts_id');
            $table->foreign('posts_id')->references('id')->on('posts');   
            $table->longText('comment')->nullable();
            $table->integer('compteur');
            $table->date('ddc');
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
        Schema::dropIfExists('commenter_posts');
    }
};
