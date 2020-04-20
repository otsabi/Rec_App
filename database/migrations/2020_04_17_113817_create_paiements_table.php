<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->bigIncrements('paiement_id');
            $table->float('montant');
            $table->date('date');
            $table->foreign('docDetails_id')->references('docDetails_id')->on('doc_details')->onDelete('set null');
            $table->foreign('typePaiement_id')->references('typePaiement_id')->on('type_paiements')->onDelete('set null');
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
        Schema::dropIfExists('paiements');
    }
}
