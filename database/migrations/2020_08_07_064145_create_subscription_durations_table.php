<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionDurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_durations', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('duration');
            $table->float('price');
            $table->unsignedBigInteger('cheat_id');

            $table->foreign('cheat_id')
                ->references('id')->on('cheats')
                ->onDelete('cascade');

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
        Schema::dropIfExists('subscribtion_durations');
    }
}
