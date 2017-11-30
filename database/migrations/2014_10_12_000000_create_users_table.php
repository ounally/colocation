<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->text('cin')->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('photo')->default('default.jpg');
            $table->string('sexe')->nullable();
            $table->integer('age')->nullable();
            $table->string('profession')->nullable();
            $table->string('telephone')->nullable();
            $table->string('adresse')->nullable();
            $table->string('codepostal')->nullable();
            $table->string('ville')->nullable();
            $table->string('pays')->nullable();
            $table->text('bio')->nullable();
            $table->integer('niveau')->nullable();
            $table->string('fbid')->nullable();
            $table->string('mailverification')->nullable();
            $table->string('telephoneverification')->nullable();
            $table->string('idverification')->nullable();
            $table->string('fbverification')->nullable();
            $table->string('charteverification')->nullable();
            $table->boolean('admin')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
