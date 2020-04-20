<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('client_id');
            $table->string('nom');
            $table->string('prénom');
            $table->string('adresse');
            $table->string('téléphone');
            $table->string('fax');
            $table->string('email');
            $table->string('raison_social');
            $table->foreign('ville_id')->references('ville_id')->on('villes')->onDelete('set null');
            $table->foreign('responsable_id')->references('responsable_id')->on('responsables')->onDelete('set null');
            $table->foreign('typeClient_id')->references('typeClient_id')->on('type_clients')->onDelete('set null');
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
        Schema::dropIfExists('clients');
    }
}
