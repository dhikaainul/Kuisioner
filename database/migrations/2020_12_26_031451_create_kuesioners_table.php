<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuesionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuesioners', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->char('jawaban Quesioner 1')->nullable();
            $table->char('jawaban Quesioner 2')->nullable();
            $table->char('jawaban Quesioner 3')->nullable();
            $table->char('jawaban Quesioner 4')->nullable();
            $table->char('jawaban Quesioner 5')->nullable();
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
        Schema::dropIfExists('kuesioners');
    }
}
