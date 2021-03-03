<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('series');
            $table->string('description');
            $table->string('author');
            $table->string('artist');
            $table->unsignedSmallInteger('volume');
            $table->float('price', 4, 2);
            $table->string('trim_size');
            $table->date('sale_date');
            $table->unsignedTinyInteger('page_count');
            $table->string('rated', 20);
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
        Schema::dropIfExists('comics');
    }
}
