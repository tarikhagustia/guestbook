<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        //
        if (!Schema::hasTable('guest')) {
            Schema::create('guest', function (Blueprint $table) {
                $table->increments('id')->index();
                $table->integer('card_id');
                $table->integer('idtype_id')->unsigned();
                $table->integer('purpose_id')->unsigned();
                $table->integer('area_id')->unsigned();

                $table->foreign('idtype_id')->references('id')->on('idtype');
                $table->foreign('purpose_id')->references('id')->on('purpose');
                $table->foreign('area_id')->references('id')->on('area');

                $table->string('nomor_id');
                $table->string('name');
                $table->string('company');

                $table->string('duration');
                $table->string('partner');
                $table->string('excourt');
                $table->string('photo')->nullable();
                $table->datetime('checkout_time')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guest');
    }
}
