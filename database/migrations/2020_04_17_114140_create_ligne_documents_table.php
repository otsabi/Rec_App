<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLigneDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligne_documents', function (Blueprint $table) {
            $table->bigIncrements('ligneDocument_id');
            $table->foreign('document_id')->references('document_id')->on('documents')->onDelete('set null');
            $table->foreign('docDetails_id')->references('docDetails_id')->on('doc_details')->onDelete('set null');
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
        Schema::dropIfExists('ligne_documents');
    }
}
