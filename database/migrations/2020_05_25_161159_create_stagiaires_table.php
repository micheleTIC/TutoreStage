<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagiairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Prenom', 100);
            $table->string('Nom', 100);
            $table->date('Date_de_naissance');
            $table->char('sexe',1);
            $table->string('email', 100);
            $table->string('Niveau_d_etude', 100);
            $table->string('Nom_d_utilisateur', 100);
            $table->string('Mot_de_passe', 100);
             //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stagiaires');
    }
}
