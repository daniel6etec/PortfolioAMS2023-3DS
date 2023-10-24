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

        Schema::create('Necessidade', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ong_id');
            $table->foreign('ong_id')->references('id')->on('Ong');
            $table->string('NomeNecessidade')->min(15)->max(30);
            $table->string('Categoria')->min(15)->max(30);
            $table->text('descricao')->min(20)->max(70);
            $table->integer('quantidade');
            $table->integer('meta');
            $table->string('CaminhoFotosNecessidade')->min(10)->max(20);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Necessidade');
    }
};
