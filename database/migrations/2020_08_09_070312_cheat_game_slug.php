<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CheatGameSlug extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cheats', function (Blueprint $table) {
            $table->string('slug')->nullable();
        });
        Schema::table('games', function (Blueprint $table) {
            $table->string('slug')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cheats', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
        Schema::table('games', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
