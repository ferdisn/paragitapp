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
            $table->integer('sort');
            $table->timestamps();
            $table->primary('codeName');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('voiceType')->references('codeName')->on('codes');
        });

        DB::table('codes')->insert(array(
            'codeGroup' => 'VOICE_TYPE',
            'codeName' => 'SOPRANO1',
            'sort' => 1,
            'description' => ''
        )
    );

    DB::table('codes')->insert(array(
        'codeGroup' => 'VOICE_TYPE',
        'codeName' => 'SOPRANO2',
        'sort' => 2,
        'description' => ''
        )
    );

    DB::table('codes')->insert(array(
        'codeGroup' => 'VOICE_TYPE',
        'codeName' => 'ALTO1',
        'sort' => 3,
        'description' => ''
        )
    );

    DB::table('codes')->insert(array(
        'codeGroup' => 'VOICE_TYPE',
        'codeName' => 'ALTO2',
        'sort' => 4,
        'description' => ''
        )
    );

        DB::table('codes')->insert(array(
            'codeGroup' => 'VOICE_TYPE',
            'codeName' => 'TENOR1',
            'sort' => 5,
            'description' => ''
        )
    );

    DB::table('codes')->insert(array(
        'codeGroup' => 'VOICE_TYPE',
        'codeName' => 'TENOR2',
        'sort' => 6,
        'description' => ''
        )
    );

    DB::table('codes')->insert(array(
        'codeGroup' => 'VOICE_TYPE',
        'codeName' => 'BASS1',
        'sort' => 7,
        'description' => ''
        )
    );

    DB::table('codes')->insert(array(
    'codeGroup' => 'VOICE_TYPE',
    'codeName' => 'BASS2',
    'sort' => 8,
    'description' => ''
        )
    );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::table('users', function(Blueprint $table){
            $table->dropForeign('users_voicetype_foreign');
        });

        Schema::dropIfExists('codes');
    }
}
