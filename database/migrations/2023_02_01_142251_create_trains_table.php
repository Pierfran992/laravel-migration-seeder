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
        Schema::create('trains', function (Blueprint $table) {
            $table -> id();

            $table -> string('azienda', 32);
            $table -> string('stazione_di_partenza', 64);
            $table -> string('stazione_di_arrivo', 64);

            $table -> date('data_di_partenza');
            $table -> time('orario_di_partenza');

            $table -> date('data_di_arrivo');
            $table -> time('orario_di_arrivo');

            $table -> smallInteger('codice_treno');
            $table -> smallInteger('numero_carrozze');

            $table -> boolean('in_orario');
            $table -> boolean('cancellato');

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
