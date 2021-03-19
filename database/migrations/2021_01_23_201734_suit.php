<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Suit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suit', function (Blueprint $table) {
            $table->bigIncrements();
            $table->integer('length')->nullable();
            $table->integer('shoulder')->nullable();
            $table->integer('sleeve')->nullable();
            $table->integer('chest')->nullable();
            $table->integer('waist')->nullable();
            $table->integer('whip')->nullable();
            $table->integer('cross_back')->nullable();
            $table->integer('whip_back')->nullable();
            $table->integer('full_sleeve')->nullable();
            $table->integer('neck')->nullable();
            $table->integer('in_side')->nullable();
            $table->integer('bottom')->nullable();

            $table->integer('price')->nullable();
            $table->integer('advance')->nullable();
            $table->integer('net_balance')->nullable();
            $table->tinyInteger('is_paid');

            $table->integer('suit_type');

            $table->string('detail');
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
        Schema::dropIfExists('suit');
    }
}
