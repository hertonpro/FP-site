<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->text('denomination');
            $table->longText('description');
<<<<<<< Updated upstream
            $table->integer('pillier_id')->unsigned();
            $table->integer('bailleur_id')->unsigned();
=======
<<<<<<< Updated upstream
            $table->integer('pillier_id')->unsigned();;
            $table->integer('bailleur');
=======
            $table->integer('pilier_id')->unsigned();
            $table->integer('bailleur_id')->unsigned();
>>>>>>> Stashed changes
>>>>>>> Stashed changes
            $table->text('files');
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
        Schema::dropIfExists('projets');
    }
}
