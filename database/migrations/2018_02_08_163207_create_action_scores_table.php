<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActionScoresTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_scores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_account_id')->index();
            $table->string('action');
            $table->double('value', 8, 2);
            $table->string('policy');
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
        Schema::drop('action_scores');
    }
}
