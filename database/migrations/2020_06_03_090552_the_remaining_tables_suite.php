<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TheRemainingTablesSuite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::table('demandes', function($table) {
           // $table->foreign('stagiaire_id')->references('id')->on('stagiaires');
            //$table->foreign('recruteur_id')->references('id')->on('recruteurs');
            $table->foreign('code_secteur')->references('code')->on('secteurs');
            $table->foreign('recruteur_id')->references('id')->on('recruteurs');
            $table->foreign('stagiaire_id')->references('id')->on('stagiaires');

            
        });


        Schema::table('annonces', function($table) {
            $table->foreign('recruteur_id')->references('id')->on('recruteurs');
        });

           
       Schema::table('dossiers', function($table) {
            $table->foreign('stagiaire_id')->references('id')->on('stagiaires');
        });

         Schema::table('activiter', function($table) {
            $table->foreign('recruteur_id')->references('id')->on('recruteurs');
            $table->foreign('code_secteur')->references('code')->on('secteurs');
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
