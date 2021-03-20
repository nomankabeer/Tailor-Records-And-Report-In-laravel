<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tailor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tailor', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("first_name")->nullable();
            $table->string("last_name")->nullable();
            $table->string("phone_no")->nullable();
            $table->string("address")->nullable();
            $table->string("address2")->nullable();
            $table->integer("cnic_no")->unique()->nullable();
            $table->string("cnic_front")->nullable();
            $table->string("cnic_back")->nullable();
            $table->text("picture")->nullable();
            $table->text("about")->nullable();
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
        Schema::dropIfExists('tailor');
    }
}
