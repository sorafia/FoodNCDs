<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExercisebehaviorIdToProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->integer('exercisebehavior_id')->unsigned()->nullable();
            $table->foreign('exercisebehavior_id', 'profiles_exercisebehavior_id_foreign')
                ->references('id')
                ->on('exercisebehaviors')
                ->onDelete('cascade')
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropForeign('profiles_exercisebehavior_id_foreign');
            $table->dropColumn('exercisebehavior_id');
        });
    }
}
