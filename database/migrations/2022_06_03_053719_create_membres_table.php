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
        Schema::create('membres', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nom',255);
            $table->string('prenom',255);
            $table->date('ddn');
            $table->boolean('sexe');
            $table->string('email',255);
            $table->string('avatar',255);
            $table->string('pcouverture',255);
            $table->string('metier',255);
            $table->string('password',255);
            $table->rememberToken();
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
        Schema::dropIfExists('membres');
    }
};
