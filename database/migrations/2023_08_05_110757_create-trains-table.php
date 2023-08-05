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
        Schema::create ('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda',40);
            $table->string('stazione_partenza', 100);
            $table->string('stazione_arrivo', 100);
            $table->date('data_partenza');
            $table->date('data_arrivo');
            $table->timestamps('orario_partenza');
            $table->time('orario_arrivo');
            $table->string('codice_treno', 7);
            $table->integer('n_carrozze');
            $table->boolean('in_orario');
            $table->time('ritardo')->nullable();
            $table->boolean('cancellato');
            $table->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
