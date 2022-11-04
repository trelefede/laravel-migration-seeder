<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 50);
            $table->string('stazione_partenza', 50);
            $table->string('stazione_arrivo', 50);
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->string('codice_treno', 20)->unique();
            $table->tinyInteger('numero_carrozze')->unsigned();
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
            $table->timestamps();
        });
    }

    // Azienda
    // Stazione di partenza
    // Stazione di arrivo
    // Orario di partenza
    // Orario di arrivo
    // Codice Treno
    // Numero Carrozze
    // In orario
    // Cancellato

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
