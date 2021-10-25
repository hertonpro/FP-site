<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfogeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infogenerals', function (Blueprint $table) {
            $table->id();
            $table->string('mail')->nullable()->default('info@fondationpanzirdc.org');
            $table->string('phone')->nullable()->default('811443123');
            $table->string('adresse')->nullable()->default('Bukavu, RDC, Q. Panzi, N0: 625');
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
        Schema::dropIfExists('infogenerals');
    }
}
