<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TheRemainingTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('demandes', function(Blueprint $table) {
            $table->timestamps();
            $table->boolean('Reponse')->default(false);
            $table->string('TypeStage');
            $table->unsignedBigInteger('stagiaire_id');
            $table->foreign('stagiaire_id')->references('id')->on('stagiaires');
            $table->unsignedBigInteger('recruteur_id');
            $table->foreign('recruteur_id')->references('id')->on('recruteurs');
            $table->string('code_secteur');
            $table->foreign('code_secteur')->references('code')->on('secteurs');
            $table->primary(['recruteur_id', 'stagiaire_id']);
        });

        Schema::create('annonces', function(Blueprint $table) {
            $table->increments('N#');
            $table->binary('image')->nullable();
            $table->text('Info');
            $table->timestamps();
            $table->unsignedBigInteger('recruteur_id');
            $table->foreign('recruteur_id')->references('id')->on('recruteurs');
        });

        Schema::create('secteurs', function(Blueprint $table) {
            $table->string('code');
            $table->string('Libelle');
            $table->primary('code');
        });

        Schema::create('dossiers', function(Blueprint $table) {
            $table->increments('id');
            $table->binary('CIN');
            $table->binary('CV');
            $table->binary('photo')->nullable();
            $table->binary('Certificat de residence')->nullable();
            $table->binary('Lettre de demande de stage')->nullable();
            $table->binary('Lettre de recommandation')->nullable();
            $table->unsignedBigInteger('stagiaire_id');
            $table->foreign('stagiaire_id')->references('id')->on('stagiaires');
        });

        Schema::create('activiter', function(Blueprint $table) {
            $table->unsignedBigInteger('recruteur_id');
            $table->foreign('recruteur_id')->references('id')->on('recruteurs');
            $table->string('code_secteur');
            $table->foreign('code_secteur')->references('code')->on('secteurs');
            $table->primary(['recruteur_id', 'code_secteur']);	
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
        Schema::dropIfExists('demandes');
        Schema::dropIfExists('annonces');
        Schema::dropIfExists('secteurs');
        Schema::dropIfExists('dossiers');
        Schema::dropIfExists('activiter');
    }
}
