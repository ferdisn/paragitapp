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
            
            $table->uuid('id');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->integer('batchYear'); //batch Paragita
            $table->date('birthDay');
            $table->string('voiceType');
            $table->string('email')->unique(); //as username
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->primary('id');
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
