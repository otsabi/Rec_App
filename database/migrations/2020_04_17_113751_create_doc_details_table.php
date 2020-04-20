<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_details', function (Blueprint $table) {
            $table->bigIncrements('docDetails_id');
            $table->string('num_facture');
            $table->float('débit');
            $table->date('date');
            $table->date('date_échéance');
            $table->date('date_encaissement');
            $tabel->tinyInteger('payé');
            $table->foreign('typeDocDetail_id')->references('typeDocDetail_id')->on('type_doc_details')->onDelete('set null');
            $table->foreign('client_id')->references('client_id')->on('clients')->onDelete('set null');
            $table->foreign('societe_id')->references('societe_id')->on('societes')->onDelete('set null');
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
        Schema::dropIfExists('doc_details');
    }
}
