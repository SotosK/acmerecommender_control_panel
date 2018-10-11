<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTastePreferences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taste_preferences', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->index();
            $table->bigInteger('item_id')->index();
            $table->float('preference');
            $table->string('user_account_id')->index();
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
        Schema::drop('taste_prefrences');
    }
}
