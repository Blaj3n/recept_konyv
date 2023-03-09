<?php

use App\Recept;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recepts', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('kat_id')->references('id')->on('kategorias');
            $table->string('nev');
            $table->string('kep_eleresi_ut');
            $table->string('leiras');
            $table->date('datum')->date('Y-m-d');
        });

        Recept::create(['kat_id' => '1','nev' => 'marhapörkölt','kep_eleresi_ut' => 'Recept_konyv\images\img1.jpg', 'leiras'=>'Finom pörkölt, kóstolja meg!','datum'=>'2022-02-22']);
        Recept::create(['kat_id' => '2','nev' => 'halászleves','kep_eleresi_ut' => 'Recept_konyv\images\img2.jpg', 'leiras'=>'Finom halászleves, a legjobb!']);
        Recept::create(['kat_id' => '3','nev' => 'tiramisu','kep_eleresi_ut' => 'Recept_konyv\images\img3.jpg', 'leiras'=>'Finom tiramisu, kóstolja meg!','datum'=>'2020-02-20']);
        Recept::create(['kat_id' => '4','nev' => 'cézár saláta','kep_eleresi_ut' => 'Recept_konyv\images\img4.jpg', 'leiras'=>'Veni vidi vici!']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recepts');
    }
}
