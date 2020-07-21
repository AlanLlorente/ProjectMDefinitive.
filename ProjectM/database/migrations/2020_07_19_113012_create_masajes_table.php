<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masajes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('tipo');
            $table->dateTime('fecha_cita');
            $table->dateTime('calculated_end')->nullable();
            $table->string('observaciones')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masajes');
    }
}
