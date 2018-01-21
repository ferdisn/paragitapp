<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codes', function (Blueprint $table) {
            $table->string('codeGroup');
            $table->string('codeName');
            $table->string('description');
            $table->timestamps();
            $table->primary('codeName');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('voiceType')->references('codeName')->on('codes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codes');
    }
}
