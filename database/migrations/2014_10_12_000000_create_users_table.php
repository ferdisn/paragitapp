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
            $table->foreign('voiceType')->references('codeName')->on('codes');

            //reference ke fakultas dn jurusan pake sistem email kemarin, nullable
            //univ, tahun fakultas, fakultas, jurusan, additional note

            //reference ke alamat (rumah,kantor,kos) pake sistem email kemarin, nullable
            //nama rumah, nama kantor, nama kos, alamat

            //reference ke nomor telepon, WA, Telegram, email, 

            //reference ke socmed, website
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
