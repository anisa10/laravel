<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	['title'=>'Membuat Website dengan Laravel',
            'content'=>'Belajar Laravel 6'],
            ['title'=>'Belajar Tajwid',
            'content'=>'Hukum-Hukum']
        ];
        DB::table('post')->insert($data);

    }
}
