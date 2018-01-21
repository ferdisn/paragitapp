<?php

use Illuminate\Database\Seeder;

class CodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Code::class)->create(
            [
                'codeGroup' => 'VOICE_TYPE',
                'codeName' => 'SOPRANO1',
                'desc' => ''
            ],
            [
                'codeGroup' => 'VOICE_TYPE',
                'codeName' => 'SOPRANO2',
                'desc' => ''
            ],
            [
                'codeGroup' => 'VOICE_TYPE',
                'codeName' => 'ALTO1',
                'desc' => ''
            ],
            [
                'codeGroup' => 'VOICE_TYPE',
                'codeName' => 'ALTO2',
                'desc' => ''
            ],
            [
                'codeGroup' => 'VOICE_TYPE',
                'codeName' => 'TENOR1',
                'desc' => ''
            ],
            [
                'codeGroup' => 'VOICE_TYPE',
                'codeName' => 'TENOR2',
                'desc' => ''
            ],
            [
                'codeGroup' => 'VOICE_TYPE',
                'codeName' => 'BASS1',
                'desc' => ''
            ],
            [
                'codeGroup' => 'VOICE_TYPE',
                'codeName' => 'BASS2',
                'desc' => ''
            ]
        );
    }
}
