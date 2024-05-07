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
        Schema::create('prets', function (Blueprint $table) {
            $table->integer('coteOuvrage');
            $table->integer('numeroCarteEmprunteur');
            $table->date('datePret');
        
            $table->primary(['coteOuvrage', 'numeroCarteEmprunteur']);
            $table->foreign('numeroCarteEmprunteur')->references('numeroCarte')->on('emprunteurs');
            $table->foreign('coteOuvrage')->references('cote')->on('ouvrages');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prets');
    }
};
