<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('weight');
            $table->string('energy');
            $table->string('carbohydrate');
            $table->string('protein');
            $table->string('lipid');
            $table->string('sodium');
            $table->string('egg');
            $table->string('nuts');
            $table->string('peanuts');
            $table->string('soy');
            $table->string('shrimps');
            $table->string('crab');
            $table->string('fish');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('menus');
    }
}
