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
        Schema::create('travels', function (Blueprint $table) {
            $table -> id();

            $table -> string('codice', 10) -> unique();

            $table -> string('destinazione', 64);

            $table -> date('data_di_partenza');
            $table -> time('orario_di_partenza');

            $table -> date('data_di_arrivo');
            $table -> time('orario_di_arrivo');

            $table -> string('mezzo_di_trasporto', 32);

            $table -> integer('prezzo') -> unsigned();

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
        Schema::dropIfExists('travels');
    }
};
