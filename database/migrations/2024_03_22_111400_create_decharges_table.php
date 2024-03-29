<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDechargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decharges', function (Blueprint $table) {
            $table->id();
            $table->string("maree");
            $table->string("bateau");
            $table->date("dateS");
            $table->date("dateE");
            $table->string("categoryname");
            $table->string("fishname");
            $table->decimal("fishquantity");
            $table->decimal("fishpoids");
            $table->decimal("totalcatpoids");
            $table->decimal("totalcatquantity");
            $table->decimal("totalquantitygen");
            $table->decimal("totalpoidsgen");
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
        Schema::dropIfExists('decharges');
    }
}
