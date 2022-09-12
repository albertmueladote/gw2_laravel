<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesUserGuildTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_guild', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integerIncrements('id');
            $table->unsignedInteger('user');
            $table->unsignedInteger('guild');
            $table->timestamps();
            $table->foreign('user')->references('id')->on('user');
            $table->foreign('guild')->references('id')->on('guild');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_guild');
    }
}
