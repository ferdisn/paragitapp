<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            //primary key
            $table->uuid('id');
            $table->primary('id');

            //foreign key
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');  

            $table->string('institutionName');
            $table->integer('batchYear');
            $table->string('facultyName');
            $table->string('majorName');
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
        Schema::dropIfExists('education');
    }
}
