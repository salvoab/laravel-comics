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
            $table->string('cover');
            $table->text('description');
            $table->unsignedSmallInteger('volume');
            $table->float('price', 4, 2)->nullable();
            $table->string('trim_size')->nullable();
            $table->date('sale_date')->nullable();
            $table->unsignedTinyInteger('page_count')->nullable();
            $table->string('rated', 20);
            $table->unsignedTinyInteger('available');
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
