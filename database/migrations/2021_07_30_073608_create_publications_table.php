<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editeurs', function (Blueprint $table) {
            $table->id();
            $table->text('Nom');
            $table->integer('user_id')->unsigned()->index('users')->nullable();
            $table->timestamps();
        });

        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->text('titre');
            $table->char('link',100)->unique();
            $table->longText('abstract');
            $table->text('review');
            $table->text('doc')->nullable();
            $table->date('datePub');
            $table->timestamps();
            
        });

        Schema::create('editeur_publication', function (Blueprint $table) {
            $table->id();
            $table->integer('editeur_id')->unsigned()->index('editeurs');
            $table->integer('publication_id')->unsigned()->index('publications');
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
        Schema::dropIfExists('editeurs');
        Schema::dropIfExists('publications');
        Schema::dropIfExists('editeur_publications');
    }
}
