<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvemploisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvemplois', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nom');
            $table->string('mail');
            $table->string('Numéro');
            $table->string('offre');
            $table->text('message');
              $table->string('fichier')->nubllde();
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
        Schema::dropIfExists('cvemplois');
    }
}
