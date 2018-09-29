<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('slug', 120);
            $table->date('dibuat'); // update dari datetimez jadi date
            $table->date('ditutup'); // (yyyy-mm-dd)
            $table->text('deskripsi');
            $table->integer('jumlah_uang');
            $table->integer('slot');
            // $table->integer('uang_per_slot');
            $table->string('featured_image');

            $table->integer('user_id')->unsigned();
            // $table->softDeletes();
            $table->timestamps();

            //foreign key
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
        Schema::dropIfExists('projects');
    }
}
