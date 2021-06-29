<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('client_id');
            $table->foreignId('locatie');
            $table->foreignId('reisH_id');
            $table->foreignId('reisT_id');
            $table->foreignId('urentype_id');
            $table->dateTime('start', $precision = 0);
            $table->dateTime('eind', $precision = 0);
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
        Schema::dropIfExists('urens');
    }
}
