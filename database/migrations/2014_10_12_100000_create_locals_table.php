<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatelocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre')->nullable();
            $table->string('adresse')->nullable();
            $table->string('gouvernorat')->nullable();
            $table->string('type_proporiete')->nullable();
            $table->string('type_chambre')->nullable();
            $table->string('nbr_chambre')->default('1 Chambre');
            $table->integer('prix')->nullable();
            $table->integer('surface')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->default('default_home.jpg');
            $table->string('meublee')->nullable();
            $table->string('nbr_places')->default('0 chambres');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
		    ->references('id')
		    ->on('users')
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
        Schema::table('locals', function(Blueprint $table) {
            $table->dropForeign('locals_user_id_foreign');
	});

	Schema::drop('locals');
    }
}
