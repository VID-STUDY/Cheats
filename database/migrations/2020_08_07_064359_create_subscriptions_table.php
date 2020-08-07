<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();

            $table->string('username');
            $table->string('hwidid')->nullable();
            $table->string('serialnum');
            $table->bigInteger('serialtime');
            $table->boolean('serialstatus')->default(False);

            $table->unsignedBigInteger('cheat_id');

            $table->foreign('username')
                ->references('email')->on('users')
                ->onDelete('cascade');

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
        Schema::dropIfExists('subscriptions');
    }
}
