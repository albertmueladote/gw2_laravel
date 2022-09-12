<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesGuildBlockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guild_block', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integerIncrements('id');
            $table->unsignedInteger('guild');
            $table->string('type');
            $table->text('value');
            $table->string('extra');
            $table->integer('row');
            $table->integer('column');
            $table->timestamps();
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
        Schema::dropIfExists('guild_block');
    }
}
