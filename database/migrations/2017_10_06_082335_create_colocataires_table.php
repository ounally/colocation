<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColocatairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colocataires', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('budget')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->integer('rayon')->default(1);
            $table->string('country')->nullable();
            $table->string('adresse')->nullable();
            $table->text('description')->nullable();
            $table->string('userType')->nullable();
            $table->string('sitation')->nullable();
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
        Schema::table('colocataires', function(Blueprint $table) {
            $table->dropForeign('colocataires_user_id_foreign');
	    });
	    Schema::drop('colocataires');
    }
}
