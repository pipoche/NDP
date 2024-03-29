<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exports', function (Blueprint $table) {
            $table->id();
            $table->string("numexport");
            $table->string("numdum");
            $table->string("destination");
            $table->string("pays");
            $table->string("ville");
            $table->string("transport");
            $table->string("devise");
            $table->string("facturecode");
            $table->string("maree");
            $table->decimal("decharge");
            $table->decimal("poids");
            $table->decimal("montant");
            $table->decimal("totalpoids");
            $table->decimal("totalmontant");
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
        Schema::dropIfExists('exports');
    }
}
