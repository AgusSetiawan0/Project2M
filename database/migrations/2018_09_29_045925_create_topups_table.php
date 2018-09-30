<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('nominal');
            $table->string('bank');
            $table->string('bukti_image');
            $table->smallInteger('status')->default(0);
            $table->dateTime('approved_at')->nullable();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            //foreign mengambil data di database lain
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
        Schema::dropIfExists('topups');
    }
}
