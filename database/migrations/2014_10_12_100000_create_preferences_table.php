<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatepreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('animaux')->nullable();
            $table->string('tabac')->nullable();
            $table->string('genre_prefer')->nullable();
            $table->integer('age_min')->nullable();
            $table->integer('age_max')->nullable();
            $table->string('profession_prefer')->nullable();
            $table->timestamps();
            $table->integer('local_id')->unsigned();
            $table->foreign('local_id')
		    ->references('id')
		    ->on('locals')
		    ->onDelete('restrict')
		    ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('preferences', function(Blueprint $table) {
            $table->dropForeign('preferences_local_id_foreign');
	});

	Schema::drop('preferences');
    }
}
