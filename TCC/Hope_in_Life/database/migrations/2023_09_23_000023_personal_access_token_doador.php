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
        Schema::create('Personal_Access_Token_Doador', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doador_id');
            $table->foreign('doador_id')->references('id')->on('Doador');
            $table->rememberToken('Token_Able');
            $table->string('Name');
            $table->rememberToken('Token');
            $table->string('Abilities');
            $table->timestamp('Last_Used_At');
            $table->timestamp('Expires_At');
            $table->timestamp('Created_At');
            $table->timestamp('Updated_At');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Personal_Access_Token_Doador');
    }
};
