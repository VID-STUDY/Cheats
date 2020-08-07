<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('file')->nullable();
            $table->string('image')->nullable();
            $table->date('release_date')->nullable();
            $table->string('manufacturer')->nullable();
            $table->integer('sort_order')->default(1);

            $table->unsignedBigInteger('game_id')->nullable();
            $table->foreign('game_id')
                  ->references('id')->on('games')
                  ->onDelete('set null');
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
        Schema::dropIfExists('cheats');
    }
}
