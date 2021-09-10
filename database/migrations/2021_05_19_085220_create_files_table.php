<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->text('type');
            $table->text('url');
            $table->timestamps();
        });
        Schema::create('files_for', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('file_id')->unsigned()->index('files');
            $table->integer('for_id')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
