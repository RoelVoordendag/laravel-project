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
            $table->char('name', 50);
            $table->char('email', 100);
            $table->integer('phonenumber');
            $table->char('date', 10);
            $table->char('section', 50);
            $table->string('role', 50);
            $table->string('password');
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
