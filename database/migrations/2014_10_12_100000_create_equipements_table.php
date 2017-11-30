<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateequipementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('climatiseur')->nullable();
            $table->string('gazDeVille')->nullable();
            $table->string('chaufageCentral')->nullable();
            $table->string('ascenseur')->nullable();
            $table->string('jardin')->nullable();
            $table->string('wifi')->nullable();
            $table->string('parking')->nullable();
            $table->string('balcon')->nullable();
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
        Schema::table('equipements', function(Blueprint $table) {
            $table->dropForeign('equipements_local_id_foreign');
	});

	Schema::drop('equipements');
    }
}
