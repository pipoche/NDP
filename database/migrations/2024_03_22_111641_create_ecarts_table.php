<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecarts', function (Blueprint $table) {
            $table->id();
            $table->string("maree");
            $table->string("bateau");
            $table->date("dateE");
            $table->date("dateS");
            $table->string("fishname");
            $table->string("categoryname");
            $table->decimal("ndpfishquantity");
            $table->decimal("ndpcatquantitytotal");
            $table->decimal("ndptotalgen");
            $table->decimal("dechQte");
            $table->decimal("dechpoids");
            $table->decimal("dechcatQtetotal");
            $table->decimal("dechcatpoidstotal");
            $table->decimal("dechqtetotalgen");
            $table->decimal("dechpoidstotalgen");
            $table->decimal("ecartvalue");
            $table->decimal("ecartcattotal");
            $table->decimal("ecarttotalgen");
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
        Schema::dropIfExists('ecarts');
    }
}
