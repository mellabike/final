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
            //$table->integer('id')->unsigned();
            //$table->foreign('id')->references('id')->on('personas')->onDelete('cascade');
            $table->string('name');
            $table->string('rut');
            $table->string('direccion');
            $table->date('fechaNacimiento');
            $table->string('email');
            $table->string('username')->unique();
            $table->string('password');
            //$table->boolean('condicion')->default(1);
            $table->integer('id_rol')->unsigned();
            $table->foreign('id_rol')->references('id')->on('roles');
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
