<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CheatColorStatusMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cheats', function (Blueprint $table) {
            $table->string('color')->nullable();
            $table->string('status')->nullable();
            $table->string('payment_link')->nullable();
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
            $table->dropColumn('color');
            $table->dropColumn('status');
            $table->dropColumn('payment_link');
        });
    }
}
