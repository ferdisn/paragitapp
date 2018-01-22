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

        $initial_value = array(
            'VOICE_TYPE' => ['SOPRANO1','SOPRANO2','ALTO1','ALTO2','TENOR1','TENOR2','BASS1','BASS2'],
            'CONTACT_TYPE' => ['PHONE','EMAIL','SOCIAL_MEDIA','WEBSITE','MESSAGING']
    );

        foreach($initial_value as $key => $value) {
            //$key = key($value);
            $i = 1;
            foreach($value as $element) {
                $code = new App\Code();
                $code->codeGroup = $key;
                $code->codeName = $element;
                $code->sort = $i;
                $code->description = '';
                $code->save();
                $i++;
            }            
        }  
        
        $user = new App\User();
        $user->firstName = 'Ferdi';
        $user->lastName = 'Saptanera';
        $user->batchYear = 2007;
        $user->birthDay = '27-02-1990';
        $user->voiceType = 'TENOR2';
        $user->email = 'ferdi@paragita.com';
        $user->password = 'password';

        $user->save();

        $user2 = new App\User();
        $user2->firstName = 'Kristian';
        $user2->lastName = 'Wirjadi';
        $user2->batchYear = 2014;
        $user2->birthDay = '27-02-1990';
        $user2->voiceType = 'BASS1';
        $user2->email = 'kristian@paragita.com';
        $user2->password = 'password';

        $user2->save();
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
