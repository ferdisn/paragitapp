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
