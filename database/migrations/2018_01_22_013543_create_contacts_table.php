<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            //primary key
            $table->uuid('id');
            $table->primary('id');

            //foreign key
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');  

            $table->string('contactType');
            $table->string('value');
            $table->timestamps();

            
        });

        Schema::table('contacts', function (Blueprint $table) {
            $table->foreign('contactType')->references('codeName')->on('codes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
