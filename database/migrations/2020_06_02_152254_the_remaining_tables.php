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
            $table->engine = 'InnoDB';
            $table->timestamps();
            $table->boolean('Reponse')->default(false);
            $table->string('TypeStage');
            $table->unsignedBigInteger('stagiaire_id');
            $table->unsignedBigInteger('recruteur_id');
            $table->string('code_secteur');
            $table->primary(['recruteur_id', 'stagiaire_id']);
        });
        
     
        Schema::create('secteurs', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('code');
            $table->string('Libelle');
            $table->primary('code');
        });

        
        Schema::create('annonces', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('N#');
            $table->binary('image')->nullable();
            $table->text('Info');
            $table->timestamps();
            $table->unsignedBigInteger('recruteur_id');
        });

        
        Schema::create('dossiers', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->binary('CIN');
            $table->binary('CV');
            $table->binary('photo')->nullable();
            $table->binary('Certificat de residence')->nullable();
            $table->binary('Lettre de demande de stage')->nullable();
            $table->binary('Lettre de recommandation')->nullable();
            $table->unsignedBigInteger('stagiaire_id');
        });
     

        Schema::create('activiter', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('recruteur_id');
            $table->string('code_secteur');
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
