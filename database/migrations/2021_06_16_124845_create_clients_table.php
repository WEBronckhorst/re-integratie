<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('inschijfDatum');
            $table->string('voorNaam');
            $table->string('tussenNaam');
            $table->string('voorLeters');
            $table->string('achterNaam');
            $table->string('geslacht');
            $table->string('dob');
            $table->string('adres');
            $table->string('poetcode');
            $table->string('plats');
            $table->string('telefoon');
            $table->string('mail');


            $table->string('ouders_tussenNaam');
            $table->string('ouders_voorLeters');
            $table->string('ouders_achterNaam');
            $table->string('ouders_geslacht');
            $table->string('ouders_adres');
            $table->string('ouders_poetcode');
            $table->string('ouders_plats');
            $table->string('ouders_telefoon');
            $table->string('ouders_mail');
            $table->text('bijzonderheden');
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
        Schema::dropIfExists('clients');
    }
}
