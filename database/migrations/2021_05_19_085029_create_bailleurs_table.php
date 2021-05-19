<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBailleursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bailleurs', function (Blueprint $table) {
            $table->id();
            $table->text('denomination');
            $table->text('url');
            $table->text('logo');
            $table->timestamps();
        });
        Schema::create('bailleur_projet', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bailleur_id')->unsigned()->index('bailleurs');
            $table->integer('projet_id')->unsigned()->index('projets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bailleurs');
    }
}
