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
        Schema::create('Persona_Access_ONG', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ong_id');
            $table->foreign('ong_id')->references('ID')->on('Ong');
            $table->rememberToken('Token_Able');
            $table->string('Name');
            $table->rememberToken('Token');
            $table->string('Abilities');
            $table->timestamp('Last_Used_At');
            $table->timestamp('Expires_At');
            $table->timestamps('Created_At');
            $table->timestamps('Updated_At');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Personal_Access_ONG');
    }
};
