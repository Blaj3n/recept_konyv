<?php

use App\Kategoria;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nev');
        });

        Kategoria::create(['nev' => 'főétel']);
        Kategoria::create(['nev' => 'leves']);
        Kategoria::create(['nev' => 'édesség']);
        Kategoria::create(['nev' => 'saláta']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategorias');
    }
}
