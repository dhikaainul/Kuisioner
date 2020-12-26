<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuisinersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuisiners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nim');
            $table->string('nama');
            $table->string('kelas');
            $table->string('no_abs');
            $table->char('soal1')->nullable();
            $table->char('soal2')->nullable();
            $table->char('soal3')->nullable();
            $table->char('soal4')->nullable();
            $table->char('soal5')->nullable();
            $table->char('soal6')->nullable();
            $table->char('soal7')->nullable();
            $table->char('soal8')->nullable();
            $table->text('komentar');
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
        Schema::dropIfExists('kuisiners');
    }
}
